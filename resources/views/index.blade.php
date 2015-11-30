<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Color API</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>

        <style>
            * { box-sizing: border-box; font-family: Montserrat; text-align: center; }
            body { margin: 0; background: #222; color: white; }
            .colors { overflow: hidden; }
            .color { float: left; width: 10%; padding-bottom: 10%; }
            h1 a { color: rgb({{ $colors->last()->red }},{{ $colors->last()->green }},{{ $colors->last()->blue }}) }
        </style>
    </head>
    <body>
        <h1>
            Color API
            <br>
            <a href="https://github.com/tomzmtl/Color">github.com/tomzmtl/Color</a>
        </h1>

        <div class="colors">

            <?php foreach ( $colors as $color ) : ?>

                <div class="color" style="background:rgb(<?php echo $color->red ?>,<?php echo $color->green ?>,<?php echo $color->blue ?>)"></div>

            <?php endforeach ?>

        </div>

    </body>
</html>