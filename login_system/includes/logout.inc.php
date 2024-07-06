<?php

// logs out current user

session_start();
session_unset();
session_destroy();

header("location: ../index.php");
die();