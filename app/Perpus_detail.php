<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perpus_detail extends Model
{
  protected $table = 'perpus_detail_tb';
  protected $fillable=['id_perpus','id_divisi','pth','id_cabang'];
}
