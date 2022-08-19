<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $polls = Poll::simplePaginate(10);
        return view('home')->with('polls',$polls);
    }
}
