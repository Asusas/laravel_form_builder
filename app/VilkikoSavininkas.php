<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VilkikoSavininkas extends Model
{

    protected $table = 'savininko_auto';
    protected $fillable = ['savininko_id', 'auto_id', 'created_at', 'updated_at'];
}
