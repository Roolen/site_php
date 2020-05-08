<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $contents = \App\Content::all();

        return view('home', ['contents' => $contents]);
    }

    public function show($id)
    {
        $content = \App\Content::where('id', '=', $id)
                                ->first();

        return view('content', ['content' => $content]);
    }
}
