<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">

  function checkForm(form)
  {
    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) 
	{
      if(form.pwd1.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pwd1.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pwd1.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pwd1.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.pwd1.focus();
        return false;
      }
    } 
	else 
	{
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd1.focus();
	  return false;
		 
    }
	

     if(confirm ( "Are you sure want to reset the password?"))
	       {
		     alert ( "Your password already reset and you can Login Now with new password"); 
	         return true;
		   }
	       else 
		   {
	         return false;
		   } 


	
	      
  }
 
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
Current @ New email  : <BR>

<input type="email" id="email" name="email"  placeholder="alisham@yahoo.com" value="<?php echo $email; ?>" /><BR><BR><BR>

New Password  : <BR>

<input type="password" id="password" name="pwd1" placeholder="********" > <BR> <BR><BR>

Re-enter New Password  : <BR>

<input type="password" id="password" name="pwd2" placeholder="********" >  <BR><BR>


 
  
 <?php
echo form_submit('submit', 'Confirm'); 
echo form_reset('reset', 'Reset'); 
echo form_close();
?>
 
 
  
<BR><BR>


</div>

</form>
</body>
</html>