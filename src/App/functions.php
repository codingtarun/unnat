<?php

/*
|--------------------------------------------------------------------------
| Sugar Functions
|--------------------------------------------------------------------------
|
| This file contains all the sugar function.
|
*/


function dd(mixed $value)
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    die();
}
