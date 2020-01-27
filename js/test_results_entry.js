

new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue.js!',
    H1: 'Style',
    H2: 'Size',
    H3: 'Qty',
    H4: 'Remark',
    H5: 'Box / Packet No',
    H6: 'Hello Vue.js!'
  }
});

function GetXmlHttpObject() {
    var xmlHttp = null;
    try {
        // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
    } catch (e) {
// Internet Explorer
        try {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}

function keyset(key, e) {

    if (e.keyCode == 13) {
        document.getElementById(key).focus();
    }
}

function got_focus(key) {
    document.getElementById(key).style.backgroundColor = "#000066";
}

function lost_focus(key) {
    document.getElementById(key).style.backgroundColor = "#000000";
}



function getdt() {

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }

    var url = "comman_data.php";
    url = url + "?Command=" + "getdt";
    url = url + "&ls=" + "new";

    xmlHttp.onreadystatechange = assign_dt;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}

function assign_dt() {
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
    {

      XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("id");
      document.getElementById('refno').value = XMLAddress1[0].childNodes[0].nodeValue;

      XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("uniq");
      document.getElementById('uniq').value = XMLAddress1[0].childNodes[0].nodeValue;

    }
}









function save_inv() {

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }

    // var Jtable = "";
    // var table = $('#myTable').tableToJSON();
    // Jtable = JSON.stringify(table);
    


    ///////////////////////////////////////////////////////////////////////////////
    var obj = {
                  "Main": "SAVE",
                  "Sub": "",
                  "Flag": "",
                  "Table": "s_mas",
                  "Num": 6,
                  "Status": true,
                  "Message": "Something",
                  "Col": 
                    {
                      "medical_date" : document.getElementById("medical_date").value,
                      "ref_no" : document.getElementById("ref_no").value,
                      "serial_no" : document.getElementById("serial_no").value,
                      "passport_no" : document.getElementById("passport_no").value,
                      "time" : document.getElementById("time").value,
                      "doctor" : document.getElementById("doctor").value,
                      "pasnger_name" : document.getElementById("pasnger_name").value,
                      "age" : document.getElementById("age").value,
                      "sex" : document.getElementById("sex").value,
                      "lab" : document.getElementById("lab").value,
                      "entry_by" : document.getElementById("entry_by").value,
                      "approved_by" : document.getElementById("approved_by").value
                    }
                  
                };


    ///////////////////////////////////////////////////////////////////////////////
    




    var main = JSON.stringify(obj);
    var para = "";
    para = para + "main=" + main;
    

console.log(para);
    xmlHttp.onreadystatechange = saveitem;
    xmlHttp.open("POST", "master_save.php", true);
    xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlHttp.send(para);
    
}


function saveitem() {
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {

        if (xmlHttp.responseText == "Saved") {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-success' role='alert'><span class='center-block'>Saved</span></div>";
            $("#msg_box").hide().slideDown(400).delay(2000);
            $("#msg_box").slideUp(400);
        } else {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>" + JSON.parse(xmlHttp.responseText) + "</span></div>";
            $("#msg_box").hide().slideDown(400).delay(2000);
            // $("#msg_box").slideUp(400);
            console.log(JSON.parse(xmlHttp.responseText));
        }
    }
}







function addRow() {
   
  var table = document.getElementById("myTable");

  var row = table.insertRow(table.length);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  
 
    cell1.setAttribute("contenteditable", "true");
    cell2.setAttribute("contenteditable", "true");
    cell3.setAttribute("contenteditable", "true");
    cell4.setAttribute("contenteditable", "true");
    cell5.setAttribute("contenteditable", "true");
    cell6.setAttribute("contenteditable", "true");

  cell1.innerHTML = "";
  cell2.innerHTML = "";
  cell3.innerHTML = "";
  cell4.innerHTML = "";
  cell5.innerHTML = "";
  cell6.innerHTML = '<input type="button" value="-" onclick="deleteRow(this)">';

   qtyTot();
}

function deleteRow(r) {

  var i = r.parentNode.parentNode.rowIndex;
  document.getElementById("myTable").deleteRow(i);

        qtyTot();
}


function qtyTot() {

    var table = $('#myTable').tableToJSON();
    console.log(table);
    var  qtyTot = 0.00;
    var tempqty = 0.00;
    for (var i = table.length - 1; i >= 0; i--) {
          
          tempqty = parseFloat(table[i].Qty) || 0;
        qtyTot = tempqty + qtyTot;
    }

        document.getElementById("totQty").value = qtyTot;

}