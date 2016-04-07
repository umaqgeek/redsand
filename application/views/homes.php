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

	   
	<BR><BR>
    
    
	<div id="body" class="clearfix"> 
 


<!-- layout-container -->
<div id="layout" class="pagewidth clearfix">	


		<!-- content -->
	<div id="content" class="clearfix">
    
  					

							<div id="page-161" class="type-page" itemscope itemtype="http://schema.org/Article">
                            
               
							<div class="page-inner clearfix">
                            
                            
						<!-- page-title -->
			<!-- <h2 class="page-title" itemprop="name"> Welcome to DinarPal Co-Operative</h2>-->

	
<?php
echo "<div class='error_msg'>";
if (isset($error_message)) {
echo $error_message;
}
echo validation_errors();
echo "</div>";
?>
  
  <div class="shortcode col3-1" style="width:60%;">
  <h2>Welcome to Portal Dinarpal Coop</h2>
		
  <?php echo "<BR>Welcome, <b id='welcome'><i>" . $firstname . " ". $middlename . " ". $lastname . "</i></b><BR><BR>"; ?>    
                                         <?php 
										   if($userlevel=='0') 
										     echo "You as <B>Admin</B><BR><BR>";
										   else if($userlevel=='1') 
										     echo "You as <B>Manager</B><BR><BR>";
										   else if($userlevel=='2') 
										     echo "Your as <B>Dinarpal Coop Member</B><BR><BR>"; 
										 
								
										 ?>
                                         
                                         <?php "<BR>"; ?>
Date&nbsp;:&nbsp;<B> <BR> 
 <script language="javascript">
	 var now = new Date();
	 
	 
	 var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December'); 
	 var date = ((now.getDate()<10)?"0":"")+now.getDate();
	 
	 function fourdigits(number)
	 {
		 return (number <1000)?number+1900:number;
     }
	 today = date+" "+months[now.getMonth()]+" "+(fourdigits(now.getYear()));
	 document.write(today);
	</script>
    </B>

  <?php echo "<BR><BR>";?>  
  
  Time : <B> <div id="clockDisplay"> </div></B>
    <script type="text/javascript" language="javascript">
function renderTime() 
{
	var currentTime = new Date();
	var diem = "am";
	var h = currentTime.getHours();
	var m = currentTime.getMinutes();
	var s = currentTime.getSeconds();
	
	
	if(h == 0)
	{h=12;}
	else if(h>12)
	{h=h-12;
	 diem = "pm";}
	 
	if(h<10)
	{h="0"+h}
	
	if(m<10)
	{m="0"+m}
	
	if(s<10)
	{s="0"+s}
	
	var myClock = document.getElementById('clockDisplay');
	myClock.textContent = h +":"+m+":"+s+" "+diem;
	
	setTimeout('renderTime()',1000);
}
renderTime();
</script>  
<BR>

<input type="text" id="active" name="active" size="23" value="Active" hidden >


Status :  
            <?php 
					if($active=='Active') 
						echo "<B style='color:#468847;'>Active</B>";
					else if($active=='Not Active') 
						echo "<B style='color:#b94a48;'>Not Active</B>";					
			?>

<BR>
</div>

<div class="shortcode col3-1" >
<BR><BR><BR><BR>
<img src="<?php echo base_url(); ?>assets/images/kodinar.png" width="400px" height="900px"/>
   
<BR><BR>

</div>



</div>
            
               
			<!-- /page-title -->
           





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


</body>
</html>