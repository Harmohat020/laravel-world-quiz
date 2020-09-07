<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AmericaController extends Controller
{
    public function showPage()
    {
        $RandomAmericaCountry = DB::select(' SELECT country.name as country,country.continent as continent, city.name as city
        FROM country INNER JOIN city ON country.capital = City.ID WHERE Continent="North America" OR  Continent="South America" ORDER BY RAND()  LIMIT 10;');

        return view('America.index',['RandomAmericaCountry' => $RandomAmericaCountry]);
    }

    public function showResultPage()
    {
        return view('America.result');
    }

    public function showLearnPage()
    {
        $AmericaCountries =  DB::select('SELECT country.name as country,country.continent as continent, city.name as city
        FROM country INNER JOIN city ON country.capital = City.ID WHERE Continent="North America" OR  Continent="South America";');

        return view('America.learn',['AmericaCountries' => $AmericaCountries]);
    }

}
