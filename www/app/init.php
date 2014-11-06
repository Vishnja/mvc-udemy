<?php

require_once 'core/app.php';
require_once 'core/controller.php';

/*
define('ASSET_ROOT',
    "http://" . $_SERVER['HTTP_HOST'] .
    str_replace(
        $_SERVER['DOCUMENT_ROOT'],
        '',
        str_replace('\\', '/', dirname(__DIR__) . '/public/')
    )
);*/
define('ASSET_ROOT',
    "http://" . $_SERVER['HTTP_HOST'] . "/public/"
);

/*
echo '<pre>';
print_r ($_SERVER);
echo '</pre>';
*/

//echo $_SERVER['DOCUMENT_ROOT'] . '<br>';
//echo dirname(__DIR__) . '<br>';
//Z:\home\mvc-udemy-tut\www\app
//echo ASSET_ROOT;