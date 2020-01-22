<?php
include './connection_sql.php';
?>

<style type="text/css">
    .al-test{
        text-align: right;
    }

    .st-row{
        text-align: center;
        color: white;
        background-color: #1ba841;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<section class="content">
    <div class="box box-primary">

        <div class="box-header with-border">
            <h3 class="box-title">Ledger Indicater<?php
                $sql = "SELECT docname from doc_acc WHERE name = '" . $_GET['url'] . "'";
                $result = $conn->query($sql);
                $row = $result->fetch();

                echo $row['docname'];
                ?>   
                </h3>
        </div>

        <form role="form" name ="form1" class="form-horizontal">
            <div class="box-body">


                <div class="form-group">
                    <a style="margin-left: 10px;"  onclick="new_inv();" class="btn btn-default btn-sm">
                        <span class="fa fa-user-plus"></span> &nbsp; New
                    </a>

                </div>
                <div id="msg_box"></div>

                <div class="container">
                    <!-- <h2>Live Ledger Indicator</h2> -->

                    <table id="LED_T" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Entry Ref</th>
                                <th width="10%">Account Code</th>
                                <th width="30%">Account Name</th>
                                <th width="10%">Date</th>
                                <th>Remark</th>
                                <th>DEB</th>
                                <th>CRD</th>
                               
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                </div>


                <script src="js/ledger_indicater.js"></script>



<!--<script src="js/Manuel_aod_table.js">
</script>-->
                <?php
                include 'login.php';
                //  include './cancell.php';
                ?>
                <script>
                     //   for (var i = 0; i < 50; i++) {
                            
                            // setInterval(function(){
                                
                                new_inv();
                                
                            // }, 1000);
                            
                            
                            
                        //    --i;
                       // }

                        
                </script> 