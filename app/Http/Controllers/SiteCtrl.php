<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteCtrl extends Controller
{
    //
    public function viewHome(){
        return view('home');
    }

    public function viewAbout(){
        return view('pages.about');
    }

    public function viewContactUs(){
        return view('pages.contact');
    }

    public function viewJobDetails(){
        return view('pages.jobDetails');
    }

    public function viewJobs(){
        return view('pages.jobs');
    }

    public function viewPartners(){
        return view('pages.partners');
    }

    public function viewServices(){
        return view('pages.services');
    }
}