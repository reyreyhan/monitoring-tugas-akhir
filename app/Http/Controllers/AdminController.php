<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class AdminController extends Controller
{
    public function index() {
      $data = Dosen::where('id_role','4')->get();
      $data2 = Dosen::where('id_role','!=','4')->get();
      return view('admin',compact(['data','data2']));
    }

    public function store(Request $request) {
      $data = Dosen::where('id',$request->id)->first();
      $data->id_role = 4;
      $data->save();
      return redirect()->back();
    }
}
