<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;
use App\Element;

class SlideController extends Controller
{
    
    protected $slide;

    /*public function __construct($id){
        $this->slide = Slide::findOrFail($id);
    }*/

    public function getById($id){
        $slide=Slide::with('elements')->findOrFail($id);
        return $slide;
    }

    public function getTitle(){
        return $slide->title_slide;
    }

    public function getDescription(){
        return $slide->description;
    }

    public function getNbElem(){
        $idType = $slide->type_slide;
        $element = Element::getById($idType);
        return $element->model;

    }

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
