<?php
require_once "vendor/autoload.php";

use Sorgula\Sorgula;

$veri = new Sorgula();
echo $veri->tc_sorgula("0000000000","mert","köse","1992");
