<?php


//variable untuk cari ic
$icNumber = $_POST['icNumber'];

if($icNumber != null ) 
{

$queryRegister = mysql_query(" SELECT * FROM parent,student WHERE parent.id_parent = student.id_student AND parent.father_ic_number='$noIcParent' OR parent.mother_ic_number='$noIcParent' AND student.ic_number = '$noIcStudent' ");
$resultRegister = mysql_fetch_array($queryRegister);
$num = mysql_num_rows($queryRegister);

   $idstudent = $resultRegister['id_student'];
   $name = $resultRegister['student_name'];
   $ic = $resultRegister['ic_number'];

   if($num > 0) 
   {
	  
	   
    ?>
    <BR />
    <Font size="-2">  
    Student Name :<blink><strong style="color:red;"><?php echo $name; ?></strong></blink> <BR /> 
     Student IC : <blink><strong style="color:red;"><?php echo $ic; ?> </strong></blink> </Font>
     
  
    <div class="formarea"> 
      <form action="insert_register.php" method="post" name="check" id="check" onsubmit="return confirm('Are you sure want to register ?')">
      
        <div class="form-row">
      <input type="text" name="txtUsername" id="txtUsername" class="text-input--underbar width-full" placeholder="Username"  required >
      <input type="text" name="txtIdParent" id="txtIdParent" class="text-input--underbar width-full" value="<?php echo $idstudent; ?>" hidden>
        </div>

        <div class="form-row">
      <input type="password" name="txtPassword" id="txtPassword" class="text-input--underbar width-full" placeholder="Password"  required >
        </div>
        <BR>
       <div class="vspc form-row">
          <button class="button--large--cta" >Register Authentication</button> 
          
        </div>
        </form>
      </div> 
      
       
  <? } else { ?>
 
       <small style="color:red;"><strong>Sorry. IC Parent and IC Student might be not match, Try again.</strong></small>
    <? } ?>
    
    
<? } 

else 

{ ?>
<small style="color:red;"><strong>Sorry. You need to fill IC Number.</strong></small>
<? } ?>