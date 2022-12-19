<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Resturant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        if (Auth::user()->type == "admin") {

            $resturants = Resturant::all();
            return view('list.list-of-resturants', ["resturants" => $resturants]);
        } else {

            $categories = Category::all()->where("res_id", Auth::user()->res_id);
            return view('list.list-of-categories', ["categories" => $categories, "id" => Auth::user()->res_id]);
        }
    }
}
