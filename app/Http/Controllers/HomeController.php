<?php

namespace App\Http\Controllers;
use App\Models\Mesa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $mesas = Mesa::all();

        return view('welcome', ['mesas' => $mesas, 'request' => $request->all() ]);
    }
}
