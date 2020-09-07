<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
        
    <!--Custom CSS Files -->
    <link rel="stylesheet" href="./assets/styles/home.css">
        
    <!--Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <div class="home-title">
      <h2>Choose a continent:</h2>
    </div>
        <div class="overview">
              <div class="america-link">
                <a href="{{ url('/America') }}">
                  <span class="link-home">America</span>
                </a>
              </div>
              <div class="space-between"></div>
              <div class="europe-link">
                <a href="{{ url('/Europe') }}">
                  <span class="link-home">Europe</span>
                </a>
              </div>
        </div>

        <div class="overview-2">
            <div class="asia-link">
               <a href="{{ url('/Asia') }}">
                  <span class="link-home">Asia</span>
                </a>
              </div>
              <div class="space-between"></div>
              <div class="africa-link">
                <a href="{{ url('/Africa') }}">
                  <span class="link-home">Africa</span>
                </a>
              </div>
        </div>
</body>
</html>