<?php
    function start_page($title) {
        echo '<!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="pagetest 2" content="width=device-width, initial-scale=1.0">
                            <title>'.PHP_EOL. $title .'</title>
                        </head>
                        <body>' . PHP_EOL;
    }

    function end_page() {
        echo '</body></html>';
    }
?>