<?php

if(isset($_SESSION['userId'])) {
    unset($_SESSION['userId']);
}
header('Location: index.php');
die();