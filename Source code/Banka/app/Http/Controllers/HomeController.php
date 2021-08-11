<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transfer;
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
    

    public function index()
    {
        $data = ['Transfers'=>Transfer::all(),
        'countTransfers'=>Transfer::count(),
        'countUsers'=>User::where('is_admin','=', 0)->count(),
        'countadmins'=>User::where('is_admin','=', 1)->count()];
        return view('user.home', $data);
     
    }
    public function adminHome()
    {
        $data = [
        'Transfers'=>Transfer::all(),
        'countTransfers'=>Transfer::count(),
        'countUsers'=>User::where('is_admin','=', 0)->count(),
        'countadmins'=>User::where('is_admin','=', 1)->count(),
        'users'=>User::all()];
        return view('admin.adminHome', $data);
     
    }
}
