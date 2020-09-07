<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class AfricaController extends Controller
{
    public function showPage()
    {
        $RandomAfricaCountry = DB::select(' SELECT country.name as country,country.continent as continent, city.name as city
        FROM country INNER JOIN city ON country.capital = City.ID WHERE Continent="Africa" ORDER BY RAND()  LIMIT 10;');

        return view('Africa.index', ['RandomAfricaCountry' => $RandomAfricaCountry]);
    }
    
    public function showResultPage()
    {
        return view('Africa.result');
    }

    public function showLearnPage()
    {
        $AfricaCountries = DB::select('SELECT country.name as country,country.continent as continent, city.name as city
        FROM country INNER JOIN city ON country.capital = City.ID WHERE Continent="Africa";');

        return view('Africa.learn', ['AfricaCountries' => $AfricaCountries]);
    }


}
