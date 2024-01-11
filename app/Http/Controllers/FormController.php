<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getCitiesByCountry($countryId)
    {
        $cities = City::where('country_id', $countryId)->get();

        return response()->json($cities);
    }

    public function getCountries()
    {
        $countries = Country::all();

        return view('welcome', compact('countries'));
    }
}
