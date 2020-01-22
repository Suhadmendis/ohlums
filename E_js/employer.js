
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



function newent() {

    document.getElementById("Category").value = "";
    
    getdt();

}




function getdt() {

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }

    var url = "employer_data.php";
    url = url + "?Command=" + "getdt";
    url = url + "&ls=" + "new";


    xmlHttp.onreadystatechange = get_dtt;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);

}



function get_dtt() {
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
    {
        

        // XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("id");
        // document.getElementById("Category_ID").value = XMLAddress1[0].childNodes[0].nodeValue;
        

        var table = '<table class="table table-dark">';
        table = table + '<thead>';
        table = table + '<tr>';

       
        table = table + '<th scope="col">First';
        table = table + '</th>';
        table = table + '<th scope="col">First';
        table = table + '</th>';
        table = table + '<th scope="col">First';
        table = table + '</th>';
        table = table + '<th scope="col">First';
        table = table + '</th>';
        table = table + '<th scope="col">First';
        table = table + '</th>';
        table = table + '<th scope="col">First';
        table = table + '</th>';
        table = table + '<th scope="col">First';
        table = table + '</th>';
        table = table + '<th scope="col">First';
        table = table + '</th>';
       
       
        table = table + '</tr>';
        table = table + '</thead>';
        table = table + '<tbody>';
        var data = JSON.parse(xmlHttp.responseText);
        // console.log(data[0].user_name)
        for (var i = data.length - 1; i >= 0; i--) {
            console.log(data[i]);
      
            table = table + '<tr>';


            table = table + '<td>';
            table = table + data[i][0];
            table = table + '</td>';

            table = table + '<td>';
            table = table + data[i][1];
            table = table + '</td>';

            table = table + '<td>';
            table = table + data[i][2];
            table = table + '</td>';

            table = table + '<td>';
            table = table + data[i][3];
            table = table + '</td>';

            table = table + '<td>';
            table = table + data[i][4];
            table = table + '</td>';

            table = table + '<td>';
            table = table + data[i][5];
            table = table + '</td>';

            table = table + '<td>';
            table = table + data[i][6];
            table = table + '</td>';

            table = table + '<td>';
            table = table + data[i][7];
            table = table + '</td>';

        


            table = table + '</tr>';

        }
         

        table = table + '</tbody>';
        table = table + '</table>';
        
       


       
       


        document.getElementById("itemdetails").innerHTML = table;

    }
}




function save_inv() {

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }


    var obj = {
                  "Main": "SAVE",
                  "Sub": "",
                  "Flag": "",
                  "Num": 6,
                  "Status": true,
                  "Message": "Something",
                  "Col": 
                    {
                      "name": document.getElementById("Category_ID").value,
                      "age": 29,
                      "secretIdentity": "Dan Jukes"
                    }
                  
                };
    var obj = JSON.stringify(obj);

    var para = "";
    para = para + "main=" + obj;
    


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




















function sysTrim(data) {
        data = data.replace('<?xml version="1.0" encoding="utf-8"?>',"");
        data = data.trim();
        return data;
}