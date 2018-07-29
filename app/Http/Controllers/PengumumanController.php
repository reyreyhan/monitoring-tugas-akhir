<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{
    public function index() {
      return view('koor.pengumuman');
    }

    public function store(Request $request) {
      $data = new Pengumuman();
      $data->judul = $request->judul;
      $data->pengumuman = $request->pengumuman;
      $data->save();
      return redirect()->back();
    }
}
