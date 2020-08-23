function createXmlHttp() {
    if (window.XMLHttpRequest) {
       xmlHttp = new XMLHttpRequest();
    } else {
       xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
}
function getSource() {          
    var url = '../include/lib/Ajax.php';  
    var urls = document.getElementById("zy_url").value;
    var wd = document.getElementById("sp_name").value; 
    if (wd == "") {
        alert("请输入内容");
        return;
    }
    console.log(urls);
    createXmlHttp();                                           
    xmlHttp.onreadystatechange = writeSource;                   
    xmlHttp.open("POST", url, true);
    xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xmlHttp.send('wd='+wd+'&url='+urls);
}

function writeSource() {
    if (xmlHttp.readyState == 4) {
      if (xmlHttp.responseText.length<0) {alert('暂无资源');}
        document.getElementById("reslist").innerHTML = xmlHttp.responseText;
    }
}

function getDydata() {          
    var url = '../include/lib/Ajax.php';                          
    var urls = document.getElementById("zy_url").value;            
    var id = document.getElementById("urllist").value;             
    var srot = document.getElementById("srot").value; 
    console.log(urls+id);
    createXmlHttp();                               
    xmlHttp.onreadystatechange = Dydata;                 
    xmlHttp.open("POST", url, true);
    xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xmlHttp.send('id='+id+'&url='+urls+'&srot='+srot);
}

function Dydata(){
  if (xmlHttp.readyState == 4) {
        var obj = JSON.parse(xmlHttp.responseText);
        eval('var obj ='+xmlHttp.responseText);
        console.log(obj);
        if (obj.jj.length<0) {alert('暂无资源');}
        document.getElementById("sp_desc").value = obj.js;
        document.getElementById("sp_img").value = obj.img;
        document.getElementById("sp_url").innerHTML = obj.jj;
    }
}