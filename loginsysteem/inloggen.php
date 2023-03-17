<?php

$inlognaam = $_POST ['inloggen'];
$wachtwoord = $_POST ['password'];

echo ('U bent ' . $inlognaam . ' en het wachtwoord is ' . $wachtwoord);
include('./database.php');

$query1 = "SELECT * from Gebruiker1 Where inlognaam='$inlognaam' AND wachtwoord='$wachtwoord'";
$uitvoer1 = mysqli_query($connectie, $query1);
while($nextrecord = mysqli_fetch_array($uitvoer1))
{
    echo $nextrecord[0]. ' ' .$nextrecord[1]. ' ' . $nextrecord[2]. " ". " ". $nextrecord[3]. "<br>";
}
$aantal = mysqli_num_rows($uitvoer1);
echo 'uw naam komt ' . $aantal . ' keer ';
if ($aantal == 1) {
    echo"ja";
    header("refresh:3, url=./volgende.php");
} else {
    echo ("nee");
    header("refresh:3, url=./inloggen.html");
} 

?>
