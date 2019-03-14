<?php

namespace App\Http\Controllers;

use App\doctor;
use App\reception;
use App\service;
use App\patient;
use Illuminate\Http\Request;

class doctorController extends Controller
{
    //
    public function index(){
        $receptions = service::findOrFail(1)->receptions;

        foreach ($receptions as $reception) {
            dd ($reception->service);
            //
        }
    }
    public function reverse(){
        $reception = reception::findOrFail(1);

        dd($reception[0]->service->name);
    }
}
