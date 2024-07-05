<?php

$favfood = htmlspecialchars($_POST['favfood']);
$destination = htmlspecialchars($_POST['destination']);
$career = htmlspecialchars($_POST['career']);


echo "Your favourite food is: $favfood";
echo "<br>";
echo "Your favourite destinatiion: $destination";
echo "<br>";
echo "Your dream career is: $career";