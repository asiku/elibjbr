<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    protected $table = 'kandidat_tb';
    protected $fillable=['nama','foto','visi','misi','tlp'];
}
