<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
          <title>T&A</title>
          <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
          <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
          <canvas id="c"></canvas>
          <div class="content row">
            <div class="col-sm-6">
              <h5 class="one">Tania and Andrew are getting married!</h1>
              <h6 class="two">February 17, 2024</h4>
              <h6 class="three">Maps Backlot<br>342 NW 24th St<br>Miami, Florida 33127</h4>
              <h6 class="more-deets">MORE DETAILS TO COME!</h4>
            </div>
          </div>
          <h5 class="instruction">Click for more fun.</h5>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/1.0.0/anime.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

        <script src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>
