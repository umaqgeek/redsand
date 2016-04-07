function semak(str)
{
if (str=="")
  {
  document.getElementById("ajax_respond").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("ajax_respond").innerHTML=xmlhttp.responseText;
    }
   else
   { 
  document.getElementById("ajax_respond").innerHTML='klkklklkl<img src="<?php echo base_url(assets/images/ajax-loader.gif); " />';
   }  
  }  
var argument = "icNumber="+document.getElementById("icnumber").value;
xmlhttp.open("POST","ajax_respond_register.php",true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
xmlhttp.send(argument);
}
