<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = "dosen";
    public $timestamps = false;

    public function role() {
      return $this->hasOne('App\Role','id','id_role');
    }
}
