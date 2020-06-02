<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automarke extends Model
{
    public function comment()
    {
        return $this->hasMany('App\Komentaras', 'auto_id', 'id');
    }

    protected $table = 'automarkes';
    protected $fillable = ['marke', 'created_at', 'updated_at'];
}