<?php

include 'conn.php';

$Id = $_GET['Id'];

$q = " DELETE FROM `stock` WHERE Id = $Id ";

mysqli_query($conn, $q);

header('location:stock.php');

?>