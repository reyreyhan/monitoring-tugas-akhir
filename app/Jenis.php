<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
  protected $table = "jenis";
  public $timestamps = false;

  public function kategori() {
    return $this->hasOne('App\Kategori','id','id_kategori');
  }

  public function mahasiswa() {
    return $this->hasOne('App\UploadTaMahasiswa','id_jenis','id');
  }

}
