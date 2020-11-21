<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('CanPost');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $news=News::get();
        return view('home',["news"=>$news]);
    }



    public function create()
    {
        return view("create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                News::create([
            "title"=>$request->input("title"),
            "description"=>$request->input("description"),
            "short_description"=>$request->input("short_description")
        ]);
        return redirect()->route("home");
    }

     public function edit($id)
    {
        $news = News::find($id)->firstOrFail();
        return view("edit",["news"=>$news]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        News::where("id",$request -> input("id"))->
            update([
            "title"=>$request->input("title"),
            "description"=>$request->input("description"),
            "short_description"=>$request->input("short_description")
        ]);

            return redirect()->route("home");
    }
}
