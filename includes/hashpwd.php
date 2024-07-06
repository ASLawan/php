<?php

$sensitiveData = "Lawan";

$salt = bin2hex(random_bytes(16));
$pepper = "NawalNitsuaSewoyebaa";

echo "<br>" . $salt;

$dataToHash =  $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

echo "<br>" . $hash;
