<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AddController extends Controller
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
        return view('add');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => ['required', 'string', 'max:120', 'min:8'],
            'description' => ['required', 'string', 'max: 420', 'min:8'],
            'content' => ['required', 'string', 'min:120'],
        ]);
    }

    public function add(Request $request)
    {
        $userId = Auth::id();

        Content::create([
            'author' => $userId,
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content
        ]);

        return redirect()->route('home');
    }
}