<?php

namespace App\Http\Controllers;

use App\doctor;
use App\patient;
use Illuminate\Http\Request;

class doctorController extends Controller
{
    //
    public function index(){

        $doctors= new doctor;
        $patients= new patient;
        var_dump($patients->all());
    }
}
