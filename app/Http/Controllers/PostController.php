<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class PostController extends Controller
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
        $post = DB::table('posts')->get();
        return view('post.index', ['post' => $post]);
    }
    public function getGuzzleRequest()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->request('get','http://api.digihealth.com.vn/api/v2/patient/public/authen/danhsach/phongkham');
        $response = $request->getBody();
        $response = json_decode($response);
        var_dump($response->data);
        foreach ($response->data as $item){
            echo $item->MAPHONGKHAM;
        }
    }
}
