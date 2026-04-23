<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        return view('pages.index');
    }
    public function QueriesForm()
    {
        return view('pages.leads');
    }
}
