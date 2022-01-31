<?php
include('db.php');
session_start();
$id = $_SESSION['id'];
    echo "why you no click omo werey";
    header( "refresh:2;url=nominate.php?id=$id" );
?>