<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SetTaMahasiswa;
use App\BimbinganTaMahasiswa;
use App\Persyaratan;

class BimbinganTPPAController extends Controller
{
    public function index() {
      $check = SetTaMahasiswa::with(['dos1','dos2','dos3','dos4'])->where('nrp',session('sessionUser')[0]->nrp)->count();
      if($check == 0) {
        //return redirect()->back();
        return "<html>
                <body onload='myFunction()'>
                <script>
                function myFunction() {
                    alert('Masukkan Judul TA Anda!!!');
                    window.location.href = 'pengajuan';
                }
                </script>
                </body>
                </html>";
      }
      
      $data = SetTaMahasiswa::with(['dos1','dos2','dos3','dos4'])->where('nrp',session('sessionUser')[0]->nrp)->get();
      $data2 = BimbinganTaMahasiswa::with(['dos'])->where('nrp',session('sessionUser')[0]->nrp)->where('id_kategori','1')->get();

      //$data3 = Persyaratan::where('id_kategori','3')->first();
      //$data4 = BimbinganTaMahasiswa::with(['dos'])->where('nrp',session('sessionUser')[0]->nrp)->where('status','1')->count();

      return view('bimbingantppa',compact(['data','data2']));
    }

    public function store(Request $request) {
      $dataTA = SetTaMahasiswa::where('nrp',session('sessionUser')[0]->nrp)->get();
      $data = new BimbinganTaMahasiswa();
      $data->nama = session('sessionUser')[0]->nama;
      $data->nrp = session('sessionUser')[0]->nrp;
      $data->nip = $request->nip;
      $data->judul = $dataTA[0]->judul;
      //$data->tanggal = $request->tanggal;
      $data->isi = $request->isi;
      $data->Minggu = $request->minggu;
      $data->status = 0;
      $data->id_kategori = 1;

      $ex = explode("/",$request->tanggal);
      $ex2 = explode(" ",$ex[2]);
      $ex3 = explode(":",$ex2[1]);

      if($ex3[0] < 10) {
        $hour = "0" . $ex3[0];
      } else {
        $hour = $ex3[0];
      }

      $strDate =  $ex2[0] . "-" . $ex[0] . "-" . $ex[1] . " " . $hour . ":" . $ex3[1] . ":00";
      $data->tanggal = $strDate;
      $data->save();
      return redirect()->back();

    }
}
