<?php

require __DIR__.'/../vendor/autoload.php';

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        dump($_COOKIE);
        ?>
    </div>
    <div id="cookies"></div>
    <script>
        function get_cookie(name){
        return document.cookie.split(';').some(c => {
            return c.trim().startsWith(name + '=');
            });
        }

        function delete_cookie( name, path, domain ) {
            if( get_cookie( name ) ) {
                document.cookie = name + "=" +
                ((path) ? ";path="+path:"")+
                ((domain)?";domain="+domain:"") +
                ";expires=Thu, 01 Jan 1970 00:00:01 GMT";
            }
        }
    </script>
</body>
</html>