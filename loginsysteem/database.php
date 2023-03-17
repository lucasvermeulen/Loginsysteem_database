<?php

$host = 'localhost';
$user = 'root';
$ww = '';
$database = 'test_gouda';

if ($connectie = mysqli_connect("$host", "$user", "$ww", "$database")) {
    echo '<br>Verbinding met database gelukt<br>';
} else {
    echo "<br>Verbinding is mislukt<br";
} 

?>
