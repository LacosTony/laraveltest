<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type_slide;

class Type_SlideController extends Controller
{
    public function getModel($id){
    	$type_slide = Type_slide::findOrFail($id);
    	$model = $type_slide->model;
    	return $model;
    }

    public function show($id){
    	$type_slide = Type_slide::findOrFail($id);
    	return $type_slide;
    }
}
