<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function homePage()
    {
        return view('welcome');
    }

    // about
    public function about()
    {
        return view('pages.about');
    }

    // why
    public function why()
    {
        return view('pages.why');
    }
    // principal message
    public function principal()
    {
        return view('pages.principal');
    }
    // vice principal message
    public function vicePrincipal()
    {
        return view('pages.viceprincipal');
    }

    // mission and vision
    public function missionVision()
    {
        return view('pages.missionvision');
    }

    // CSR page
    public function csr()
    {
        return view('pages.csr');
    }
    // Procedures page
    public function procedures()
    {
        return view('pages.procedures');
    }
}
