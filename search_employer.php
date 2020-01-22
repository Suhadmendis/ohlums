<?php
session_start();
include_once './connection_sql.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <!--  <link href="style.css" rel="stylesheet" type="text/css" media="screen" /> -->


        <title>Search Employer</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">


            <script language="JavaScript" src="E_js/search_employer.js"></script>
            <!--<script language="JavaScript" src="js/search_payment_voucher.js"></script>-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css">

<style>
    .buttons-html5{
        color: white;
        background-color: #3f51b5;
        border: none;
    border-radius: 2px;
     color: white;
    position: relative;
    height: 36px;
    margin: 0;
    min-width: 64px;
    padding: 0 16px;
    display: inline-block;
    font-family: "Roboto","Helvetica","Arial",sans-serif;
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0;
    overflow: hidden;
    will-change: box-shadow;
    transition: box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);
    outline: none;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    line-height: 36px;
    vertical-align: middle;
    }
</style>

    </head>

    <body>


       

            <tr>
                <?php
                $stname = "";
                if (isset($_GET['stname'])) {
                    $stname = $_GET["stname"];
                }
                ?>
              
        <div class=""> 


         <table id="example" class="mdl-data-table" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
               
                    
            </tr>
        </thead>
        <tbody>
                <?php
                $sql = "SELECT * from employer limit 300";


                // $sql = $sql . " order by Category_ID limit 50";

                $stname = "";
                if (isset($_GET['stname'])) {
                    $stname = $_GET["stname"];
                }

                foreach ($conn->query($sql) as $row) {
                    $cuscode = $row['Category_ID'];
                    echo "<tr>
                              
                              <td style=\"width: 10%;\" onclick=\"custno('$cuscode', '$stname');\">" . $row[1] . "</a></td>
                              <td style=\"width: 10%;\" onclick=\"custno('$cuscode', '$stname');\">" . $row[5] . "</a></td>
                              <td style=\"width: 10%;\" onclick=\"custno('$cuscode', '$stname');\">" . $row[9] . "</a></td>
                              <td style=\"width: 10%;\" onclick=\"custno('$cuscode', '$stname');\">" . $row[11] . "</a></td>
                              <td style=\"width: 10%;\" onclick=\"custno('$cuscode', '$stname');\">" . $row[13] . "</a></td>
                              <td style=\"width: 10%;\" onclick=\"custno('$cuscode', '$stname');\">" . $row[14] . "</a></td>
                              <td style=\"width: 10%;\" onclick=\"custno('$cuscode', '$stname');\">" . $row[15] . "</a></td>
                              <td style=\"width: 10%;\" onclick=\"custno('$cuscode', '$stname');\">" . $row[16] . "</a></td>
                              <td style=\"width: 10%;\" onclick=\"custno('$cuscode', '$stname');\">" . $row[17] . "</a></td>


                              </a></td>
                             
                             </tr>";
                }
                ?>
            </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              
             
            </tr>
        </tfoot>
    </table>


        </div>











    </body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script  type="text/javascript">

$(document).ready(function() {
    $('#example').DataTable( {
   dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf'
        ]
} );
  $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#example').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );

</script>
