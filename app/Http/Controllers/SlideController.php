<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;

class SlideController extends Controller
{
    public function create(){

    }

    public function store(){
    	//$slide = Slide::create([]);
    }

    public function show($id){
    	/*$slide = DB::table('slides')
    				->where('id_slide',$id);
    	*/
    	$slide=Slide::find($id);
    	return $slide;
    }
}
