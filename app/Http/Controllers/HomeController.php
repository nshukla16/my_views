<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $response = User::all();
        return response()->json($response);
    }
    public function store(Request $request)
    {
        // return view('home');
        $add = new User;
        $add->name = $request['name'];
        $add->email = $request['email'];
        $add->password = $request['password'];
        $add->save();
        $response = 'Success';
        return response()->json($response);
    }
}
