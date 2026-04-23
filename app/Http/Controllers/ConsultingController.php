<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultingController extends Controller
{
    public function Webel()
    {
        return view('pages.consulting.webel');
    }
    public function PropertyTaxAssessment()
    {
        return view('pages.consulting.property-tax-assesment');
    }
    public function PropertyRegistration()
    {
        return view('pages.consulting.property-registration');
    }
    public function GSTNotice()
    {
        return view('pages.consulting.gst-notice');
    }
    public function IncomeTaxNotice()
    {
        return view('pages.consulting.income-tax-notice');
    }
    public function StrikeOff()
    {
        return view('pages.consulting.strike-off');
    }
    public function CompanyHelthCheckup()
    {
        return view('pages.consulting.company-helth-checkup');
    }
    public function Hindu()
    {
        return view('pages.consulting.hindu');
    }
    public function ManagementConsulting()
    {
        return view('pages.consulting.management-consulting');
    }
    public function AccountOutsourcing()
    {
        return view('pages.consulting.account-outsourcing');
    }
    public function DetailsProjectReport()
    {
        return view('pages.consulting.details-project-report');
    }
    public function NDA()
    {
        return view('pages.consulting.nda');
    }
    public function ServiceLevelAgreement()
    {
        return view('pages.consulting.service-level-agreement');
    }
    public function BusinessContract()
    {
        return view('pages.consulting.business-contract');
    }
    public function PowerOfAttorney()
    {
        return view('pages.consulting.power-of-attorney');
    }
    public function VirtualCfoService()
    {
        return view('pages.consulting.virtual-cfo-service');
    }
    public function HR()
    {
        return view('pages.consulting.hr');
    }
    public function PayrollManagement()
    {
        return view('pages.consulting.payroll-management');
    }
    public function LegalNotice()
    {
        return view('pages.consulting.legal-notice');
    }
}
