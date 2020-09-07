<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
        @if($url == 'http://localhost:8000/Europe')
        <title>Europe Quiz</title>
      
        @elseif($url == 'http://localhost:8000/America')
        <title>America Quiz</title>
      
        @elseif($url == 'http://localhost:8000/Asia')
        <title>Asia Quiz</title>
      
        @elseif($url == 'http://localhost:8000/Africa')
        <title>Africa Quiz</title>

        @elseif($url == 'http://localhost:8000/Europe/result')
        <title>Europe Quiz/Result</title>
      
        @elseif($url == 'http://localhost:8000/America/result')
        <title>America Quiz/Result</title>
      
        @elseif($url == 'http://localhost:8000/Asia/result')
        <title>Asia Quiz/Result</title>
      
        @elseif($url == 'http://localhost:8000/Africa/result')
        <title>Africa Quiz/Result</title>
     
        @else
        <title>Learn</title>
        @endif
        
    @if($url == 'http://localhost:8000/Europe' or $url == 'http://localhost:8000/Asia' or $url == 'http://localhost:8000/America' or $url == 'http://localhost:8000/Africa' ) 
    <!--Custom CSS Files -->
    <link rel="stylesheet" href="assets/styles/formPage.css">
    @endif
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
  </head>
   <body>
      
   <main class="py-4">
            @yield('content')
    </main>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('assets/js/jquery/table.js')}}"></script>
  </body>
</html>
