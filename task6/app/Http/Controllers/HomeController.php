<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;


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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $products=Products::get();
        return view('home',["products"=>$products]);
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
                Products::create([
            "title"=>$request->input("title"),
            "description"=>$request->input("description")
        ]);
        return redirect()->route("home");
    }

     public function edit($id)
    {
        $products = Products::find($id)->firstOrFail();
        return view("edit",["products"=>$products]); 
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
        Products::where("id",$request -> input("id"))->
            update([
            "title"=>$request->input("title"),
            "description"=>$request->input("description")
        ]);

            return redirect()->route("home");
    }
}
