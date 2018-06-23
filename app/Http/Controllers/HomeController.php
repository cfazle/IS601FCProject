<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home() {
        return view('pages.index');
    }

    function about () {
        return view('pages.about');
    }

    function contact () {
        return view('pages.contact');

           }

    function store(Request $request){

        $name = $request ->name;
        return redirect()->route('thanks',['name'=>$name]);
    }

    function thanks($name, Request $request){

        return view('pages.thankyou')->with(compact('name'));
    }

    function  message() {
        return view('pages.viewmessages');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*    public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }



}
