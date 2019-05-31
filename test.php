<?php

$link = mysqli_connect("127.0.0.1", "root", "", "admission2018");
$query="SELECT * FROM `options` WHERE 1";
$result = mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result)) {
	print_r($row);
	echo "</br>"; 
	echo $row["gender"];

}

?>