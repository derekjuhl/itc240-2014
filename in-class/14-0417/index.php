<!doctype html>
<html>
<?php

$method = $_SERVER["REQUEST_METHOD"];
echo $method;

if ($method == "GET") {
?>

<form method="post">
<input name="first_name" placeholder="First name">
<input name="age" placeholder="age">
<input type="checkbox" value="greatest_star" name="greatest_star">
<label for="greatest star">Are you the greatest star of them all?</label>
<button>POST</button>
</form>

<?php
} else {
?>
<pre>
<?php print_r($_REQUEST); ?>
</pre>
Your name is: <?= htmlentities($_REQUEST["first_name"]) ?>.
<?php

$age = $_REQUEST["age"];
$post_voting = $age - 18;

if ($post_voting >= 0) {
?>
<br>
You live on Sunset Boulevard and have been an actress for <?= $post_voting ?> years.

<?php
} else {
?>
You cannot vote!
<?php
}

if (isset($_REQUEST["greatest_star"])) {
  echo "Max says authoritatively, \"Madame is the greatest star of them all.\"";
}
?>



<a href="index.php">GET</a>
<?php
}
?>

</html>