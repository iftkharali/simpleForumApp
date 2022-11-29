<?php

namespace App\Http\Controllers;

use App\Events\UpdateUser;
use App\Jobs\Deleteuser;
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
        event(new UpdateUser('Event Trigger'));
        // dispatch(new Deleteuser('asdasdd'));
die;
        return view('home');
    }
}
