<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/back.css" media="screen" charset="utf-8">
<BR /><BR /><BR />
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

<BR /><BR />
<form action="<?php echo site_url('search/search_keyword');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" />
<input type="reset" value = "Reset" onclick="myFunction()"/>
</form>
<BR /><BR />
<table align="center">
<tr>
  <th> ID </th>
  <th> File Name </th>
  <th> Title </th>
 
 </tr>
<?php
foreach($results as $row){
?>
    <tr>
        <td><?php echo $row->id?></td>
        <td><?php echo $row->product_pic?></td>
        <td><?php echo $row->title?></td>
    </tr>
<?php   
}
?>
</table>
<BR><BR><BR>

   </div>

</div>

<div id="bottom" style="margin:0 auto"></div>

<BR />

<center>
<FONT face="Verdana, Geneva, sans-serif" size="-5" color="#333333">Copyright Reserve &copy; 2015 Tuffah Informatics <BR /><BR />


</center>
<script>
function myFunction() {
    location.reload();
}
</script>