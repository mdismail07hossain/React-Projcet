<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\IsmailModel;
use Illuminate\Http\Request;

class IsmaiController extends Controller
{
   public function show(){
    $ismails = IsmailModel::all();
    return view("table",compact("ismails"));
   }
}
