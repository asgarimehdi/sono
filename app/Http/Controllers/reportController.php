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
        $reception = reception::findOrFail(1);
        dd($reception->service->name);
    }
}
