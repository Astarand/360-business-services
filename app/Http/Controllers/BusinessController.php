<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function Proprietorship(){
        return view('pages.business.proprietorship');
    }
    public function Partnership(){
        return view('pages.business.partnership');
    }
    public function OnePersonCompany(){
        return view('pages.business.onepersoncompany');
    }
    public function LLP(){
        return view('pages.business.llp');
    }
    public function PVT(){
        return view('pages.business.pvt');
    }
    public function Limited()
    {
        return view('pages.business.limited');
    }
    public function Nidhi(){
        return view('pages.business.nidhi');
    }
    public function section8(){
        return view('pages.business.section8');
    }
    public function NGO(){
        return view('pages.business.ngo');
    }
    public function NgoTrust(){
        return view('pages.business.ngo-trust');
    }
    public function Ecommerce()
    {
        return view('pages.business.ecommerce');
    }
}
