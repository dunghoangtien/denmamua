<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    //adminhome
    public function getadminhome(){
    	return view('admin.home');
    }
}
