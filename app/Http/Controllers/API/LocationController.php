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
    public function cities(Request $request, $provinces_id)
    {
        return City::where('province_id', $provinces_id)->get();
    }
}
