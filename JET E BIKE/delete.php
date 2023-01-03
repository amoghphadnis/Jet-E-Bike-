<?php

include 'conn.php';

$Id = $_GET['Id'];

$q = " DELETE FROM `invoice` WHERE Id = $Id ";

mysqli_query($conn, $q);

header('location:invoice.php');

?>