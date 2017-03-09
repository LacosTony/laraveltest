<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public function elements()
    {
        return $this->hasMany('App\Element');
    }
    protected $fillable=['title_slide','description','type_slide','presentation_id'];
    public $timestamps = false;
}
