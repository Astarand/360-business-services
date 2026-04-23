<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function Trade()
    {
        return view('pages.registration.trade');
    }

    public function GST(){
        return view('pages.registration.gst');
    }
    public function MSME(){
        return view('pages.registration.msme');
    }
    public function Ptax(){
        return view('pages.registration.ptax');
    }
    public function PFESIC(){
        return view('pages.registration.pfesic');
    }
    public function FSSAI(){
        return view('pages.registration.fssai');
    }
    public function ISO(){
        return view('pages.registration.iso');
    }
    public function Fire(){
        return view('pages.registration.fire');
    }
    public function Ayush(){
        return view('pages.registration.ayush');
    }
    public function RERA(){
        return view('pages.registration.rera');
    }
    public function Labour(){
        return view('pages.registration.labour');
    }
    public function Pollution(){
        return view('pages.registration.pollution');
    }
    public function Shop(){
        return view('pages.registration.shop');
    }
    public function DSC(){
        return view('pages.registration.dsc');
    }
    public function RegisteredOfficeChange(){
        return view('pages.registration.registered-office-change');
    }
    public function AddRemoveDirector(){
        return view('pages.registration.add-remove-director');
    }
    public function ContractLabour()
    {
        return view('pages.registration.contract-labour');
    }
    public function Niti()
    {
        return view('pages.registration.niti');
    }
    public function Trademark(){
        return view('pages.registration.trademark');
    }
    public function IntrenationalTrademark(){
        return view('pages.registration.international-trademark');
    }
    public function TrademarkObjection(){
        return view('pages.registration.trademark-objection');
    }
    public function Copyright()
    {
        return view('pages.registration.copyright');
    }
    public function IEC(){
        return view('pages.registration.iec');
    }
    public function Liquor(){
        return view('pages.registration.liquor');
    }
    public function Clinical(){
        return view('pages.registration.clinical');
    }
    public function Drag(){
        return view('pages.registration.drag');
    }
    public function StartUp(){
        return view('pages.registration.startup');
    }

}
