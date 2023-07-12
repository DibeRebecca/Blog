<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function accueil(){
        return view('pages.accueil');
    }
    public function apropos(){
        return view('pages.apropos');
    }
    public function services(){
        return view('pages.services');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function articles(){
        return view('pages.articles');
    }
    public function single(){
        return view('pages.single');
    }
}
