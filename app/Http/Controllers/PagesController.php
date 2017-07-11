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
        
        return view('about');
    }

    /**
    * Show the contact view
    * 
    * @return Response
    */
    public function showContact(){
        return view('contact');
    }

    /**
    * Show the post view
    * 
    * @return Response
    */
    public function showPost(){
        return view('post');
    }

}