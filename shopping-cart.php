<?php

session_start();

var_dump($_SESSION['cart']);

$whereIn = implode(',', $_SESSION['cart']);

$sql = "
    SELECT * FROM products
    WHERE id IN (3,4,5)

";