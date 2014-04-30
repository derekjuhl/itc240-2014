<!doctype html>
<html>
<body>
<h1>Carnivorous Plants</h1>
<a href="?show=cover">Cover view</a>
<a href="?show=all">List view</a>
<div>
<?= count($plants); ?> species available
</div>
<ul>
<?php

foreach ($plants as $plant) {
if ($show == "cover") {
include("cover.php");
} else {
include("plant.php");
}
}

?>
</ul>
</body>
</html>