<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persyaratan;

class SetDeadlineController extends Controller
{
    public function index() {
      $data = Persyaratan::with(['kategori'])->get();
      return view('koor.deadline',compact(['data']));
    }

    public function update(Request $request) {
      $data = Persyaratan::where('id',$request->persyaratan)->first();

      $ex = explode("/",$request->tanggal);
      $ex2 = explode(" ",$ex[2]);
      $ex3 = explode(":",$ex2[1]);

      if($ex3[0] < 10) {
        $hour = "0" . $ex3[0];
      } else {
        $hour = $ex3[0];
      }

      $strDate =  $ex2[0] . "-" . $ex[0] . "-" . $ex[1] . " " . $hour . ":" . $ex3[1] . ":00";
      $data->deadline = $strDate;

      $data->save();
      return redirect()->back();
    }
}
