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
        $reception = reception::select('receptioncode','codemelli')
            ->where('price', '!=', '')
            ->where('report', '=', '')
            ->skip('0')
            ->take('7')
            ->distinct()
            ->get();

        return view('welcome',compact('reception'));
    }
}
