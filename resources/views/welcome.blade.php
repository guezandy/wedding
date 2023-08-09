<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
          <title>T&A</title>
          <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
          <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
        <!-- partial:index.partial.html -->
          <canvas id="c"></canvas>
          <div class="content">
            <h1 class="one">Tania and Andrew are getting married!</h1>
            <h4 class="two">February 17, 2024</h2>
            <h4 class="three">Maps Backlot<br>342 NW 24th St<br>Miami, Florida 33127</h3>
            <h4 class="four">Click here for scheudule</h3>
            <h4 class="four">RSVP</h3>
          </div>
          <h5 class="instruction">Click for more fun.</h5>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/1.0.0/anime.min.js'></script>
        <script src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>
