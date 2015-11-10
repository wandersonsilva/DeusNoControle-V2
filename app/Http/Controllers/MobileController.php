<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Participante;
use App\Http\Controllers\Controller;

class MobileController extends Controller
{

    public function index()
    {
        return view('mobile.index', array('participantes' => Participante::all()));

    }


}
