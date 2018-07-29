<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis;
use App\UploadTaMahasiswa;
use App\Persyaratan;

class UploadRevisiTPPAController extends Controller
{
    public function index() {
      $data = Jenis::where('id_kategori','2')->with(['kategori','mahasiswa'])->get();
      $data2 = UploadTaMahasiswa::with('jenis')->where('id_kategori','2')->where('nrp',session('sessionUser')[0]->nrp)->orderBy('id_jenis','asc')->get();
      $data3 = Persyaratan::where('id_kategori','2')->with(['kategori'])->first();
      return view('revtppa',compact(['data','data2','data3']));
    }

    public function store(Request $request) {
      $check = Persyaratan::where('id_kategori','2')->with(['kategori'])->first();
      $now = date('Y-m-d h:i:s');

      if($check->deadline < $now) {
        echo "wes telat";
      } else {
        $data = new UploadTaMahasiswa();
        $data->nrp = session('sessionUser')[0]->nrp;
        $data->id_kategori = 2;
        $data->id_jenis = $request->jenis;
        $data->status = 0;

        $this->validate($request, [
             'file' => 'required|file|max:2000|mimes:jpeg,png,pdf'
        ]);

        $file = $request->file('file');
        $path = base_path() . '/public/upload/RevTPPA';
        //print_r($path);

        $fileName = session('sessionUser')[0]->nrp . "_" . session('sessionUser')[0]->nama . "_" . $data->id_kategori . "_" . $data->id_jenis . "." . $file->getClientOriginalExtension();
        //print_r($fileName);
        $up = $request->file('file')->move($path,$fileName);
        $data->file = $fileName;
        $data->save();
        return redirect()->back();
      }
    }

    public function delete($nrp, $kategori, $jenis, $id) {
      $data = UploadTaMahasiswa::where('id',$id)->first();

      $check = base_path() . '/public/upload/RevTPPA/' . $data->file;

      if(file_exists($check)) {
        //echo "file ada";
        unlink($check);
      } else {
        //echo "file tidak ada";
      }

      $data->delete();
      return redirect()->back();
    }
}
