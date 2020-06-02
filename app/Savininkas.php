<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Savininkas extends Model
{
    protected $table = 'savininkai';
    protected $fillable = ['vardas_pavarde', 'created_at', 'updated_at'];
}