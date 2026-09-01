<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $principal = Staff::where('designation','=','Principal')->first();
        return view('frontend.index',compact('principal'));
    }
}
