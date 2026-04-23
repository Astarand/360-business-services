<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompliancesController extends Controller
{
    public function BusinessCommencement()
    {
        return view('pages.compliances.business-commencement');
    }
    public function AuditorRecruitment()
    {
        return view('pages.compliances.auditor-recruitment');
    }
    public function AnnualCompliance()
    {
        return view('pages.compliances.annual-compliance');
    }
    public function PTaxFillings()
    {
        return view('pages.compliances.p-tax-filling');
    }
    public function BusinessTaxFillings()
    {
        return view('pages.compliances.business-tax-filling');
    }
    public function GSTReturnFilling()
    {
        return view('pages.compliances.gst-return-filling');
    }
    public function GSTAnnualFilling()
    {
        return view('pages.compliances.gst-annual-filling');
    }
    public function TDSFilling()
    {
        return view('pages.compliances.tds-filling');
    }
    public function PFFilling()
    {
        return view('pages.compliances.pf-filling');
    }
    public function ProfessionalTax()
    {
        return view('pages.compliances.professional-tax');
    }
    public function GSTInvoicing()
    {
        return view('pages.compliances.gst-invoicing');
    }
    public function EWayBill()
    {
        return view('pages.compliances.eway-bill');
    }
    public function Form16()
    {
        return view('pages.compliances.form-16');
    }
    public function StatutoryAudit()
    {
        return view('pages.compliances.statutory-audit');
    }
    public function InternalAudit()
    {
        return view('pages.compliances.internal-audit');
    }
    public function ExternalAudit()
    {
        return view('pages.compliances.external-audit');
    }
    public function ComplianceAudit()
    {
        return view('pages.compliances.compliance-audit');
    }
}
