<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title ='Welcome :D';
    //    return view ('pages.index')->with('title',$title);
        return view('pages.index',compact('title'));
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        $data= array('title'=>'Services',
            'services' => ['web','desktop','mobile']);
        return view('pages.services')->with($data);
    }
}
