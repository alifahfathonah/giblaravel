<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravolt\Indonesia\Models\City;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'ADMIN') {
            $users = User::all();
            $new_users = User::orderByDesc('created_at')->paginate(10);
            $DIY_cities = City::where('province_id', 34)->get();



            return view('pages.admin.dashboard', [
                'users' => $users,
                'new_users' => $new_users,
                'DIY_cities' => $DIY_cities
            ]);
        }
        else {
            return view('pages.members.dashboard');
        }
    }
}
