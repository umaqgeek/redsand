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

<!--  design  -->
<link rel='stylesheet' id='theme-style-css'  href='<?php echo base_url(); ?>css/style.css' type='text/css' media='all' />
<!--  responsive  -->
<link rel='stylesheet' id='themify-media-queries-css'  href='<?php echo base_url(); ?>css/media-queries.css' type='text/css' media='all' />

<link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Signika%3A400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-css'  href='<?php echo base_url(); ?>css/lightbox.css' type='text/css' media='all' />
<!--  font -->
<link rel='stylesheet' id='themify-icon-font-css'  href='http://themify.me/demo/themes/postline/wp-content/themes/postline/themify/fontawesome/css/font-awesome.min.css?ver=2.1.8' type='text/css' media='all' />

<!--<link rel='stylesheet' href="<?php echo base_url(); ?>css/bootstrap.css" type='text/css' media='all' />
<link rel='stylesheet' href="<?php echo base_url(); ?>css/bootstrap.min.css" type='text/css' media='all' />
<link rel='stylesheet' href="<?php echo base_url(); ?>css/bootstrap-responsive.css" type='text/css' media='all' />
<link rel='stylesheet' href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" type='text/css' media='all' />-->

<script type='text/javascript' src="<?php echo base_url(); ?>js/bootstrap.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<?php if($msg)
	{
		echo "<script>alert('Sorry, Please Login Thank You!')</script>";
	}
	?>

	
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
			</script>			<!--Themify Styling-->
			<style type="text/css"></style>
			<!--/Themify Styling-->
            
           
			
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
    
    <script>
	function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
  }
	</script>
</head>




<body class="page page-id-161 page-template-default skin-default webkit not-ie default_width sidebar-none no-home no-touch">


	
	<div id="body" class="clearfix"> 
    
	




<!-- layout-container -->
<div id="layout" class="pagewidth clearfix">	

<?php if($this->session->flashdata('updatepassword')) : ?>
 <div class="alert alert-success" style="width:auto; margin:0 auto; "><?php echo $this->session->flashdata('updatepassword'); ?> </div>
<?php endif;?>

<?php if($this->session->flashdata('resetpassword')) : ?>
 <div class="alert alert-success" style="width:auto; margin:0 auto; "><?php echo $this->session->flashdata('resetpassword'); ?> </div>
<?php endif;?>

<?php if($this->session->flashdata('errorlogin')) : ?>
 <div class="alert alert-error" style="width:auto; margin:0 auto; "><?php echo $this->session->flashdata('errorlogin'); ?> </div>
<?php endif;?>

<?php if($this->session->flashdata('registered')) : ?>
 <div class="alert alert-success" style="width:auto; margin:0 auto;"><?php echo $this->session->flashdata('registered'); ?> </div>
<?php endif;?>


		<!-- content -->
	<div id="content" class="clearfix">
    		
				<BR><BR>
							<div id="page-161" class="type-page" itemscope itemtype="http://schema.org/Article">
							<div class="page-inner clearfix">
                            
                            
						<!-- page-title -->
			<!-- <h2 class="page-title" itemprop="name">Welcome to DinarPal Co-Operative</h2>-->
<h2>Log In</h2>
				<BR>
			<!-- /page-title -->

<?php
if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>

<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>
<?php echo form_open('user_authentication/user_login_process'); ?>
<?php
echo "<div class='error_msg'>";
if (isset($error_message)) {
echo $error_message;
}
echo validation_errors();
echo "</div>";
?>

<div class="shortcode col3-1" style=" width:100%" >
<B>
IC Number  : <BR>
<input type="text" name="username" id="username" placeholder="Please enter your IC Number. Eg: 9211026018922" onkeypress="return isNumberKey(event)" maxlength="12"required /> <BR><BR>

Password  : <BR>
  <input type="password" name="password" id="password" placeholder="Please enter your password. Eg: p@ssw0rD"  required /> <BR><BR>
  <link href="<?php echo base_url().'assets/css/button.css' ?>" rel="stylesheet"><button type="submit" class="button " data-toggle="modal" value=" Log In " name="submit" >Log In</button></link><!--<input type="submit" value=" Log In " name="submit" />--> 
  <link href="<?php echo base_url().'assets/css/button.css' ?>" rel="stylesheet"><button type="reset" class="button " data-toggle="modal" value=" Reset " name="reset" >Reset</button></link><!--<input type="reset" value=" Reset " name="reset"/>-->
  
  
<BR><BR>
Please type your IC Number and Password
<BR><BR>
 <?php echo anchor('main/registerPage','Create Account'); ?> &nbsp;&nbsp;&nbsp;
 <?php echo anchor('main/forgotPassword','Forgot Password?'); ?> &nbsp;&nbsp;&nbsp;
<BR><BR>
</div>

<?php echo form_close(); ?>
<BR><BR><BR>
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