<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Last_Data;

class LastDataController extends Controller
{
    public function index()
    {
        return Last_Data::all();
    } 
}
