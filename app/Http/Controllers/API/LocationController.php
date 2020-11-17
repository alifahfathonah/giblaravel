<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Province;

class LocationController extends Controller
{
    public function provinces(Request $request)
    {
        return Province::all();
    }
    public function provincesData($id)
    {
        // dd(Province::where('id', $id)->get());
        return Province::where('id', $id)->get();
    }
    public function cities($provinces_id)
    {
        return City::where('province_id', $provinces_id)->get();
    }
    public function cityData($id)
    {
        // dd(Province::where('id', $id)->get());
        return City::where('id', $id)->get();
    }
}
