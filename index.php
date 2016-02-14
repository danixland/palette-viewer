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
        <div id="page">
            <header id="masthead">
                <h1 class="site-title"><a href="">Color Palette viewer</a></h1>
            </header>
            <div id="content">
                <div id="palette">
                    <div id="dark-grey" class="palette-color">
                        <h2 class="usage">main text</h2>
                        <input class="code" type="text" placeholder="#333335" />
                    </div>
                    <div id="blue-grey" class="palette-color">
                        <h2 class="usage">secondary text</h2>
                        <input class="code" type="text" placeholder="#2c3646" />
                    </div>
                    <div id="light-grey" class="palette-color">
                        <h2 class="usage">link</h2>
                        <input class="code" type="text" placeholder="#7c8491" />
                    </div>
                    <div id="almost-white" class="palette-color">
                        <h2 class="usage">background</h2>
                        <input class="code" type="text" placeholder="#eaeaea" />
                    </div>
                    <div id="crimson-red" class="palette-color">
                        <h2 class="usage">alert</h2>
                        <input class="code" type="text" placeholder="#8d0011" />
                    </div>
                    <div id="matte-yellow" class="palette-color">
                        <h2 class="usage">accent</h2>
                        <input class="code" type="text" placeholder="#e8c001" />
                    </div>
                </div>
            </div>
            <footer id="colophon">concept by <a href="http://danixland.net">danix</a></footer>
        </div>
    </body>
</html>
