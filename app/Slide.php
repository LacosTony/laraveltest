<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable=['title_slide','description','type_slide','presentation_id'];
    public $timestamps = false;
}
