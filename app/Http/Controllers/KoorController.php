<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SetTaMahasiswa;
Use App\Jenis;
Use App\UploadTaMahasiswa;

class KoorController extends Controller
{
    public function index() {
      $data = SetTaMahasiswa::with(['mahasiswa'])->get();
      return view('koor.evaljudul',compact('data'));
    }

    public function approve($nrp) {
      $data = SetTaMahasiswa::where('nrp',$nrp)->first();
      $data->status = 2;
      $data->save();
      return redirect()->back();
    }

    public function reject($nrp) {
      $data = SetTaMahasiswa::where('nrp',$nrp)->first();
      $data->status = 3;
      $data->save();
      return redirect()->back();
    }

    public function tppa() {
      $data = SetTaMahasiswa::with(['mahasiswa'])->where('status','2')->get();
      return view('koor.berkastppa',compact('data'));
    }

    public function dtppa($nrp) {
      $data = UploadTaMahasiswa::with('jenis')->where('id_kategori','1')->where('nrp',$nrp)->orderBy('id_jenis','asc')->get();
      $data2 = SetTaMahasiswa::with('mahasiswa')->where('nrp',$nrp)->get();
      return view('koor.berkastppadetail',compact(['data','data2']));
    }

    public function tppaa($id) {
      $data = UploadTaMahasiswa::where('id',$id)->first();
      $data->status = 1;
      $data->save();
      return redirect()->back();
    }

    public function revtppa() {
      $data = SetTaMahasiswa::with(['mahasiswa'])->where('status','2')->get();
      return view('koor.berkasrevtppa',compact('data'));
    }

    public function drevtppa($nrp) {
      $data = UploadTaMahasiswa::with('jenis')->where('id_kategori','2')->where('nrp',$nrp)->orderBy('id_jenis','asc')->get();
      $data2 = SetTaMahasiswa::with('mahasiswa')->where('nrp',$nrp)->get();
      return view('koor.berkasrevtppadetail',compact(['data','data2']));
    }

    public function revtppaa($id) {
      $data = UploadTaMahasiswa::where('id',$id)->first();
      $data->status = 1;
      $data->save();
      return redirect()->back();
    }

    public function ta() {
      $data = SetTaMahasiswa::with(['mahasiswa'])->where('status','2')->get();
      return view('koor.berkasta',compact('data'));
    }

    public function dta($nrp) {
      $data = UploadTaMahasiswa::with('jenis')->where('id_kategori','3')->where('nrp',$nrp)->orderBy('id_jenis','asc')->get();
      $data2 = SetTaMahasiswa::with('mahasiswa')->where('nrp',$nrp)->get();
      return view('koor.berkastadetail',compact(['data','data2']));
    }

    public function taa($id) {
      $data = UploadTaMahasiswa::where('id',$id)->first();
      $data->status = 1;
      $data->save();
      return redirect()->back();
    }

    public function revta() {
      $data = SetTaMahasiswa::with(['mahasiswa'])->where('status','2')->get();
      return view('koor.berkasrevta',compact('data'));
    }

    public function drevta($nrp) {
      $data = UploadTaMahasiswa::with('jenis')->where('id_kategori','4')->where('nrp',$nrp)->orderBy('id_jenis','asc')->get();
      $data2 = SetTaMahasiswa::with('mahasiswa')->where('nrp',$nrp)->get();
      return view('koor.berkasrevtadetail',compact(['data','data2']));
    }

    public function revtaa($id) {
      $data = UploadTaMahasiswa::where('id',$id)->first();
      $data->status = 1;
      $data->save();
      return redirect()->back();
    }
}
