<?php

// définir une valeur dans les cookies
setcookie('foo', '123');

// Effacer une valeur dans les cookies
setcookie('bar', '', -1);
unset($_COOKIE['bar']);

