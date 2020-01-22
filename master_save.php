<?php
session_start();
date_default_timezone_set('Asia/Colombo');

require_once ("connection_sql.php");
include "crud_operation.php";



// $obj = print_r($_POST);

$marks = array($_POST['main']);



$obj = json_encode($marks);
 
echo $obj;

?>