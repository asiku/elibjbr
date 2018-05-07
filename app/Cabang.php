<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
  protected $table = 'cabang_tb';
  protected $fillable=['id_cabang','cabang'];
  
}
