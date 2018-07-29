<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SetTaMahasiswa;
use App\BimbinganTaMahasiswa;
class DosenController extends Controller
{
    public function index() {
      $nip1 = SetTaMahasiswa::with('dosTA')->where('nip1',session('sessionUser')[0]->nip)->get();
      $nip2 = SetTaMahasiswa::with('dosTA')->where('nip2',session('sessionUser')[0]->nip)->get();
      $nip3 = SetTaMahasiswa::with('dosTA')->where('nip3',session('sessionUser')[0]->nip)->get();
      $nip4 = SetTaMahasiswa::with('dosTA')->where('nip4',session('sessionUser')[0]->nip)->get();
      return view('dosen.dosentppa',compact(['nip1','nip2','nip3','nip4']));
    }

    public function detail($nrp) {
      $data = SetTaMahasiswa::with('dosTA')->where('nrp',$nrp)->get();
      $data2 = BimbinganTaMahasiswa::with('dos')->where('nrp',$nrp)->where('nip',session('sessionUser')[0]->nip)->where('id_kategori','1')->get();
      return  view('dosen.bimbinganmahasiswatppa',compact(['data','data2']));
    }

    public function approve(Request $request, $nrp, $id) {
      $data =  BimbinganTaMahasiswa::where('nrp',$nrp)->where('id',$id)->first();
      $data->status = 1;
      $data->save();
      return redirect()->back();
    }
}
