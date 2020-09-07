<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EuropeController extends Controller
{
    public function showPage()
    {
        $RandomEuropeCountry = DB::select('SELECT country.name as country,country.continent as continent, city.name as city
        FROM country INNER JOIN city ON country.capital = City.ID WHERE Continent="Europe" ORDER BY RAND()  LIMIT 10;');

        return view('Europe.index',['RandomEuropeCountry' => $RandomEuropeCountry]);
    }

    public function showResultPage()
    {
        return view('Europe.result');
    }

    public function showLearnPage()
    {
        $EuropeCountries = DB::select('SELECT country.name as country,country.continent as continent, city.name as city
        FROM country INNER JOIN city ON country.capital = City.ID WHERE Continent="Europe";');

        return view('Europe.learn',['EuropeCountries' => $EuropeCountries]);
    }


}
