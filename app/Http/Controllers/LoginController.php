<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Dosen;

class LoginController extends Controller
{
    public function action(Request $request) {
      $data[0] = Mahasiswa::where('email',$request->email)->where('password',$request->password)->count();

      if ($data[0] > 0) {
        $data[1] = Mahasiswa::where('email',$request->email)->where('password',$request->password)->with(['role'])->get();
        $request->session()->put('sessionUser',$data[1]);
        //print_r(session('sessionUser')[0]->nama);
        return redirect('/pengajuan');
      } else if($data[0] <= 1) {
        $data[2] = Dosen::where('email',$request->email)->where('password',$request->password)->with(['role'])->count();
        //dd($data[2]);
        if($data[2] > 0) {
          $data[1] = Dosen::where('email',$request->email)->where('password',$request->password)->with(['role'])->get();
          if($data[1][0]->role->role == "dosen") {
            $request->session()->put('sessionUser',$data[1]);
            return redirect('/dosen');
          } else if ($data[1][0]->role->role == "admin") {
            $request->session()->put('sessionUser',$data[1]);
            return redirect('/admin');
          } else if($data[1][0]->role->role == "koor pa") {
            $request->session()->put('sessionUser',$data[1]);
            return redirect('/koor');
          }
        } else {
            return redirect()->back();
        }

      } else {
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
