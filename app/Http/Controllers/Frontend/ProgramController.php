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
   $regionalDirector = Staff::with([
        'children.children'
    ])
    ->whereNull('parent_id')
    ->where('staff_type', 'management')
    ->where('is_active', true)
    ->first();
// dd(
//     $regionalDirector->children->toArray()
// );
    // dd($regionalDirector);

    return view(
        'frontend.organizational-structure',
        compact('regionalDirector')
    );
}
}
