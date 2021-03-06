<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Tags;


use Illuminate\Support\Facades\Input;



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
        $tag_id= Tags::create([
            "news_id"=>1,
            "text"=>2

        ])["id"];
        foreach ($request->input("tags") as $tags) {
            echo $tags." ".$tag_id."<br>";
            # code...
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "image"=>"required",
            "title"=>"required",
            "creation_date"=>"required"
        ]);

        if (Input::file("image")){
            $dest=public_path("images");
            $filename=uniqid().".jpg";
            $img=input::file("image")->move($dest,$filename);
        }
            News::create([
            "title"=>$request->input("title"),
            "description"=>$request->input("description"),
            "short_description"=>$request->input("short_description"),
            "category_id"=>$request->input("category_id"),
            "creation_date"=>$request->input("creation_date"),
            "image"=>$filename

        ]);
        return redirect()->route("home");
    }

        public function show($id)
    {
        $new=News::where("id",$id)->firstOrFail();
        return view("show",["news"=>$new]);

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

    public function destroy(Request $request)
    {
        News::where("id",$request->input("id"))->delete();
        return redirect()->back();
    }
}
