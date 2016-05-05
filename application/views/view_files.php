<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Pengurusan File</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/button.css" media="screen" charset="utf-8">
</head>

<body>

<BR><BR><BR>

<div id="top" style="margin:0 auto"></div>

<div id="menu" style="margin:0 auto"><?php include('menu.php');?>
</div>
<div id="undermenu" style="margin:0 auto">
</div>
<div id="wrap" style="margin:0 auto">


   <div class="submenu" style="margin:0 auto"><BR /><BR />
   <?php include('sub_menu.php');?>
   </div>

   <div class="middle" style="margin:0 auto"><BR /><BR />
     
     <center>
     

<BR><BR><BR>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>

<form action="download/download_zip" method="post">
<table>

<?php
foreach($files as $key=>$file_name){
    echo "<tr><td><input type='checkbox' name='files[]' value='".$file_name."' /></td><td>".$file_name."</td></tr>";
}
?>
</table>
    <input type="text" name="file_name" id="file_name">
    <input type="submit" value="Download" id="download">
</form>
<script type="text/javascript">
	$('form').submit(function() {
    
  		var checked_boxes = $(":checkbox:checked").length;

  		if(checked_boxes < 1){
      			alert("Please Select Files");
      			return false;
  		}else if($('#file_name').val() == ''){
      			alert("Please Enter Name");
      			return false;
  		}
  
	});
</script>


<BR><BR><BR>
 </center>
   </div>

</div>

<div id="bottom" style="margin:0 auto"></div>

<BR />

<center>
<FONT face="Verdana, Geneva, sans-serif" size="-5" color="#333333">Copyright Reserve &copy; 2015 Tuffah Informatics <BR /><BR />


</center>

</body>
</html>
