<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGeneralInfoRequest;
use App\Models\GeneralInfo;
use Illuminate\Http\Request;

class GeneralInfoController extends Controller
{
    public function index(){
        $generalInfoData = GeneralInfo::first();
        return view('dashboard.general_info.index',compact('generalInfoData'));
    }

    public function update(Request $request){

        $request->validate([
            'aboutUs_who_we_are'=>'required',
            'aboutUs_establishment'=>'required',
            'aboutUs_why_choose_us'=>'required',
            'contact_addres'=>'required',
            'contact_phone'=>'required',
            'contact_email'=>'required',
            'contact_facebook'=>'required',
            'contact_youtube'=>'required',
            'contact_insta'=>'required',
            'aboutUs_vission'=>'required',
            'aboutUs_mission'=>'required',
        ],);

        $generalInfoData = GeneralInfo::first();
        $generalInfoData->aboutUs_who_we_are = $request->aboutUs_who_we_are;
        $generalInfoData->aboutUs_establishment = $request->aboutUs_establishment;
        $generalInfoData->aboutUs_why_choose_us = $request->aboutUs_why_choose_us;
        $generalInfoData->contact_addres = $request->contact_addres;
        $generalInfoData->contact_phone = $request->contact_phone;
        $generalInfoData->contact_email = $request->contact_email;
        $generalInfoData->contact_facebook = $request->contact_facebook;
        $generalInfoData->contact_youtube = $request->contact_youtube;
        $generalInfoData->contact_insta = $request->contact_insta;
        $generalInfoData->aboutUs_vission = $request->aboutUs_vission;
        $generalInfoData->aboutUs_mission = $request->aboutUs_mission;
        $generalInfoData->update();
        return redirect()->back()->with('success','Information Updated Succesfully');

    }
}
