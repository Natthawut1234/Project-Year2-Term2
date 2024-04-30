<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $list = DB::table('comments')->join('users', 'comments.ref_id', '=', 'users.id')
        ->select('comments.name', 'comments.email', 'comments.com_list','users.img_user')
        ->get();
        return view('finexo-html.index',compact('list'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $countAdmin = DB::table('users')
        ->where('is_admin', 1)
        ->count();

        $countUsers = DB::table('users')
        ->where('is_admin', 0)
        ->orWhereNull('is_admin')
        ->count();

        $sumtrue_price = DB::table('data_customers')->sum('true_price');

        $count_finish = DB::table('data_customers')
        ->whereIn('status', [4, 5, 6]) 
        ->count();

        $count_no = DB::table('data_customers')
        ->whereNotIn('status', [4, 5, 6])
        ->count();

        $count5 = DB::table('data_customers')
        ->where('status', 5) 
        ->count();

        $count6 = DB::table('data_customers')
        ->where('status', 6) 
        ->count();

        return view('admin-1.indexadmin',compact('countUsers','countAdmin','sumtrue_price','count_finish','count_no','count5','count6'));
        // $data = DB::table('data_customers')->get();
        // return view('admin-1.tables',compact('data'));
    }
}
