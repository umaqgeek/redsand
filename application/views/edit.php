<?php echo form_open('main/save'); ?>


<p><input type ="text" name="firstname" value="<?php echo $fn ?>"/></p>
<p><input type ="text" name="middlename" value="<?php echo $mn ?>"/></p>
<p><input type ="text" name="lastname" value="<?php echo $ln ?>"/></p>

<p><input type ="submit" value="Update" name="submit"/></p>

<?php echo form_close();?>