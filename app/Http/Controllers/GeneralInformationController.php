<?php

namespace App\Http\Controllers;

use App\Models\GeneralInfo;
use Illuminate\Http\Request;

class GeneralInformationController extends Controller
{
    public function getData(){
        $generalInformationData = GeneralInfo::first();

        return response()->json($generalInformationData);
    }
}
