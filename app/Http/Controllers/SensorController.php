<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SensorParser;

class SensorController extends Controller
{
    public function index()
    {
        return SensorParser::all();
    }
}
