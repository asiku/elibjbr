<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class V_perpus extends Model
{
  protected $table = 'v_perpus_detail';
  protected $fillable=['id_perpus','kategory','pth','divisi'];
}
