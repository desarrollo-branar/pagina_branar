<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function about() {
        return view('pages.about');
    }
    
    public function contact() {
        return view('pages.contact');
    }
    
    // Services
    public function csa() {
        return view('pages.services.csa');
    }

    public function infraestructure() {
        return view('pages.services.infraestructure');
    }

    public function social_media() {
        return view('pages.services.social_media');
    }

    public function profit_plus() {
        return view('pages.services.profit_plus');
    }

    public function servicepack() {
        return view('pages.services.servicepack');
    }

    public function dev_web() {
        return view('pages.services.dev_web');
    }
}
