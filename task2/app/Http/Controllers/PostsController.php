<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    public function FunctionName()
    {
    	return Posts::get();     
    }

    public function create()
    {
    	return view("posts.create");
    }


        public function store(Request $request)
    {

    	Posts::create([
    		"title"=>$request->input("title"),
    		"text"=>$request->input("text"),
    		"short_description"=>$request->input("short_description")
    	]);
    }
}
