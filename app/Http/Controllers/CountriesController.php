<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function getCountries()
    {
        $countries = Country::all();

        return view('welcome', compact('countries'));
    }
}
