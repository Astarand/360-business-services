<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function Blog(){
        return view('pages.blog');
    }
    public function AccountAuditService(){
        return view('pages.accountAuditService');
    }
    public function AccountingOutsourcing(){
        return view('pages.accountingOutsourcing');
    }

    public function  CompanyCompliance(){
        return view('pages.companyCompliance');
    }
}
