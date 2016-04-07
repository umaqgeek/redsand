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
<!doctype html>
<html itemscope="itemscope" itemtype="http://schema.org/WebPage" lang="en-US">
<head>
<meta charset="UTF-8">




<!-- wp_header -->
<script>document.documentElement.className += " js";</script>
<!-- This site is optimized with the Yoast WordPress SEO plugin v1.7.4 - https://yoast.com/wordpress/plugins/seo/ -->
<title>Map - Postline</title>
<meta name="robots" content="noindex,follow"/>
<link rel="canonical" href="http://themify.me/demo/themes/postline/map/" />
<!-- / Yoast WordPress SEO plugin. -->

<!-- <link rel="alternate" type="application/rss+xml" title="Postline &raquo; Feed" href="http://themify.me/demo/themes/postline/feed/" /> 
<link rel="alternate" type="application/rss+xml" title="Postline &raquo; Comments Feed" href="http://themify.me/demo/themes/postline/comments/feed/" /> 

<link rel='stylesheet' id='contact-form-7-css'  href='http://themify.me/demo/themes/postline/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='math-captcha-frontend-css'  href='http://themify.me/demo/themes/postline/wp-content/plugins/wp-math-captcha/css/frontend.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='themify-framework-css'  href='http://themify.me/demo/themes/postline/wp-content/themes/postline/themify/css/themify.framework.css?ver=2.1.8' type='text/css' media='all' />
<link rel='stylesheet' id='themify-builder-style-css'  href='http://themify.me/demo/themes/postline/wp-content/themes/postline/themify/themify-builder/css/themify-builder-style.css?ver=2.1.8' type='text/css' media='all' />
<style id='themify-builder-style-inline-css' type='text/css'>
.js.csstransitions .module.wow, .js.csstransitions .fly-in > .post, .js.csstransitions .fly-in .row_inner > .tb-column, .js.csstransitions .fade-in > .post, .js.csstransitions .fade-in .row_inner > .tb-column, .js.csstransitions .slide-up > .post, .js.csstransitions .slide-up .row_inner > .tb-column{ visibility:hidden; }
</style>

-->
<!--
<link rel='stylesheet' id='themify-animate-css'  href='http://themify.me/demo/themes/postline/wp-content/themes/postline/themify/themify-builder/css/animate.min.css?ver=2.1.8' type='text/css' media='all' />
-->
<!--  design  -->
<link rel='stylesheet' id='theme-style-css'  href='<?php echo base_url(); ?>css/style.css' type='text/css' media='all' />
<!--  responsive  -->
<link rel='stylesheet' id='themify-media-queries-css'  href='<?php echo base_url(); ?>css/media-queries.css' type='text/css' media='all' />

<link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Signika%3A400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-css'  href='<?php echo base_url(); ?>css/lightbox.css' type='text/css' media='all' />
<!--  font -->
<link rel='stylesheet' id='themify-icon-font-css'  href='http://themify.me/demo/themes/postline/wp-content/themes/postline/themify/fontawesome/css/font-awesome.min.css?ver=2.1.8' type='text/css' media='all' />

<script type='text/javascript' src='<?php echo base_url(); ?>js/jquery.js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>js/video.js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>js/bigvideo.js'></script>




<!--<script type='text/javascript'>
/* <![CDATA[ */
var tbScrollHighlight = {"fixedHeaderSelector":"","scrollOffset":"0"};
/* ]]> */
</script>-->

<!--
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/themes/postline/themify/themify-builder/js/themify.scroll-highlight.js?ver=4.1.1'></script>
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/themes/postline/js/audio-player.js?ver=4.1.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://themify.me/demo/themes/postline/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://themify.me/demo/themes/postline/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.1.1" />
<link rel='shortlink' href='http://themify.me/demo/themes/postline/?p=161' />
-->




	<!-- media-queries.js -->
	<!--[if lt IE 9]>
		<script src="http://themify.me/demo/themes/postline/wp-content/themes/postline/js/respond.js"></script>
	<![endif]-->
	
	<!-- html5.js -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

	<!--[if lt IE 9]>
	<script src="http://s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script> 
	<![endif]-->
	<script>			function isSupportTransition() {
				var b = document.body || document.documentElement,
					s = b.style,
					p = 'transition';

				if (typeof s[p] == 'string') { return true; }

				// Tests for vendor specific prop
				var v = ['Moz', 'webkit', 'Webkit', 'Khtml', 'O', 'ms'];
				p = p.charAt(0).toUpperCase() + p.substr(1);

				for (var i=0; i<v.length; i++) {
					if (typeof s[v[i] + p] == 'string') { return true; }
				}
				return false;
			}
			if ( isSupportTransition() ) {
				document.documentElement.className += " csstransitions";	
			}
			</script>			<!--Themify Styling-->
			<style type="text/css"></style>
			<!--/Themify Styling-->
	
    
     <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  
  // form max number
  function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
  }
  
  </script>
  
 <script type="text/javascript">

  function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Error: Username or IC number cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }
	
	
	
    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
      if(form.pwd1.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pwd1.focus();
        return false;
      }
      if(form.pwd1.value == form.username.value) {
        alert("Error: Password must be different from Username!");
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
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd1.focus();
      return false;
    }
	
	if(form.email.value == "")       { alert("Error: Email cannot be blank!");       form.email.focus(); return false; }

	
	if(form.firstname.value == "" )  { alert("Error: First name cannot be blank!");  form.firstname.focus(); return false;}
	if(form.middlename.value == "")  { alert("Error: Middle name cannot be blank!"); form.middlename.focus(); return false;}
	if(form.lastname.value == "")    { alert("Error: Last name cannot be blank!");   form.lastname.focus(); return false;}
	if(form.icnumber.value == "")    { alert("Error: IC cannot be blank!");          form.icnumber.focus(); return false;}
	
	if ( ( form.sex[0].checked == false ) && ( form.sex[1].checked == false ) ) 
    {
       alert ( "Error: For personal information, please choose your gender either Male or Female" ); 
       return false;
    }	
	if(form.phone.value == "") 
	{ alert("Error: Phone number cannot be blank!");   form.phone.focus(); return false;}
	if(form.facebookurlid.value == "")
	{ alert("Error: Facebook URL ID cannot be blank!");   form.facebookurlid.focus(); return false;}
	
	if(form.date.value == ""){ alert("Error: Date cannot be blank!");   form.date.focus(); return false;}
	if(form.street1.value == "") { alert("Error: Street 1 cannot be blank!"); form.street1.focus(); return false;}
	if(form.street2.value == "") { alert("Error: Street 2 cannot be blank!"); form.street2.focus(); return false;}
	if(form.district.value == "")  { alert("Error: District cannot be blank!"); form.district.focus(); return false;}
	if(form.postcode.value =="") { alert("Error: Postcode cannot be blank!"); form.postcode.focus(); return false;}
	if(form.state.value =="") { alert("Error: State cannot be blank!"); form.state.focus(); return false;}
	if(form.country.value =="" ){ alert("Error: Country cannot be blank!"); form.country.focus(); return false;}
	
	if(form.firstnamew.value == "" )   
	{ alert("Error: Beneficiary firstname cannot be blank!");  form.firstnamew.focus(); return false;}
	if(form.middlenamew.value == "")  
	{ alert("Error: Beneficiary middle name cannot be blank!"); form.middlenamew.focus(); return false;}
	if(form.lastnamew.value == "")    
	{ alert("Error: Beneficiary last name cannot be blank!");   form.lastnamew.focus(); return false;}
	
	if(form.icnumberw.value == "")    { alert("Error: IC cannot be blank!");          form.icnumberw.focus(); return false;}
	
	if (( form.sexw[0].checked == false ) && ( form.sexw[1].checked == false ) ) 
    {
       alert ( "Error: For beneficiary information, please choose your gender either Male or Female" ); 
       return false;
    }	
	if(form.phonew.value == "") 
	{ alert("Error: Phone number cannot be blank!");   form.phonew.focus(); return false;}
	if(form.emailw.value == "")
	{ alert("Error: Facebook URL ID cannot be blank!");   form.emailw.focus(); return false;}
	if(form.facebookurlidw.value == "")
	{ alert("Error: Facebook URL ID cannot be blank!");   form.facebookurlidw.focus(); return false;}
	
	
	if(form.datew.value == "")     { alert("Error: Date cannot be blank!");   form.datew.focus(); return false;}
	if(form.street1w.value == "")  { alert("Error: Street 1 cannot be blank!"); form.street1w.focus(); return false;}
	if(form.street2w.value == "")  { alert("Error: Street 2 cannot be blank!"); form.street2w.focus(); return false;} 
	if(form.districtw.value == "") { alert("Error: District cannot be blank!"); form.districtw.focus(); return false;}
	if(form.postcodew.value == "") { alert("Error: Postcode cannot be blank!"); form.postcodew.focus(); return false;}
	if(form.statew.value == "")    { alert("Error: State cannot be blank!"); form.statew.focus(); return false;}
	if(form.countryw.value == "")  { alert("Error: Country cannot be blank!"); form.countryw.focus(); return false;}
	
	if (( form.any[0].checked == false ) && ( form.any[1].checked == false ) ) 
    {
       alert ( "Error: Please choose either Yes or No" ); 
       return false;
	   
    }
	
	if( form.any[0].checked == true )
	{
		   if(form.statename.value == "")
		   {
		    alert ( "Error: Please state the name co-operative" ); 
			form.statename.focus();
		    return false;
		   }
		   
		  if(confirm ( "Are you sure want to Sign Up for this all account information?"))
		  {
		    alert ( "Your Sign Up already done and you can Login Now"); 
	        return true;
		  }
	      else 
		  {
	        return false;
		  }
		   
	}
	   
	if( form.any[1].checked == true )
	{
		   if(confirm ( "Are you sure want to Sign Up for this all account information?"))
	       {
		     alert ( "Your Sign Up already done and you can Login Now"); 
	         return true;
		   }
	       else 
		   {
	         return false;
		   }
	}
	
   
	
  }
  
  function myFunction() {
    var f = document.getElementById("firstname");  f.value = f.value.toUpperCase();
	var m = document.getElementById("middlename"); m.value = m.value.toUpperCase();
	var l = document.getElementById("lastname");   l.value = l.value.toUpperCase();
	
	var s1 = document.getElementById("street1");   s1.value = s1.value.toUpperCase();
	var s2 = document.getElementById("street2");   s2.value = s2.value.toUpperCase();
	var d = document.getElementById("district");   d.value = d.value.toUpperCase();    
	var s = document.getElementById("state");      s.value = s.value.toUpperCase();
	var c = document.getElementById("country");    c.value = c.value.toUpperCase();
	
	var fw = document.getElementById("firstnamew");  fw.value = fw.value.toUpperCase();
	var mw = document.getElementById("middlenamew"); mw.value = mw.value.toUpperCase();
	var lw = document.getElementById("lastnamew");   lw.value = lw.value.toUpperCase();
	
	var s1w = document.getElementById("street1w");   s1w.value = s1w.value.toUpperCase();
	var s2w = document.getElementById("street2w");   s2w.value = s2w.value.toUpperCase();
	var dw = document.getElementById("districtw");   dw.value = dw.value.toUpperCase();    
	var sw = document.getElementById("statew");      sw.value = sw.value.toUpperCase();
	var cw = document.getElementById("countryw");    cw.value = cw.value.toUpperCase();
	var sn = document.getElementById("statename");    sn.value = sn.value.toUpperCase();
  }
    
</script>
  <style>
.alert {
  padding: 8px 35px 8px 14px;
  margin-bottom: 20px;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  background-color: #fcf8e3;
  border: 1px solid #fbeed5;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
}

.alert,
.alert h4 {
  color: #c09853;
}

.alert h4 {
  margin: 0;
}

.alert .close {
  position: relative;
  top: -2px;
  right: -21px;
  line-height: 20px;
}

.alert-success {
  color: #468847;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}

.alert-success h4 {
  color: #468847;
}

.alert-danger,
.alert-error {
  color: #b94a48;
  background-color: #f2dede;
  border-color: #eed3d7;
}

.alert-danger h4,
.alert-error h4 {
  color: #b94a48;
}

.alert-info {
  color: #3a87ad;
  background-color: #d9edf7;
  border-color: #bce8f1;
}

.alert-info h4 {
  color: #3a87ad;
}

.alert-block {
  padding-top: 14px;
  padding-bottom: 14px;
}

.alert-block > p,
.alert-block > ul {
  margin-bottom: 0;
}

.alert-block p + p {
  margin-top: 5px;
}
	</style>
    
</head>


<body class="page page-id-161 page-template-default skin-default webkit not-ie default_width sidebar-none no-home no-touch">


	
	
	<div id="body" class="clearfix"> 
	

<!-- layout-container -->
<div id="layout" class="pagewidth clearfix">	

<?php if($this->session->flashdata('errorregistered')) : ?>
 <div class="alert alert-error" style="width:auto; margin:0 auto; "><?php echo $this->session->flashdata('errorregistered'); ?> </div>
<?php endif;?>
		<!-- content -->
	<div id="content" class="clearfix">
    		
				<BR><BR>
							<div id="page-161" class="type-page" itemscope itemtype="http://schema.org/Article">
							<div class="page-inner clearfix">
						<!-- page-title -->
			 
<h2>Sign Up</h2>
				<BR>
			<!-- /page-title -->
            
<div class="shortcode col3-1" style=" width:100%" > <!-- start shortcode col3-1 -->

<B>
<h3>Account Information</h3>

<?php $attributes = array('onsubmit' => "return checkForm(this)"); ?>
<?php echo form_open('user_authentication/new_user_registration',$attributes); ?> 

<BR>IC Number :<BR> 
<input type="text"  id="username" name="username" placeholder="Please enter your IC Number. Eg: 9211026018922" onkeypress="return isNumberKey(event)" maxlength="12"> <BR>  
<?php
echo "<div class='error_msg'>";
if (isset($message_display)) {
echo $message_display;
}
echo "</div>";
 ?>  
<BR>Password :<BR> 
<input type="password" id="password" name="pwd1" placeholder="Please enter password. Eg: p@ssw0rD" > <BR>
<BR>Re-enter Password:<BR> 
<input type="password" id="password" name="pwd2" placeholder="Please re-enter your password. Eg: p@ssw0rD"  > <BR>
<BR>Email:<BR> 
<input type="email" id="email" name="email" placeholder="Please enter your email addess. Eg: xxxxxx@xxxx.com"  > 

<BR><BR><BR><BR>

<input type="text" id="userlevel" name="userlevel" size="23" value="2" hidden >

<!--<h3>Personal Information </h3>


<BR>Name :<BR> <input type="text" id="firstname" name="firstname" placeholder="First name"  onblur="myFunction()"> <BR><BR>
                <input type="text" id="middlename" name="middlename" placeholder="Middle name" onblur="myFunction()"> <BR><BR>
                <input type="text" id="lastname" name="lastname" placeholder="Last name" onblur="myFunction()">  <BR>
                
<BR>IC Number : <BR> <input type="text" id="icnumber" maxlength="12" name="icnumber" placeholder="911028017283" onkeypress="return isNumberKey(event)" > <BR><BR> 
           
<BR>Gender : <BR> <input type="radio" name="sex" value="Male" id="sex">Male
                                  <input type="radio" name="sex" value="Female" id="sex" >Female 
                           <BR>

<BR>Phone Number : <BR> <input name="phone"  id="phone" maxlength="10" onkeypress="return isNumberKey(event)" type="text" value="" placeholder="011-10687821"> <BR>


<BR>Facebook URL ID : <BR> <input type="text" id="facebookurlid" name="facebookurlid" placeholder="https://www.facebook.com/ali.sham?fref=nf"> <BR>

<BR>Date of birth : <BR> <input type="date" id="date" name="date" min="19 00-01-02" max="<?php echo date('d-m-Y');?>"  onfocus="(this.type='date')"> <BR><BR>

Address: <BR>
<input type="text" id="street1" name="street1" placeholder="Street 1" onblur="myFunction()" >  <BR><BR>
<input type="text" id="street2" name="street2" placeholder="Street 2" onblur="myFunction()">  <BR><BR>
<input type="text" id="district" name="district" placeholder="District" onblur="myFunction()">  <BR><BR>
<input name="postcode" maxlength="5" type="text" id="postcode" onkeypress="return isNumberKey(event)" placeholder="Postcode" ><BR><BR>
<input type="text" id="state" name="state" placeholder="State"onblur="myFunction()" >  <BR><BR>
<input name="country" id="country" type="text"  placeholder="Country"  onblur="myFunction()"/> <BR><BR><BR><BR>




<h3>Beneficiary Information </h3><BR>

Name :<BR> <input type="text" id="firstnamew" name="firstnamew" placeholder="First name" onblur="myFunction()" > <BR><BR>
                <input type="text" id="middlenamew" name="middlenamew" placeholder="Middle name" onblur="myFunction()"> <BR><BR>
                <input type="text" id="lastnamew" name="lastnamew" placeholder="Last name" onblur="myFunction()">  <BR>

<BR>IC Number : <BR> <input type="text" id="icnumberw" maxlength="12" name="icnumberw" placeholder="911028017283" onkeypress="return isNumberKey(event)" > <BR><BR>         

                <BR>Gender : <BR> <input type="radio" name="sexw" value="Male" id="sexw">Male
                           <input type="radio" name="sexw" value="Female" id="sexw">Female <BR>

<BR>Phone Number : <BR> <input name="phonew"  id="phonew" maxlength="10" onkeypress="return isNumberKey(event)" type="text" value="" placeholder="+06011-10687821"> <BR>

<BR>Email : <BR> <input name="emailw"  id="emailw" type="email" placeholder="ahmad@yahoo.com"> <BR>

<BR>Facebook URL ID : <BR> <input type="text" id="facebookurlidw" name="facebookurlidw" placeholder="https://www.facebook.com/ahmad?fref=nf"> <BR>

<BR>Date of birth : <BR> <input type="date" id="datew" name="datew" min="19 00-01-02" max="<?php echo date('d-m-Y');?>"  onfocus="(this.type='date')"> <BR><BR>

Address: <BR>
<input type="text" id="street1w" name="street1w" placeholder="Street 1" onblur="myFunction()">  <BR><BR>
<input type="text" id="street2w" name="street2w" placeholder="Street 2" onblur="myFunction()">  <BR><BR>
<input type="text" id="districtw" name="districtw" placeholder="District" onblur="myFunction()">  <BR><BR>
<input name="postcodew" maxlength="5" type="text" id="postcodew" onkeypress="return isNumberKey(event)" placeholder="Postcode" ><BR><BR>
<input type="text" id="statew" name="statew" placeholder="State" onblur="myFunction()">  <BR><BR>
<input name="countryw" id="countryw" type="text"  value="" placeholder="Country" onblur="myFunction()" /> <BR><BR>

-->
                           
<BR>Do you members of any co-operative :<BR> <input type="radio" name="any" value="Yes" id="any">Yes
                                             <input type="radio" name="any" value="No" id="any">No<BR><BR>
                                             
<BR>If Yes, please state the name of co-operative :<BR> <input type="text" name="statename" id="statename" placeholder="Please enter your previous cooperavite name" onblur="myFunction()">
                                     

<BR><BR>
</B>
 
<link href="<?php echo base_url().'assets/css/button.css' ?>" rel="stylesheet"><button type="submit" class="blue-button " data-toggle="modal" value="Sign Up">Create</button></link>              
<link href="<?php echo base_url().'assets/css/button.css' ?>" rel="stylesheet"><button type="reset" class="button " data-toggle="modal" value="Reset">Reset</button></link> 
<?php
echo form_close();
?>

<BR><BR><BR>
</div>  <!-- end shortcode col3-1 -->


<div id="themify_builder_content-161" data-postid="161" class="themify_builder_content themify_builder_content-161 themify_builder themify_builder_front">
	</div>
<!-- /themify_builder_content -->				
								
								
				<!-- comments -->
									

	
	


		
								<!-- /comments -->
			
			</div>
			<!-- /.post-content -->
							</div><!-- /.post-inner -->
						</div><!-- /.type-page -->
		
		
		        
        	</div>
	<!-- /content -->
    
	
</div>
<!-- /layout-container -->
	
<!-- Missing: missing -->
		</div>
	<!-- /body -->
		
	

<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/themify.me\/demo\/themes\/postline\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.1.1'></script>
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/themes/postline/themify/js/carousel.min.js?ver=2.1.8'></script>
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/themes/postline/themify/themify-builder/js/themify.builder.module.plugins.js?ver=2.1.8'></script>
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/themes/postline/themify/js/waypoints.min.js?ver=4.1.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var tbLocalScript = {"isTouch":"","isAnimationActive":"1","isParallaxActive":"1","animationInviewSelectors":[".module.wow",".fly-in > .post",".fly-in .row_inner > .tb-column",".fade-in > .post",".fade-in .row_inner > .tb-column",".slide-up > .post",".slide-up .row_inner > .tb-column"],"createAnimationSelectors":[],"backgroundSlider":{"autoplay":5000,"speed":2000},"animationOffset":"100","videoPoster":"http:\/\/themify.me\/demo\/themes\/postline\/wp-content\/themes\/postline\/themify\/themify-builder\/img\/blank.png"};
/* ]]> */
</script>
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/themes/postline/themify/themify-builder/js/themify.builder.script.js?ver=2.1.8'></script>
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/themes/postline/js/jquery.isotope.min.js?ver=4.1.1'></script>
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/themes/postline/js/jquery.infinitescroll.min.js?ver=4.1.1'></script>
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/themes/postline/js/jquery-scrolltofixed-min.js?ver=4.1.1'></script>
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/themes/postline/js/jquery.inview.js?ver=4.1.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var themifyScript = {"loadingImg":"http:\/\/themify.me\/demo\/themes\/postline\/wp-content\/themes\/postline\/images\/loading.gif","maxPages":"0","autoInfinite":"auto","lightbox":{"lightboxSelector":".lightbox","lightboxOn":true,"lightboxContentImages":false,"lightboxContentImagesSelector":".post-content a[href$=jpg],.page-content a[href$=jpg],.post-content a[href$=gif],.page-content a[href$=gif],.post-content a[href$=png],.page-content a[href$=png],.post-content a[href$=JPG],.page-content a[href$=JPG],.post-content a[href$=GIF],.page-content a[href$=GIF],.post-content a[href$=PNG],.page-content a[href$=PNG],.post-content a[href$=jpeg],.page-content a[href$=jpeg],.post-content a[href$=JPEG],.page-content a[href$=JPEG]","theme":"pp_default","social_tools":false,"allow_resize":true,"show_title":false,"overlay_gallery":false,"screenWidthNoLightbox":600,"deeplinking":false,"contentImagesAreas":".post, .type-page, .type-highlight, .type-slider","gallerySelector":".gallery-icon > a[href$=jpg],.gallery-icon > a[href$=gif],.gallery-icon > a[href$=png],.gallery-icon > a[href$=JPG],.gallery-icon > a[href$=GIF],.gallery-icon > a[href$=PNG],.gallery-icon > a[href$=jpeg],.gallery-icon > a[href$=JPEG]","lightboxGalleryOn":true},"lightboxContext":"#pagewrap","isTouch":"false","baseUrl":"http:\/\/themify.me\/demo\/themes\/postline\/","isPrettyPermalink":"1","timeLineAjaxUrl":"http:\/\/themify.me\/demo\/themes\/postline\/wp-admin\/admin-ajax.php","timeline_load_nonce":"33fc503de5","audioPlayer":"http:\/\/themify.me\/demo\/themes\/postline\/wp-content\/themes\/postline\/js\/player.swf","context":"page","query_page_id":"161"};
/* ]]> */
</script>
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/themes/postline/js/themify.script.js?ver=4.1.1'></script>
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/themes/postline/themify/js/themify.gallery.js?ver=4.1.1'></script>
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/themes/postline/themify/js/lightbox.js?ver=2.1.8'></script>
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-includes/js/comment-reply.min.js?ver=4.1.1'></script>
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/themes/postline/themify/js/themify.shortcodes.js?ver=2.1.8'></script>
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false&#038;ver=2.1.8'></script>
<script type='text/javascript' src='http://themify.me/demo/themes/postline/wp-content/themes/postline/themify/js/themify.mapa.js?ver=2.1.8'></script>

<script>
	jQuery(window).load(function(){ jQuery(window).resize(); });
</script>



</body>
</html>