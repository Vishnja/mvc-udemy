<?php

require_once 'core/app.php';
require_once 'core/controller.php';

define('ASSET_ROOT',
    "http://" . $_SERVER['HTTP_HOST'] .
    str_replace(
        $_SERVER['DOCUMENT_ROOT'],
        '',
        str_replace('\\', '/', dirname(__DIR__) . '/public/')
    )
);

echo $_SERVER['DOCUMENT_ROOT'] . '<br>';

echo ASSET_ROOT;