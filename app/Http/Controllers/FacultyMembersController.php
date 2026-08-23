<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
class FacultyMembersController extends Controller
{
    //
   public function index(){
    $administrators = Staff::where('staff_type', 'management')
    ->where('is_active', true)
    ->get();
    $lecturers = Staff::where('staff_type', 'teaching')
    ->where('is_active', true)
    ->get();
    $workers = Staff::where('staff_type', 'non-teaching')
    ->where('is_active', true)
    ->get();
    return view('frontend.faculty-members', compact('lecturers','administrators','workers'));
    }

    public function principal(){
     $principal = Staff::where('designation','=','Principal')->first();
    return view('frontend.principal',compact('principal'));
    } 
    

}
