<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Element;

class ElementController extends Controller
{
    protected $element;

    public function __construct($id){
        $this->element = Element::findOrFail($id);
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
        $element=Element::find($id);
        return $element;
        //return view('test.show',array('element' => $element));
    }
}
