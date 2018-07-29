<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use App\SetTaMahasiswa;

class PengajuanTAController extends Controller
{
    public function index() {
      $data = Dosen::with(['role'])->where('id_role','2')->orWhere('id_role','4')->get();
      $data2 = SetTaMahasiswa::where('nrp',session('sessionUser')[0]->nrp)->count();
      if($data2 == 1) {
        $data3 = SetTaMahasiswa::with(['dos1','dos2','dos3','dos4'])->where('nrp',session('sessionUser')[0]->nrp)->get();
        return view('index2',compact(['data3']));
      } else {
        return view('index',compact(['data']));
      }
    }

    public function store(Request $request) {
      //echo "insert";
      $data = new SetTaMahasiswa();
      $data->nrp = session('sessionUser')[0]->nrp;
      $data->nip1 = $request->dosen1;
      $data->nip2 = $request->dosen2;
      $data->nip3 = $request->dosen3;
      $data->nip4 = $request->dosen4;
      $data->judul = $request->judul;
      $data->abstrak = $request->abstrak;
      $data->status = 1;
      //$ss = session('sessionUser')[0]->nrp;
      $data->save();
      return redirect()->back();

    }

    public function vupdate() {
      $data3 = SetTaMahasiswa::with(['dos1','dos2','dos3','dos4'])->where('nrp',session('sessionUser')[0]->nrp)->get();
      $data = Dosen::with(['role'])->where('id_role','2')->get();
      return view('index3',compact(['data3','data']));
      //dd($data3);
    }

    public function update(Request $request) {
      $data =  SetTaMahasiswa::where('nrp',session('sessionUser')[0]->nrp)->first();
      $data->judul = $request->judul;
      $data->abstrak = $request->abstrak;
      $data->nip1 = $request->dosen1;
      $data->nip2 = $request->dosen2;
      $data->nip3 = $request->dosen3;
      $data->nip4 = $request->dosen4;
      $data->status = 1;
      $data->save();
      return redirect('/pengajuan');
    }

    public function final() {
      $data =  SetTaMahasiswa::where('nrp',session('sessionUser')[0]->nrp)->first();
      $data->status = 1;
      $data->save();
      return redirect()->back();
    }
}
