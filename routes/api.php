<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\SensorParser;
use App\Models\Last_Data;


Route::get('lastdata', function() {
   return Last_Data::all();
});

Route::get('sensors', function() {
  return SensorParser::all();
});
