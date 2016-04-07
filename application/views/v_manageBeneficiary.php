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
			
		
</head>

<body class="page page-id-161 page-template-default skin-default webkit not-ie default_width sidebar-none no-home no-touch">


	
	
	<div id="body" class="clearfix"> 
	

<!-- layout-container -->
<div id="layout" class="pagewidth clearfix">	

		<!-- content -->
	<div id="content" class="clearfix">
    		
            <BR><BR>
				
							<div id="page-161" class="type-page" itemscope itemtype="http://schema.org/Article">
                            
                     
							<div class="page-inner clearfix" >
						<!-- page-title -->
			 				<h2>Beneficiary Information</h2>
			<!-- /page-title -->
			<div class="page-content entry-content" itemprop="articleBody">
	
    
    <script type="text/javascript">

  function checkForm(form)
  {
	
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
	
	
	if(confirm ( "Are you sure want to update  beneficiary information?"))
	  {  
	     alert(" Beneficiary information updated succesfully ");
	     return true;
	  }
	 else
	 { 
	    return false;
		
	 }
	
   
	
  }
  
  function myFunction() {
   
	
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
    	
	
</div>

<div class="shortcode col3-1" style=" width:100%" > <BR>
<B>

<?php   $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform", 'onsubmit' => "return checkForm(this)"); ?>
   
<?php echo form_open("user_authentication/updateBeneficiaryProcess/" . $id,$attributes); ?> 


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


<?php
echo form_submit('submit', 'Update'); 
echo form_reset('reset', 'Reset'); 
echo form_close();
?>                                    

<BR>


	</B>					
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