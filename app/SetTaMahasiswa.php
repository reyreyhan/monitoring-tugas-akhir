<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SetTaMahasiswa extends Model
{
  protected $table = "set_ta_mahasiswa";
  public $timestamps = false;

  public function mahasiswa() {
    return $this->hasOne('App\Mahasiswa','nrp','nrp');
  }
  public function dos1() {
    return $this->hasOne('App\Dosen','nip','nip1');
  }

  public function dos2() {
    return $this->hasOne('App\Dosen','nip','nip2');
  }

  public function dos3() {
    return $this->hasOne('App\Dosen','nip','nip3');
  }

  public function dos4() {
    return $this->hasOne('App\Dosen','nip','nip4');
  }

  public function dosTA() {
    return $this->hasOne('App\Mahasiswa','nrp','nrp');
  }
}
