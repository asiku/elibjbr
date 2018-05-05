<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CounterVote extends Model
{
  protected $table = 'counter_tb';
  protected $fillable=['no_ktp','id_kandidat','vote'];
}
