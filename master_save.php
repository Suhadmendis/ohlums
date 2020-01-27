<?php
session_start();
date_default_timezone_set('Asia/Colombo');

require_once ("connection_sql.php");
// include "crud_operation.php";


$main = array($_POST['main']);
$obj  = json_decode($main[0], true);
// print_r($obj[Col]);
$operation = $obj[Main];
$cols = $obj[Col];

// echo $cols[medical_date];
// echo $cols[ref_no];
// echo $cols[serial_no];
// echo $cols[passport_no];
// echo $cols[time];
// echo $cols[doctor];
// echo $cols[pasnger_name];
// echo $cols[age];
// echo $cols[sex];
// echo $cols[lab];
// echo $cols[entry_by];
// echo $cols[approved_by];


if ($operation = "SAVE") {
	
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();


        
        $sql = "Insert into job(name) values ('".$cols[serial_no]."') ";
        $result = $conn->query($sql);
       
      
        $conn->commit();
        echo "Saved";
    } catch (Exception $e) {
        $conn->rollBack();
        echo $e;
    }
}



?>