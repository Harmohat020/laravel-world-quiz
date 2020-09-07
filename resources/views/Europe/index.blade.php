@extends('includes.layout')

@section('content')

<div class="box-form">
  <form action="Europe/result" method="GET">
    <?php 
    // Converting  array/stdClass -> array

    $array = json_decode(json_encode($RandomEuropeCountry), true);

    $random_key = array_rand($array);
    $random_country = $array[$random_key];
    ?>

    <h4>What is the Capital of <?php print($random_country['country']);?>?</h4>
    <input type="hidden" name="cityData" value="<?php  echo $random_country['city'];?>">
    <select class="select" name="cityOptions">
      <option>--</option>
      @foreach ($RandomEuropeCountry as $country)
            <option value="{{$country->city}}">{{$country->city}}</option>
        @endforeach
    </select>
    <br>
    
    <div class="submit-box">
       <input type="submit" value="confirm" class="submit-button"/>
    </div>
  </form>
</div>
@endsection