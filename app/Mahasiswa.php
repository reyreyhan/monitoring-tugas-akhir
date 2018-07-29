<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    public $timestamps = false;

    public function role() {
      return $this->hasOne('App\Role','id','id_role');
    }
}
