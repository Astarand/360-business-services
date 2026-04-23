<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterLinkController extends Controller
{
    public function Annual(){
        return view('pages.flink.annual');
    }
    public function InternalExtrnalAudit(){
        return view('pages.flink.iea');
    }
    public function PropertyAndMutation()
    {
        return view('pages.flink.ptaxm');
    }
    public function PropertyDeed()
    {
        return view('pages.flink.pd');
    }
}
