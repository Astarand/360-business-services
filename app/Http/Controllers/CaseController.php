<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseController extends Controller
{
    public function Case(){
        return view('pages.case');
    }
    public function CaseDetails(){
        return view('pages.casedetails');
    }
}
