<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Models\IsmailModel;
use App\Models\SutdentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
   public function show(){
     $datas= SutdentModel::all();
    //  $ismails= IsmailModel::all();
    //  @dd($datas);
     return view('table',compact('datas')); 
   }

   public function destroy($id){
    $datas= SutdentModel::find($id);
    $datas->delete();
    return Redirect::to('/table');
   }
}
