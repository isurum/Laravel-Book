<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
    * Show the welcome view
    * 
    * @return Response
    */
    public function index()
    {
        return view('welcome');
    }

    /**
    * Show the about view
    * 
    * @return Response
    */
    public function showAbout(){

        $myName = "Isuru Madusanka";
        
        return view('about')->with('name', $myName);
    }

    /**
    * Show the contact view
    * 
    * @return Response
    */
    public function showContact(){
        return view('contact');
    }

}