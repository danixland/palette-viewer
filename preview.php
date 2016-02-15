<!DOCTYPE html>
<html>
    <head>
        <title>Palette preview</title>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" type="text/css" href="css/screen.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,300' rel='stylesheet' type='text/css'>
<?php if (isset($_POST['preview-palette'])) { ?>
        <style>
            #mock-page {
                background-color: <?php echo $_POST['background']; ?>;
            }
            #mock-page a,
            #mock-page a:active,
            #mock-page a:visited {
                color: <?php echo $_POST['link']; ?>;
            }
            #mock-page a:hover {
                color: <?php echo $_POST['secondary-text']; ?>;
            }
            #mock-page #mock-header,
            #mock-page #mock-footer {
                background-color: <?php echo $_POST['main-text']; ?>;
            }
            #mock-page #mock-header h1#mock-title a {
                color: <?php echo $_POST['accent']; ?>;
            }
            #mock-page #mock-content span.accent {
                color: <?php echo $_POST['accent']; ?>;
            }
            #mock-page #mock-content pre.mock-code {
                background-color: <?php echo $_POST['link']; ?>;
            }
            #mock-page #mock-content p.alert {
                color: <?php echo $_POST['alert']; ?>;
                border-left: 2px solid <?php echo $_POST['alert']; ?>;
            }
            #mock-page #mock-footer {
                color: <?php echo $_POST['background']; ?>;
            }
        </style>
<?php } ?>
    </head>
    <body>
        <div id="page">
            <header id="masthead">
                <h1 class="site-title"><a href="<?php echo htmlentities( dirname($_SERVER['REQUEST_URI']) ); ?>">Color Palette viewer</a></h1>
            </header>
            <div id="content">
<?php if (isset($_POST['preview-palette'])) : ?>
                <div id="mock-page">
                    <header id="mock-header">
                        <h1 id="mock-title"><a href="#">This is the title</a></h1>
                    </header>
                    <div id="mock-content">
                        <p>Lorem ipsum dolor <span class="accent">sit amet</span>, consectetur adipisicing elit. Voluptatibus ducimus architecto fuga officiis, asperiores, perferendis? Earum, <a href="#">veritatis</a>, aliquid. Laborum, tempore.</p>
                        <p class="alert">This is an alert. Be careful!!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, voluptatibus nisi incidunt hic possimus labore, vel quasi, dolorum tenetur quisquam, voluptate unde.</p>
                        <pre class="mock-code">
/* code referencing himself. CODECEPTION */
#mock-page #mock-content pre#mock-code {
    width: auto;
    padding: 0.6em;
}
                        </pre>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, voluptatibus nisi incidunt hic possimus labore, vel quasi, dolorum tenetur quisquam, voluptate unde.</p>
                    </div>
                    <footer id="mock-footer">this is a <a href="#">link</a></footer>
                </div>
<?php elseif (isset($_POST['sass_output'])) :?>
                <div id="sass-output">
                    <p>you can copy this text and save it as a partial in your sass project as <code>_colors.scss</code> and then import it in your main scss file with:</p>
                    <p><code>@import "colors";</code></p>
                    <p>
<pre>
// scss colors created using "color-palette-viewer by danix"
// https://github.com/danixland/palette-viewer

$background:    <?php echo $_POST['background'] . "\n"; ?>
$main_text:     <?php echo $_POST['main-text'] . "\n"; ?>
$alt_text:      <?php echo $_POST['secondary-text'] . "\n"; ?>
$link:          <?php echo $_POST['link'] . "\n"; ?>
$alert:         <?php echo $_POST['alert'] . "\n"; ?>
$accent:        <?php echo $_POST['accent'] . "\n"; ?>
</pre>
                    </p>
                </div>
<?php endif; ?>
            </div>
            <footer id="colophon">concept by <a href="http://danixland.net">danix</a></footer>
        </div>
    </body>
</html>
