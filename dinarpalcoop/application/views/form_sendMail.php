<html>
<head>
	<title>Send Mail Form</title>
	<script type="text/javascript">
	function checkForm () {
		var a = document.getElementById('recever');
		var b = document.getElementById('title');
		var c = document.getElementById('content');
		if (a.value == ""){
			alert("Please Fill This Form");
			a.focus();
			return false;
		}else{
			if(b.value == ""){
				alert("Please Fill This Form");
			    b.focus();
			    return false;
			}else{
				if(c.value == "") {
					alert("Please Fill This Form");
			        c.focus();
			        return false;
				};
			}
		}
		return true;
	}
	</script>
</head>
<body>
<?php echo $error;?>
<?php echo form_open_multipart("c_mail/insertMail");?>
<label>Send To : </label>
<input type="text" name="recever" id="recever" size="20"/>
<br/>
<label>Title : </label>
<input type="text" name="title" id="title" size="20"/>
<br/>
<label>Content : </label><br>
<textarea name="content" id="content"/></textarea>
<br /><br />
<input type="submit" value="Send" onclick = "return checkForm();" />
</form>
</body>
</html>