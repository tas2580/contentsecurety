<?php

$c = file_get_contents("php://input");

if (!$c)
{
    exit;
}
   
$c = json_decode($c, true);
$c = print_r($c, true);

file_put_contents("csp.errors", $c, FILE_APPEND);
