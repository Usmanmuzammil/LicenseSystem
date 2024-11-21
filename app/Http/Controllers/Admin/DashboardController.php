<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\License;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $license = License::count();
        $users = User::count();
        $valid_card = License::where('valid_upto', '>=', now())->count();
        $expired_card = License::where('valid_upto', '<', now())->count();


        return view('backend.dashboard',compact('license','users','expired_card','valid_card'));
    }
}
