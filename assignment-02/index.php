<!doctype html>
<html>

<?php

$method = $_SERVER["REQUEST_METHOD"];
echo $method;

if ($method == "GET") {
?>

<form method="submit">
<input name="noun" placeholder="Noun">
<input name="verb" placeholder="Verb">
<input name="adjective" placeholder="Adjective">
Quantity (between 1 and 12): <input type="number" name="First number" min="1" max="12" step="1">
Quantity (between 24 and 36): <input type="number" name="Second number" min="24" max="36" step="1">
<button>SUBMIT</button>
</form>

<?php
} else {
?>

<pre>
<?php print_r($_REQUEST);?>
</pre>
Once upon a time, a(n) <?= htmlentities($_REQUEST["noun"]) ?> was walking through the Black Forest.

<?php

$noun = $_REQUEST["noun"];
$verb = $_REQUEST["verb"];
$adj = $_REQUEST["adj"];
$first_number = $_REQUEST["First number"];
$second_number = $_REQUEST["Second number"];

if ($first_number == 12) {
?>
<br>
The <?= htmlentities ($noun) ?> found a treasure chest and lived happily ever after.

	
<?php
} else {
?>

An <?= htmlentities ($adj) ?> witch lured the <?= htmlentities($noun) ?> into her gingerbread house. The unfortunate <?= htmlentities($noun) ?> was never heard from again.

<a href="index.php">GET</a>

<?php
}
}
?>

</html>
