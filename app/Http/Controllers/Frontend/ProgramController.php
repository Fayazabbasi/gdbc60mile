<?php

namespace App\Http\Controllers\frontend;
use App\Models\Program;
use App\Models\Staff;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //
    public function index(){
        $inters = Program::with('subjects')
        ->where('degree_type', 'intermediate')
    ->where('is_active', true)
    ->orderBy('name')
    ->get();
     
    $associates = Program::with('subjects')
        ->where('degree_type', 'associate')
    ->where('is_active', true)
    ->orderBy('name')
    ->get();
    // dd($programs);

    return view('frontend.programs.index', compact('inters','associates'));
    }

    public function show($slug)
{
    $program = Program::where('slug', $slug)
        ->where('is_active', true)
        ->firstOrFail();

    return view('frontend.programs.show', compact('program'));
}

public function organization()
{
   $topLevel = Staff::whereNull('parent_id')
            ->where('is_active', 1)
            ->orderBy('sort_order')
            ->get();
// dd(
//     $regionalDirector->children->toArray()
// );
    // dd($regionalDirector);

    return view(
        'frontend.organizational-structure',
        compact('topLevel')
    );
}
}
