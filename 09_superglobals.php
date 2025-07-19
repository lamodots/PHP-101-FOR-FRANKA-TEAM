<?php

$x = 90;
/****
 * PHP Global Variables - Superglobals

Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

The PHP superglobal variables are:

    $GLOBALS : $GLOBALS is an array that contains all global variables.
    $_SERVER
    $_REQUEST - by default contains the contents of $_GET, $_POST and $_COOKIE
    $_POST
    $_GET: Get value form URL or form
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION

 */


//  var_dump($GLOBALS);
 echo $GLOBALS["x"];
 var_dump($_SERVER["HTTP_HOST"]);
 var_dump($_REQUEST);
 var_dump($_GET);
 var_dump($_POST);
 var_dump( $_FILES);
 var_dump( $_ENV);
 var_dump( $_COOKIE);
//  var_dump($_SESSION["username"]);
?>