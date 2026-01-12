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
    // Annual Fee Structure page
    public function annualFeeStructure()
    {
        return view('pages.annualfeestructure');
    }
    // transfer certificate page
    public function transferCertificate()
    {
        return view('pages.transfercertificate');
    }
    // student life
    public function studentslife()
    {
        return view('pages.studentslife');
    }
    // parents
    public function parents()
    {

        return view('pages.parents');
    }
    // teaching staff
    public function teachingStaff()
    {
        return view('pages.teachingstaff');
    }
    // adminstrative
    public function administrative()
    {
        return view('pages.administrative');
    }
    // infrastructure
    public function infrastructure()
    {
        return view('pages.infrastructure');
    }
    // mandatory disclosure
    public function mandatoryDisclosure()
    {
        return view('pages.mandatorydisclosure');
    }

    // gallery
    public function gallery()
    {
        return view('pages.gallery');
    }

    // contact
    public function contact()
    {
        return view('pages.contact');
    }

    // notices
    public function notices()
    {
        return view('pages.notices');
    }
}
