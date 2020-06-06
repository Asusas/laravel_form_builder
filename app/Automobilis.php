<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automobilis extends Model
{
    public function owners()
    {
        return $this->belongsToMany('App\Savininkas', 'savininko_auto', 'auto_id', 'savininko_id');
    }

    public function markes()
    {
        return $this->belongsTo('App\Automarke', 'markes_id');
    }

    protected $table = 'automobiliai';
    protected $fillable = ['markes_id', 'metai', 'created_at', 'updated_at'];

}
