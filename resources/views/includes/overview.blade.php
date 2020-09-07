@extends('includes.layout')

@section('content')
<link rel="stylesheet" href="/assets/styles/table.css">
<div class="table-box">
   <table class="table table-striped" id="countryTable">
           <thead>
               <tr>
               <th scope="col">Country</th>
               <th scope="col">Capital</th>
               <th scope="col">Continent</th>
               </tr>
           </thead>
           <tbody>
           @if($url == 'http://localhost:8000/Europe/learn')
                @foreach ($EuropeCountries as $country)
                   <tr>
                           <td>{{$country->country}}</td>
                           <td>{{$country->city}}</td>
                           <td>{{$country->continent}}</td>
                   </tr>
               @endforeach
            @endif

            @if($url == 'http://localhost:8000/America/learn')
                @foreach ($AmericaCountries as $country)
                   <tr>
                           <td>{{$country->country}}</td>
                           <td>{{$country->city}}</td>
                           <td>{{$country->continent}}</td>
                   </tr>
               @endforeach
            @endif

            @if($url == 'http://localhost:8000/Africa/learn')
                @foreach ($AfricaCountries as $country)
                   <tr>
                           <td>{{$country->country}}</td>
                           <td>{{$country->city}}</td>
                           <td>{{$country->continent}}</td>
                   </tr>
               @endforeach
            @endif

            @if($url == 'http://localhost:8000/Asia/learn')
                @foreach ($AsiaCountries as $country)
                   <tr>
                           <td>{{$country->country}}</td>
                           <td>{{$country->city}}</td>
                           <td>{{$country->continent}}</td>
                   </tr>
               @endforeach
            @endif
           </tbody>
   </table>
</div>
@endsection