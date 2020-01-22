<?php
session_start();
date_default_timezone_set('Asia/Colombo');

require_once ("connection_sql.php");
include "crud_operation.php";


$main = array($_POST['main']);
$obj  = json_decode($main[0], true);

// $obj = print_r($_POST);

// echo $main;
print_r($obj);
 

?>