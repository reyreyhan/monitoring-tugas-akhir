<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{
  protected $table = "persyaratan";
  public $timestamps = false;


    public function kategori() {
      return $this->hasOne('App\Kategori','id','id_kategori');
    }
}
