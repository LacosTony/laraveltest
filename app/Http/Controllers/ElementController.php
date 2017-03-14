<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Element;

class ElementController extends Controller
{
    protected $element;

    /*public function __construct($id){
        $this->element = Element::findOrFail($id);
    }*/

    public function getById($id){
        $element=Element::findOrFail($id);
        return $element;
    }

    public function getTitle(){
        $path = $element->title_element;
        return $path;
    }

    public function getPath(){
        $path = $element->path_file;
        return $path;
    }

    public function getUrl(){
        $url = $element->url;
        return $url;
    }

    public function show($id)
    {
        $this->element = Element::findOrFail($id);
        $path_file = $this->element->path_file;
        $title = $this->element->title_element;
        return view('test',
            [
                'title'=> $title,
                'path_file' => $path_file
            ]);
        //return $element;
        //return view('test.show',array('element' => $element));
    }

    /*public function show($id)
    {
        $element=Element::findOrFail($id);
        return $element;
        //return view('test.show',array('element' => $element));
    }*/
}
