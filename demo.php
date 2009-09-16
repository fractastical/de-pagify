<?php
    $page = $_SERVER['QUERY_STRING'];
    
    if (empty($page)) {
        $page = 1;
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>De-Pagify Demo</title>
    <link rel="stylesheet" href="http://uxdriven.com/static/blueprint/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="http://uxdriven.com/static/blueprint/print.css" type="text/css" media="print">
    <!--[if lt IE 8]><link rel="stylesheet" href="http://uxdriven.com/static/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
    <link rel="stylesheet" href="http://uxdriven.com/static/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://de-pagify.projects.uxdriven.com/depagify.jquery.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
        var depagify = function() {
            jQuery('#pages a:last').depagify({
                container:  '#content',
                filter:     '.post',
                trigger:    '#footer',
                request:    function(options) {
                    jQuery('#pages', options.container).remove();
                },
                effect:     function() {
                    jQuery(this).fadeIn('slow');
                }
            });
        };
    </script>
</head>

<body>

    <div class="container">
        <h1>Welcome to the De-Pagify Demo</h1>

        <button onClick="javascript:depagify();">De-Pagify</button>

        <div id="header">
            <blockquote>
                <p>I'm tons of filler, like very other site, so we can enjoy sexy scrolling.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </blockquote>
        </div>
        
        <hr />
        
        <div id="content">
            <div class="post">
                <h3>
                    Imagine I'm the #<?= $page ?>
                    post on the page
                </h3>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>

            <div id="pages">
                    <strong><?= $page ?></strong>
                    <a href="?<?= ++$page ?>">Next &raquo;</a>
                </script>
            </div>
        </div>

        <hr />
        
        <div id="footer">
            <blockquote>
                <p>I'm the site's footer.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </blockquote>
        </div>
    </div>
</body>
</html>
