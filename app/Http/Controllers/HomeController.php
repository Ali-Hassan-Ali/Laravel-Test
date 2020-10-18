<?php

namespace App\Http\Controllers;

use App\Http\Middleware\StudentMiddleware;
use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }/*end of index*/

    public function home () {
        return view('home');
    }//end of home

    public function logoute () {
        auth()->logout();
        return redirect()->route('home');
    }//end of home

    public function company () {
        return view('page/company');
    }//end of home

    public function category () {
        return view('page/category');
    }//end of home

}//end of Controller
