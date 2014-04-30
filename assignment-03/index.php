<?php

$plants = [
[ "name" => "Pitcher plant, purple", "scientific name" => "Sarracenia purpurea venosa", "price" => "$7.99" ],
[ "name" => "Pitcher plant, yellow", "scientific name" => "Sarracenia flava", "price" => "$7.99" ],
[ "name" => "Venus Flytrap", "scientific name" => "Dionaea muscipula", "price" => "$5.99" ],
[ "name" => "Staghorn Sundew", "scientific name" => "Drosera multifida extrema", "price" => "$11.99" ],

];

$plants[] = [ "name" => "Cape Sundew", "scientific name" => "Drosera capensis", "price" => "$5.99" ];

$show = "all";
if (isset($_REQUEST["show"])) {
$show = $_REQUEST["show"];
}

include("page.php");