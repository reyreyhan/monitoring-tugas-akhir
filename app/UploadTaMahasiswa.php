<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadTaMahasiswa extends Model
{
  protected $table = "upload_ta_mahasiswa";
  public $timestamps = false;

  public function jenis() {
    return $this->hasOne('App\Jenis','id','id_jenis');
  }

}
