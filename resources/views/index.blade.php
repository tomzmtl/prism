<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Color API</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="{{ url('css/styles.css') }}">

        <style>
            header a,
            header span,
            footer a { color: rgb({{ $themeC->red }},{{ $themeC->green }},{{ $themeC->blue }}) }
        </style>
    </head>
    <body>
        <header>
            <h1>
                <strong>Color API</strong>
                <span>A JSON API that generates colors!</span>
            </h1>
            <a href="{{ url('api/get') }}">Try it!</a>
        </header>

        <div class="colors">

            @foreach ( $colors as $color )

                <div class="color" style="background:rgb(<?php echo $color->red ?>,<?php echo $color->green ?>,<?php echo $color->blue ?>)"></div>

            @endforeach

        </div>

        <footer>
            <a href="https://github.com/tomzmtl/Color">github.com/tomzmtl/Color</a>
        </footer>

    </body>
</html>