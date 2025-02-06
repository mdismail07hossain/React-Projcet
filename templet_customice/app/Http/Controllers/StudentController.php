<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Models\IsmailModel;
use App\Models\SutdentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{



  //  create page name 
   public function add_user()
   {
    return view('add_user');
   }
   public function store(Request $request){
    $datas = new SutdentModel;
    $datas->name =$request->name;
    $datas->email =$request->email;
    $datas->contact =$request->contact;
    $datas->save();
    return Redirect::to('/manage-user');
   }
   public function show(){
    $datas= SutdentModel::all();
    return view('pages.user.manage_users',compact('datas'));
   }
  //  public function update($id){
  //   $data = SutdentModel::find($id);
  //   return view('edite',compact('data'));
  //  }
  //  public function editeStore(Request $request){
  //   $data = SutdentModel::find($request->student_id);
  //   $data->name = $request->name;
  //   $data->email = $request->email;
  //   $data->contact = $request->contact;
  //   $data->save();
  //   return Redirect::to('/table');
  //  }

}
