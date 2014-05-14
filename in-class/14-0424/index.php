<?php

 $books = [
	[ "title" => "Dune", "author" => "Herbert, Frank" ],
	[ "title" => "Anna Karenina", "author" => "Tolstoy" ],
	[ "title" => "Snow Crash", "author" => "Sephenson" ],
 ];
 
  $show = "all";
	if (isset($_REQUEST["show"])) {
		$show = $_REQUEST["show"];
 
 }
 include("page.php");
 