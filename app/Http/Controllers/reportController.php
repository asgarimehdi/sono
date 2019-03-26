<?php

namespace App\Http\Controllers;

use App\doctor;
use App\reception;
use App\service;
use App\patient;
use Illuminate\Http\Request;

class reportController extends Controller
{
    //
    public function nobatList(){
        $reception = reception::where('price', '!=', '')->where('report', '=', '')->get();

        $patient=$reception[0]->patient;
        echo $patient->name.' '.$patient->family;
    }
}
