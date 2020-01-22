<?php
session_start();
date_default_timezone_set('Asia/Colombo');

require_once ("connection_sql.php");
include "crud_operation.php";




function generateId($id, $ref, $switch) {

    if ($switch == "pre") {
        $temp = substr($id, strlen($ref));
        $id = (int) $temp;

        return $id;
    } else if ($switch == "post") {

        $temp = substr("0000000" . $id, -7);
        $id = $ref . $temp;

        return $id;
    }
}

if ($_GET["Command"] == "getdt") {
    header('Content-Type: text/xml');
  
  
    $sql = "SELECT * FROM user_mast";
    $result = $conn->query($sql);
    // $row = $result->fetch();
                $ary = Array();
                foreach ($conn->query($sql) as $row) {
                   array_push($ary,$row); 
                }


    echo json_encode($ary);
}






if ($_GET["Command"] == "save_item") {


    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();


         $sql = "delete from category where Category_ID = '" . $_GET['Category_ID'] . "'";
        $conn->exec($sql);
        
        
        
        $sql = "Insert into category(Category_ID,Category)values 
        ('" . $_GET['Category_ID'] . "','" . $_GET['Category'] . "') ";
        $result = $conn->query($sql);
       
         $sql = "SELECT category_id FROM inv_para";
        $resul = $conn->query($sql);
        $row = $resul->fetch();
        $no1 = $row['category_id'];
        $no2 = $no1 + 1;
        $sql = "update inv_para set category_id = category_id + 1";
        $result = $conn->query($sql);


        $conn->commit();
        echo "Saved";
    } catch (Exception $e) {
        $conn->rollBack();
        echo $e;
    }
}


if ($_GET["Command"] == "edit") {
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();

        $sql2 = "update food_menu_master set description = '" . $_GET['itemdesc'] . "',amount = '" . $_GET['amount'] . "' where itemCode = '" . $_GET['itemcode'] . "'";

        $result = $conn->query($sql2);

        $conn->commit();
        echo "EDIT";
    } catch (Exception $e) {
        $conn->rollBack();
        echo $e;
    }
}

if ($_GET["Command"] == "delete") {

    $sql = "delete from food_menu_master where itemCode = '" . $_GET['itemcode'] . "'";
    $result = $conn->query($sql);

//    $conn->commit();
    echo "Delete";
}

?>