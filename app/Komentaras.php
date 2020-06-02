<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentaras extends Model
{
    protected $table = 'komentarai';
    protected $fillable = ['auto_id', 'komentaraas', 'created_at', 'updated_at'];
}