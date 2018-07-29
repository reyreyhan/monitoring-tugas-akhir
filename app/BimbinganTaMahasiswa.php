<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BimbinganTaMahasiswa extends Model
{
  protected $table = "bimbingan_ta_mahasiswa";
  public $timestamps = false;

  public function dos() {
    return $this->hasOne('App\Dosen','nip','nip');
  }
}
