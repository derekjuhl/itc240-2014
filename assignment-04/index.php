<?php

//security precautions used per Thomas' instructions
include("passwords.php");

//security
$mysql = new mysqli("54.187.120.193", "djuhl002", $mysql_password, "djuhl002");

//Outputs table of tarantula inventory, basic information about the spiders
//In order of unique ID numbers assigned by database
$result = $mysql->query('SELECT * FROM tarantulas ORDER BY id ASC, type ASC;');

$query = $mysql->prepare("SELECT * FROM tarantulas;");

$query->execute();

?>
<table>
<?php
foreach ($result as $row) {
?>
<tr>
<td><?= $row["id"] ?>

<?php
}
?>
</table>