<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MohamedController extends Controller
{
    public function index(){

        return view('index');


    }

public function show($id){

        
    
        return ' My ID is:' .$id;

    }
}

