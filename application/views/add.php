<?php echo form_open('main/save'); ?>


<p><input type ="text" name="status" placeholder="Status"/></p>
<p><input type ="text" name="user_level" placeholder="User Level"/></p>
<p><input type ="text" name="firstname" placeholder="First Name"/></p>
<p><input type ="text" name="middlename" placeholder="Middle Name"/></p>
<p><input type ="text" name="lastname" placeholder="Last Name"/></p>
<p><input type ="text" name="gender" placeholder="Gender"/></p>
<p><input type ="text" name="active" placeholder="Active/Not"/></p>
<p><input type ="text" name="state" placeholder="State"/></p>

<p><input type ="submit" value = "Update" name="submit"/></p>

<?php echo form_close();?>