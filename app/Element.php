<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    protected $fillable = ['title_element','path_file','url','slide_id'];
    public $timestamps = false;
}
