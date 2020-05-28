<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period_Range extends Model
{
    protected $table = 'periods_ranges';
    protected $fillable = ['nombre','duracion','fecha_inicio','fecha_fin','period_id',];

    public function period()
    {
    	return $this->belongsTo('App\Period');
    }
}
