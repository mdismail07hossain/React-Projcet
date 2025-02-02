<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Models\IsmailModel;
use App\Models\SutdentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{

  // Viwe all Data from database
   public function show(){
     $datas= SutdentModel::all();
    //  $ismails= IsmailModel::all();
    //  @dd($datas);
     return view('table',compact('datas')); 
   }
// Delete any Data in the datqabase
   public function destroy($id){
    $datas= SutdentModel::find($id);
    $datas->delete();
    return Redirect::to('/table');
   }

  //  create page name 
   public function create()
   {
    return view('create');
   }
   public function store(Request $request){
    $datas = new SutdentModel;
    $datas->name =$request->name;
    $datas->email =$request->email;
    $datas->contact =$request->contact;
    $datas->save();
    return Redirect::to('/table');
   }
   public function update($id){
    $datas = SutdentModel::find($id);
    return view('edite',compact('datas'));
   }
   public function editestore(Request $request){
    $datas = SutdentModel::find($request->id);
    $datas->name = $request->name;
    $datas->email = $request->email;
    $datas->contact = $request->contact;
    $datas->save();
    return Redirect::to('/table');
   }

}
