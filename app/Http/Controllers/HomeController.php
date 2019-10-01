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
    public function index(Request $request)
    {
        // $edwin = '';
        // $edwin2 = '';
        // $request->session()->put(['edwin' => 'potato']);
        // session(['edwin2' => 'onion']);
        //
        // //dd($request);
        //
        // //$edwin = $request->session()->get('edwin');
        // $edwin2 = session('edwin2');
        // $request->session()->forget('edwin');
        // $request->session()->flush();
        // $edwin2 = session('edwin2');
        // $edwin = $request->session()->get('edwin');
        // //return $request->session()->all();
        $request->session()->flash('message', "THIS IS A FLASH MESSAGE");
        return view('home');
    }
}
