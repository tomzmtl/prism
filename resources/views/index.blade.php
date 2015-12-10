<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Prism API</title>
        <meta name="description" content="Prism is a small API that delivers RGB colors in JSON format.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="{{ url('css/styles.css') }}">

        <style>
            header span,
            footer a { color: rgb({{ $themeC->r }},{{ $themeC->g }},{{ $themeC->b }}) }
        </style>
    </head>
    <body>

        @if ( env('APP_ENV') === 'production' )

            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
              ga('create', 'UA-71150113-1', 'auto');
              ga('send', 'pageview');
            </script>

        @endif

        <header>
            <h1>
                <strong>Prism</strong>
                <span>A JSON API that generates colors!</span>
            </h1>
        </header>

        <div class="color-wrap">
            <div class="colors front">

                @foreach ( $colors as $color )

                    <div class="color" style="background:rgb(<?php echo $color->red ?>,<?php echo $color->green ?>,<?php echo $color->blue ?>)"></div>

                @endforeach

            </div>

            <div class="colors back">

                @foreach ( $colors as $color )

                    <div class="color" style="background:rgb(<?php echo $color->red ?>,<?php echo $color->green ?>,<?php echo $color->blue ?>)"></div>

                @endforeach

            </div>
        </div>

        <footer>
            <div class="wrap">
                <a href="https://github.com/tomzmtl/Color" class="github">github.com/tomzmtl/Prism</a>
                <a href="{{ url('api') }}/color" target="blank" class="try">Try it now !</a>
            </div>
        </footer>

    </body>
</html>