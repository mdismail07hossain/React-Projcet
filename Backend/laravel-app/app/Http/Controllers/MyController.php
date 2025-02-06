<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\IsmailModel;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function show(){
       $students = IsmailModel::all();
       
       return view("tablee",compact("students"));
    }
}
