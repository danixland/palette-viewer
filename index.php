<!DOCTYPE html>
<html>
    <head>
        <title>Color Palette viewer</title>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" type="text/css" href="css/screen.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,300' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <form id="page" method="post" action="preview.php">
            <header id="masthead">
                <h1 class="site-title"><a href="<?php echo htmlentities( $_SERVER['REQUEST_URI'] ); ?>">Color Palette viewer</a></h1>
                <input name="preview-palette" type="submit" id="preview-palette" value="preview palette">
            </header>
            <div id="content">
                <div id="palette">
                    <div id="dark-grey" class="palette-color">
                        <h2 class="usage">main text</h2>
                        <input name="main-text" class="code" type="text" placeholder="#333335" value="#333335" />
                    </div>
                    <div id="blue-grey" class="palette-color">
                        <h2 class="usage">secondary text</h2>
                        <input name="secondary-text" class="code" type="text" placeholder="#2c3646" value="#2c3646" />
                    </div>
                    <div id="light-grey" class="palette-color">
                        <h2 class="usage">link</h2>
                        <input name="link" class="code" type="text" placeholder="#7c8491" value="#7c8491" />
                    </div>
                    <div id="almost-white" class="palette-color">
                        <h2 class="usage">background</h2>
                        <input name="background" class="code" type="text" placeholder="#eaeaea" value="#eaeaea" />
                    </div>
                    <div id="crimson-red" class="palette-color">
                        <h2 class="usage">alert</h2>
                        <input name="alert" class="code" type="text" placeholder="#8d0011" value="#8d0011" />
                    </div>
                    <div id="matte-yellow" class="palette-color">
                        <h2 class="usage">accent</h2>
                        <input name="accent" class="code" type="text" placeholder="#e8c001" value="#e8c001" />
                    </div>
                </div>
                <div id="sass">
                    <input name="sass_output" type="submit" id="print-sass" value="sassy">
                </div>
            </div>
            <footer id="colophon">concept by <a href="http://danixland.net">danix</a></footer>
        </form>
    </body>
</html>
