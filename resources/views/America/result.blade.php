@extends('includes.layout')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/formPage.css') }}" >
<?php
 $inputCity = $_GET['cityOptions'];
 $cityData =  $_GET['cityData'];
 $buttonAgain = '<a href="/America" class="link-button-result"><span class="link-home">Another one</span></a>';
 $button =  '<a href="./learn" class="link-button-learn"><span class="link-home">Learn</span></a>';

 if ($inputCity == $cityData) {
     $result = "You guessed the Capital";
}else{
     $result = "You got the capital wrong. The Capital is $cityData.";
}

?>
<div class="box-form">
  <h4><?php echo $result; ?></h4>
  <br><br>
  
    <div class="learn-button-box">
       <?php echo $button; ?>
    </div>

     <div class="again-button-box">
       <?php echo $buttonAgain; ?>
     </div>
</div>
@endsection