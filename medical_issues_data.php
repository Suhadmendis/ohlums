<?php

session_start();


require_once ("connection_sql.php");


date_default_timezone_set('Asia/Colombo');

if ($_GET["Command"] == "getdt") {
    header('Content-Type: text/xml');
    echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";

    $ResponseXML = "";
    $ResponseXML .= "<new>";

    $sql = "SELECT comman FROM invpara";
    $result = $conn->query($sql);
    $row = $result->fetch();
    $no = $row['comman'];

    $tmpinvno = "000000" . $row["comman"];
    $lenth = strlen($tmpinvno);
    $no = trim("COMMAN/") . substr($tmpinvno, $lenth - 7);


    $uniq = uniqid();

    $ResponseXML .= "<id><![CDATA[$no]]></id>";
    $ResponseXML .= "<uniq><![CDATA[$uniq]]></uniq>";
    $ResponseXML .= "</new>";

    echo $ResponseXML;
}




if ($_GET["Command"] == "save_item") {


    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();

        $sql = "delete from t_comman where REF_NO = '" . $_GET['refno'] . "'";
        $result = $conn->query($sql);

        $sql = "Insert into t_comman(REF_NO,cus_txt,addr_txt,costingref_txt,jobno_txt,pono_txt,sdate,dis_ref)values
                        ('" . $_GET['refno'] . "','" . $_GET['cus_txt'] . "','" . $_GET['addr_txt'] . "','" . $_GET['costingref_txt'] . "','" . $_GET['jobno_txt'] . "','" . $_GET['pono_txt'] . "','" . $_GET['date'] . "','" . $_GET['dis_ref'] . "')";
        $result = $conn->query($sql);
        
            $tableAry = json_decode($_GET['Jtable'],true);
            
            $size = sizeof(json_decode($_GET['Jtable'],true));
            

            for ($i=0; $i < $size ; $i++) { 
                $tableArysub = $tableAry[i];
                $sql = "Insert into t_comman_table(REF_NO,H1,H2,H3,H4,H5)values
                        ('" . $_GET['refno'] . "','" . $tableAry[$i][$_GET['H1']] . "','" . $tableAry[$i][$_GET['H2']] . "','" . $tableAry[$i][$_GET['H3']] . "','" .$tableAry[$i][$_GET['H4']] . "','" .$tableAry[$i][$_GET['H5']] . "')";
                $result = $conn->query($sql);

            }



        $sql = "SELECT comman FROM invpara";
        $resul = $conn->query($sql);
        $row = $resul->fetch();
        $no = $row['comman'];
        $no2 = $no + 1;
        $sql = "update invpara set comman = $no2 where comman = $no";
        $result = $conn->query($sql);

        $conn->commit();
        echo "Saved";
    } catch (Exception $e) {
        $conn->rollBack();
        echo $e;
    }
}






?>
