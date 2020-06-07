<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Killer;

class KillerController extends Controller
{
    public function index()
    {


        return view('killer/index');
    }

    public function show()
    {

        return view('killer/show');
    }
}
