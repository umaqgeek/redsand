<!DOCTYPE html>
<!-- saved from url=(0039)http://themify.me/demo/themes/postline/ -->
<html itemscope="itemscope" itemtype="http://schema.org/WebPage" lang="en-US" class="js csstransitions csstransforms csstransforms3d"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">




<!-- wp_header -->
<script>document.documentElement.className += " js";</script>

<link rel="stylesheet" id="contact-form-7-css" href="<?php echo base_url();?>files/styles.css" type="text/css" media="all">
<link rel="stylesheet" id="math-captcha-frontend-css" href="<?php echo base_url();?>files/frontend.css" type="text/css" media="all">
<link rel="stylesheet" id="themify-framework-css" href="<?php echo base_url();?>files/themify.framework.css" type="text/css" media="all">
<link rel="stylesheet" id="themify-builder-style-css" href="<?php echo base_url();?>files/themify-builder-style.css" type="text/css" media="all">

<link rel="stylesheet" id="themify-animate-css" href="<?php echo base_url();?>css/animate.min.css" type="text/css" media="all">
<link rel="stylesheet" id="theme-style-css" href="<?php echo base_url();?>css/style.css" type="text/css" media="all">
<link rel="stylesheet" id="themify-media-queries-css" href="<?php echo base_url();?>css/media-queries.css" type="text/css" media="all">
<link rel="stylesheet" id="google-fonts-css" href="<?php echo base_url();?>files/" type="text/css" media="all">
<link rel="stylesheet" id="magnific-css" href="<?php echo base_url();?>css/lightbox.css" type="text/css" media="all">
<link rel="stylesheet" id="themify-icon-font-css" href="<?php echo base_url();?>css/font-awesome.min.css" type="text/css" media="all">
<script type="text/javascript" src="<?php echo base_url();?>files/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>files/jquery-migrate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>files/video.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>files/bigvideo.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var tbScrollHighlight = {"fixedHeaderSelector":"","scrollOffset":"0"};
/* ]]> */
</script>
<script type="text/javascript" src="<?php echo base_url();?>files/themify.scroll-highlight.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>files/audio-player.js"></script>

	
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

	
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
			</script>			
			<style type="text/css"></style>
			
		
<script type="text/javascript">

  function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Error: Username cannot be blank!");
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
	
	if(form.email.value == "")       {  alert("Error: Email cannot be blank!");       form.email.focus(); return false; }
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
	if(form.icnumberw.value == "")    
	{ alert("Error: Beneficiary last name cannot be blank!");   form.icnumberw.focus(); return false;}
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
	
	
	 if(confirm ( "Are you sure want to update all account information?"))
	  {  
	     alert(" All information has been updated succesfully ");
	     return true;
	  }
	 else
	 { 
	    return false;
		
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
	
                 <?php if($status=='Not'){ ?>
                 <div class="alert alert-error"    style=" width:30%; margin:0 auto; ">  
                              Account status : [?]  Not verified
                              </div>
                            <?php }if($status=='Verified'){ ?>
                            
                  <div class="alert alert-success"    style=" width:30%; margin:0 auto;">  
                              Account status : Verified
                              </div>
                              
                            <?php } ?>
<!-- layout-container -->
<div id="layout" class="pagewidth clearfix">	

		<!-- content -->
	<div id="content" class="clearfix">
    		
            <BR><BR>
				
							<div id="page-161" class="type-page" itemscope itemtype="http://schema.org/Article">
                            
                     
							<div class="page-inner clearfix" >
						<!-- page-title -->
			 				<h2>Account Information</h2> 
                             <BR>
                          
			<!-- /page-title -->
			<div class="page-content entry-content" itemprop="articleBody">
                                                  
		
                            
                              
                              
                              
                           
	
</div>
 <?php
echo "<div class='error_msg'>";
if (isset($error_message)) {
echo $error_message;
}
echo validation_errors();
echo "</div>";
?>
<div class="shortcode col3-1" style=" width:100%" >  <BR>
<B>
<?php   $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform", 'onsubmit' => "return checkForm(this)"); ?>
   
<?php echo form_open("user_authentication/updateAccountProcess/" . $id,$attributes); ?> 



IC Number @ Username : <BR>

<input type="text" value="<?php echo $username ?>" disabled> 
<input type="text" name="username" id="username" value="<?php echo $username ?>" hidden>
<BR> <BR>

Email : <BR>
<input type="email" value="<?php echo $email ?>"  disabled>  
<input type="email" name="email" id="email" value="<?php echo $email ?>"  hidden> <BR> <BR>

Password : <BR>
<input type="password" name="pwd1" id="password" placeholder="********"  > <BR> <BR>

Re-enter Password : <BR>
<input type="password" name="pwd2" id="password"  placeholder="********"  > <BR> <BR><BR>






                    

<BR>


	</B>					
  </div>     
  
  
  
  
  
  <h2>Profile Information</h2>                                    

<div class="shortcode col3-1" style=" width:100%" > <BR>
<B>
<BR>Name :<BR> 
<input type="text" id="firstname" name="firstname" value="<?php echo $firstname ?>"  onblur="myFunction()"> <BR><BR>
<input type="text" id="middlename" name="middlename" value="<?php echo $middlename ?>" onblur="myFunction()"> <BR><BR>
<input type="text" id="lastname" name="lastname" value="<?php echo $lastname ?>" onblur="myFunction()">  <BR>
                
<BR>IC Number : <BR> <input type="text" id="icnumber" name="icnumber" value="<?php echo $icnumber ?>" > <BR><BR> 
           <?php
		   $male_status = 'unchecked';
           $female_status = 'unchecked';
		   
		     if($gender == 'Male') 
			 { $male_status = 'checked';}
             else if($gender == 'Female') 
			 { $female_status = 'checked';}
		   
		   ?>
   <BR>Gender : <BR> <input type="radio" name="sex" value="Male" <?php print $male_status;  ?>  id="sex">Male
               <input type="radio" name="sex" value="Female" <?php print $female_status;  ?>  id="sex"  >Female 
                           <BR>

<BR>Phone Number : <BR> <input name="phone"  id="phone" maxlength="10" onkeypress="return isNumberKey(event)" type="text" value="<?php echo $phone ?>" > <BR>


<BR>Facebook URL ID : <BR> <input type="text" id="facebookurlid" name="facebookurlid" value="<?php echo $facebookurlid ?>"> <BR>

<BR>Date of birth : <BR> <input type="date" id="date" name="date"  value="<?php echo $date ?>" onChange="(this.type='date')"><BR><BR>

Address: <BR>
<input type="text" id="street1" name="street1" value="<?php echo $street1 ?>" onblur="myFunction()" >  <BR><BR>
<input type="text" id="street2" name="street2" value="<?php echo $street2 ?>" onblur="myFunction()">  <BR><BR>
<input type="text" id="district" name="district" value="<?php echo $district ?>" onblur="myFunction()">  <BR><BR>
<input name="postcode" maxlength="5" size="7" type="text" id="postcode" name="postcode" value="<?php echo $postcode ?>" onkeypress="return isNumberKey(event)" ><BR><BR>
<input type="text" id="state" name="state" value="<?php echo $state ?>" onblur="myFunction()" >  <BR><BR>
<input name="country" id="country" type="text"  value="<?php echo $country ?>"  onblur="myFunction()"/> <BR><BR><BR><BR>

</B>
</div>



<h2>Beneficiary Information</h2>                                    

<div class="shortcode col3-1" style=" width:100%" > <BR>
<B>

Name :<BR> 
<input type="text" id="firstnamew" name="firstnamew" value="<?php echo $firstnamew ?>" onblur="myFunction()" > <BR><BR>
<input type="text" id="middlenamew" name="middlenamew" value="<?php echo $middlenamew ?>" onblur="myFunction()"> <BR><BR>
<input type="text" id="lastnamew" name="lastnamew" value="<?php echo $lastnamew ?>" onblur="myFunction()">  <BR>

<BR>IC Number : <BR> <input type="text" id="icnumberw" maxlength="12" name="icnumberw" placeholder="911028017283" onkeypress="return isNumberKey(event)" value="<?php echo $icnumberw ?>" > <BR><BR> 
               <?php
		   $male_status = 'unchecked';
           $female_status = 'unchecked';
		   
		     if($genderw == 'Male') 
			 { $male_status = 'checked';}
             else if($genderw == 'Female') 
			 { $female_status = 'checked';}
		   
		   ?>  

                <BR>Gender : <BR> <input type="radio" name="sexw" value="Male" <?php print $male_status;  ?> id="sexw">Male
                           <input type="radio" name="sexw" value="Female" <?php print $female_status;  ?> id="sexw">Female <BR>

<BR>Phone Number : <BR> <input name="phonew"  id="phonew" maxlength="10" onkeypress="return isNumberKey(event)" type="text" value="<?php echo $phonew ?>"> <BR>

<BR>Email : <BR> <input name="emailw"  id="emailw" type="email" value="<?php echo $emailw ?>"> <BR>

<BR>Facebook URL ID : <BR> <input type="text" id="facebookurlidw" name="facebookurlidw" value="<?php echo $facebookurlidw ?>"> <BR>

<BR>Date of birth : <BR> <input type="date" id="datew" name="datew"  value="<?php echo $datew ?>" onChange="(this.type='date')"> <BR><BR>

Address: <BR>
<input type="text" id="street1w" name="street1w" value="<?php echo $street1w ?>" onblur="myFunction()">  <BR><BR>
<input type="text" id="street2w" name="street2w" value="<?php echo $street2w ?>" onblur="myFunction()">  <BR><BR>
<input type="text" id="districtw" name="districtw" value="<?php echo $districtw ?>" onblur="myFunction()">  <BR><BR>
<input name="postcodew" maxlength="5" type="text" id="postcodew" onkeypress="return isNumberKey(event)" value="<?php echo $postcodew ?>" ><BR><BR>
<input type="text" id="statew" name="statew" value="<?php echo $statew ?>" onblur="myFunction()">  <BR><BR>
<input name="countryw" id="countryw" type="text"   value="<?php echo $countryw ?>" onblur="myFunction()" /> <BR><BR><BR><BR>

</B>

<?php
echo form_submit('submit', 'Update'); 
echo form_reset('reset', 'Reset'); 
echo form_close();
?>    
 <BR><BR><BR>       
</div>


 


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
		
	

<script type="text/javascript" src="<?php echo base_url();?>files/jquery.form.min.js"></script>
<script type="text/javascript">

</script>
<script type="text/javascript" src="<?php echo base_url();?>files/scripts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>files/carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>files/themify.builder.module.plugins.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>files/waypoints.min.js"></script>
<script type="text/javascript">

</script>
<script type="text/javascript" src="<?php echo base_url();?>files/themify.builder.script.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>files/jquery.isotope.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>files/jquery.infinitescroll.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>files/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>files/jquery.inview.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var themifyScript = {"loadingImg":"http:\/\/themify.me\/demo\/themes\/postline\/wp-content\/themes\/postline\/images\/loading.gif","maxPages":"6","autoInfinite":"auto","lightbox":{"lightboxSelector":".lightbox","lightboxOn":true,"lightboxContentImages":false,"lightboxContentImagesSelector":".post-content a[href$=jpg],.page-content a[href$=jpg],.post-content a[href$=gif],.page-content a[href$=gif],.post-content a[href$=png],.page-content a[href$=png],.post-content a[href$=JPG],.page-content a[href$=JPG],.post-content a[href$=GIF],.page-content a[href$=GIF],.post-content a[href$=PNG],.page-content a[href$=PNG],.post-content a[href$=jpeg],.page-content a[href$=jpeg],.post-content a[href$=JPEG],.page-content a[href$=JPEG]","theme":"pp_default","social_tools":false,"allow_resize":true,"show_title":false,"overlay_gallery":false,"screenWidthNoLightbox":600,"deeplinking":false,"contentImagesAreas":".post, .type-page, .type-highlight, .type-slider","gallerySelector":".gallery-icon > a[href$=jpg],.gallery-icon > a[href$=gif],.gallery-icon > a[href$=png],.gallery-icon > a[href$=JPG],.gallery-icon > a[href$=GIF],.gallery-icon > a[href$=PNG],.gallery-icon > a[href$=jpeg],.gallery-icon > a[href$=JPEG]","lightboxGalleryOn":true},"lightboxContext":"#pagewrap","isTouch":"false","baseUrl":"http:\/\/themify.me\/demo\/themes\/postline\/","isPrettyPermalink":"1","timeLineAjaxUrl":"http:\/\/themify.me\/demo\/themes\/postline\/wp-admin\/admin-ajax.php","timeline_load_nonce":"d13ee7771d","audioPlayer":"http:\/\/themify.me\/demo\/themes\/postline\/wp-content\/themes\/postline\/js\/player.swf","context":"archive","query_page_id":""};
/* ]]> */
</script>
<script type="text/javascript" src="<?php echo base_url();?>files/themify.script.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>files/themify.gallery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>files/lightbox.js"></script>

<!--<script>
	jQuery(window).load(function(){ jQuery(window).resize(); });
</script>-->




</body></html>