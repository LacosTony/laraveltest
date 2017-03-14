<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;
use App\Type_slide;
use App\Element;

class SlideController extends Controller
{
    
    protected $slide;

    /*public function __construct($id){
        $this->slide = Slide::findOrFail($id);
    }*/

    public function getTheSlideById($id){
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
        $model = Type_slide::findOrFail($slide->type_slide)->model;
        return $model;

    }

    public function show($id){
    	$this->slide = Slide::with('elements')->findOrFail($id);
        $elements = $this->slide->elements;

       /* $params[0][0] = 'title';
        $params[0][1] = $this->slide->title_slide;
        $i = 1;

        foreach ($elements as $element){
            $params[$i][0] = 'element_'.$i;
            $params[$i][1] = $element;
            $i = $i+1;
        }

        return $params[1][1]->path_file;*/
        return view('test',
            [
                'title'=>$this->slide->title_slide,
                'elements'=>$this->slide->elements

            ]);
        /*$slide = DB::table('slides')
    				->where('id_slide',$id);
    	*/
    	//$slide=Slide::find($id);
    	//return $slide;
    }
}
