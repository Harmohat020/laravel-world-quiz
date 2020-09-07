<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Country;
use DB;

use Illuminate\Http\Request;


class TestController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $countries = DB::select('select * from country where Continent="Europe"');

        return view('./home/includes.overview',['countries'=>$countries]);

    }
}
