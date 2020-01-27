<?php
//session_start();
?>
<script src="https://unpkg.com/vue"></script>
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Comman</b></h3>
        </div>
        <form name= "form1" role="form" class="form-horizontal">

            <div class="box-body">


                <div class="form-group-sm">

                  
                    <a  onclick="save_inv();" class="btn btn-success btn-sm">
                        <span class="fa fa-save"></span> &nbsp; SAVE
                    </a>
    
                 

                    <a onclick="//delete1();" class="btn btn-danger btn-sm" disabled="disabled">
                        <span class="glyphicon glyphicon-trash"></span> &nbsp; DELETE
                    </a>

                    <a onclick="NewWindow('search_deliverynote.php?stname=code', 'mywin', '800', '700', 'yes', 'center');" class="btn btn-info btn-sm">
                        <span class="glyphicon glyphicon-search"></span> &nbsp; FIND
                    </a>

                    <a onclick="print();" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-print"></span> &nbsp; PRINT
                    </a>

            
                </div>
                <hr>
                <div id="msg_box" class="span12 text-center"></div>





 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Date</label>
 <div class='col-sm-2'>
 <input type='date' placeholder='Date'  id='date' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Serial_no</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Serial_no'  id='serial_no' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Medical</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Medical'  id='medical' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Ref_no</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Ref No'  id='ref_no' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Agency</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Agency'  id='agency' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Country</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Country'  id='country' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Gcc No</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Gcc No'  id='gcc_no' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Cmb No</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Cmb No'  id='cmb_no' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Passport No</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Passport No'  id='passport_no' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>First Name</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='First Name'  id='first_name' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Last Name</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Last Name'  id='last_name' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Address</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Address'  id='address' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Sex</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Sex'  id='sex' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Status</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Status'  id='status' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Doctor Code</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Doctor Code'  id='doctor_code' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Date Of Birth</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Date Of Birth'  id='date_of_birth' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Age</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Age'  id='age' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Over Age</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Over Age'  id='over_age' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Place Of Issue</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Place Of Issue'  id='place_of_issue' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Place Of Birth</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Place Of Birth'  id='place_of_birth' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Nationality</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Nationality'  id='nationality' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Position Applied</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Position Applied'  id='position_applied' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Company</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Company'  id='company' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Remark</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Remark'  id='remark' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Payment Type</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='Payment Type'  id='payment_type' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>Reciept Date
</label>
 <div class='col-sm-2'>
 <input type='date' placeholder='Reciept Date'  id='reciept_date' class='form-control Name  input-sm'>
 </div>
 </div>



          
        </form>


<br><br><br>
<div class="Container" id="app">

        
            
                <table id="inputheader" class="table table-bordered" hidden="">
                    <thead>
                        <tr>
                            <th style="width: 20%;"><input v-model="H1" id="H1"></th>
                            <th style="width: 20%;"><input v-model="H2" id="H2"></th>
                            <th style="width: 10%;"><input v-model="H3" id="H3"></th>
                            <th style="width: 50%;"><input v-model="H4" id="H4"></th>
                            <th style="width: 20%;"><input v-model="H5" id="H5"></th>
                        </tr>
                    </thead>
                   

                </table>

             
          


        <div id="beTable">
            <div id="getTable">
                <table id="myTable" class="table table-bordered" hidden="">
                    <thead>
                        <tr>
                            <th style="width: 20%;" contenteditable="false">{{H1}}</th>
                            <th style="width: 20%;" contenteditable="false">{{H2}}</th>
                            <th style="width: 10%;" contenteditable="false">{{H3}}</th>
                            <th style="width: 30%;" contenteditable="false">{{H4}}</th>
                            <th style="width: 20%;" contenteditable="false">{{H5}}</th>
                            <th style="width: 50%;" onclick="addRow();" >+</th>
                        </tr>
                    </thead>
                   

                </table>

              </div>
          </div>
</div>



        <div class="row">
            <div class="col-md-8" id="mattable">

            </div>


        </div>
    </div>

</section>
<script src="js/medical_register.js"></script>

<script type="text/javascript">

</script>
<script src="js/tableToJsonMini.js"></script>
<script src="js/tableToJson.js"></script>


<script>getdt();</script>
