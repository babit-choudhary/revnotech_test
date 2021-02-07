<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getImage()
    {
        return view('image');
    }

    public function postImage(Request $request)
    {
        $file = $request->file('image');
        $name = time().$file->getClientOriginalName();
        $filePath = 'robil/' . $name;
        $resp = Storage::disk('s3')->put($filePath, file_get_contents($file));
    }

    public function dImage()
    {
        $delete1=Storage::disk('s3')->delete('robil/1612717204Itachi.jpg');
        dd($delete1);
    }
}
