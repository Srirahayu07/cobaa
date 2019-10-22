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
        return view('welcome');
    }
    public function index1()
    {
        return view('daftar');
    }
    public function index2()
    {
        return view('kamus');
    }
    public function index3()
    {
        return view('kamus1');
    }
    public function index4()
    {
        return view('kamus2');
    }
    public function index5()
    {
        return view('kamus3');
    }
    public function index6()
    {
        return view('kamus4');
    }
    public function index7()
    {
        return view('kamus5');
    }
    public function index8()
    {
        return view('kamus6');
    }
    public function index9()
    {
        return view('kamus7');
    }
    public function index10()
    {
        return view('kamus8');
    }
}
