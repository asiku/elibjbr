<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilih extends Model
{
  protected $table = 'pemilih_tb';
  protected $fillable=['no_ktp','nama','tgl_lahir','jk','profesi','latitude','longitude','kel_desa','kecamatan'];
  protected $dates=['tgl_lahir'];
}
