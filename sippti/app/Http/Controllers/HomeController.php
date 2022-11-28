<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Router;
//use App\Models\User;
use DB;

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
        /*

        $router = Router::count();
        $user = User::count();

        return view('home', compact('router', 'user'));

        */

        $data['router'] = DB::table('routers')
                                //->distinct('unit')
                                ->count();

        $data['laptop'] = DB::table('laptops')
                                //->distinct('unit')
                                ->count();

        $data['server'] = DB::table('servers')
                                //->distinct('sub_unit')
                                ->count();

        $data['user'] = DB::table('users')
                            ->count();

        return view('home', $data);
    }
}
