<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perpus extends Model
{
  protected $table = 'perpus_tb';
  protected $fillable=['id_perpus','kategory'];

}
