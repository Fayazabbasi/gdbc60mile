<?php

namespace App\Http\Controllers\frontend;
use App\Models\ProgramPart;
use App\Models\Program;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeeStructureController extends Controller
{
    //
    public function index(){
    
    $programs = Program::with('programParts')->get();

$programs->transform(function ($program) {

    $program->part1_fee = $program->programParts
        ->where('part_id', 1)
        ->first()?->fees;

    $program->part2_fee = $program->programParts
        ->where('part_id', 2)
        ->first()?->fees;

    return $program;
});
    // echo "<pre>";
    // print_r($programs);die;
    

   return view('frontend.fee-structure',compact('programs'));
    }
}
