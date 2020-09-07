<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class AsiaController extends Controller
{
    public function showPage()
    {
        $RandomAsiaCountry = DB::select(' SELECT country.name as country,country.continent as continent, city.name as city
        FROM country INNER JOIN city ON country.capital = City.ID WHERE Continent="Asia" ORDER BY RAND()  LIMIT 10;');

        return view('Asia.index',['RandomAsiaCountry' => $RandomAsiaCountry]);
    }
    public function showResultPage()
    {
        return view('Asia.result');
    }

    public function showLearnPage()
    {
        $AsiaCountries = DB::select('SELECT country.name as country,country.continent as continent, city.name as city
        FROM country INNER JOIN city ON country.capital = City.ID WHERE Continent="Asia";');

        return view('Asia.learn',['AsiaCountries' => $AsiaCountries]);
    }

}
