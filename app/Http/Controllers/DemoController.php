<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;

class DemoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        return view('demo.form');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|min:3|max:10',
        ],[
            'email.required' => 'không được để trống email',
            'password.min'  => 'không được để ít hơn 3 kí tự',
            'password.required' => 'không được để trống password',
            'password.max' => 'không được nhập nhiều hơn 10 kí tự'
        ]);
        return 1;
//        if ($validator->fails()){
//            $errors = $validator->errors();
////            $request->session()->flash('error', join('-', $errors->all()));
//            return view('demo.form',compact('errors'));
//        }
    }
}
