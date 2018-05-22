<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class LoginController extends Controller
{
    public function action(Request $request) {
      $data[0] = Mahasiswa::where('email',$request->email)->where('password',$request->password)->count();

      if ($data[0] > 0) {
        $data[1] = Mahasiswa::where('email',$request->email)->where('password',$request->password)->get();
        $request->session()->put('sessionUser',$data[1]);
        //print_r(session('sessionUser')[0]->nama);
        return redirect('/welcome');
      }else {
        return redirect()->back();
      }
    }

    public function logout (){
        session()->flush();
        if (empty(session('sessionUser'))) {
          return redirect('/');
        }
    }
}
