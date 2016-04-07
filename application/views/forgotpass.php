<script>
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
  if(navigator.appName == "Netscape")
     document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
  function mischandler(){
   return false;
 }
  function mousehandler(e){
     var myevent = (isNS) ? e : event;
     var eventbutton = (isNS) ? myevent.which : myevent.button;
    if((eventbutton==2)||(eventbutton==3)) return false;
 }
 document.oncontextmenu = mischandler;
 document.onmousedown = mousehandler;
 document.onmouseup = mousehandler;
function killCopy(e){
    return false
}
function reEnable(){
    return true
}
document.onselectstart = new Function ("return false")
if (window.sidebar){
    document.onmousedown=killCopy
    document.onclick=reEnable
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">


 
</script>
</head>

<body>
<BR /><BR />





<div class="shortcode col3-1" style=" width:90%" >
<B>
<?php echo "Your detail is : <BR><BR>"; ?>
<?php echo "<center> IC Number  : <blink><strong style='color:red;'>" . $icnumber . "<BR></strong></blink>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "; ?>
<?php echo " Name : <blink><strong style='color:red;'>" . $firstname . " ". $middlename . " ". $lastname . "<BR></strong></blink>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?> 
<?php echo " email : <blink><strong style='color:red;'>" . $email . "</strong></blink>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center><BR>"; ?> 


<?php $attributes = array('onsubmit' => "return checkForm(this)"); ?>
<?php echo form_open('user_authentication/reset_password',$attributes); ?> 

<BR><BR>







<input type="email" id="email" name="email"  value="<?php echo $email; ?>" hidden />
<input type="text" id="icnumber" name="icnumber" value="<?php echo $icnumber; ?>" hidden />
<input type="text" id="idlogin" name="idlogin" value="<?php echo $id; ?>" hidden />
 
  
 <center>
 <?php
echo form_submit('submit', 'Confirm to Change the Password'); 

echo form_close();
?>
 
 <center>
  
<BR><BR>


</div>

</form>
</body>
</html>