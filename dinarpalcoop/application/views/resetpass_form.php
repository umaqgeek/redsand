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

<!--  design  -->
<link rel='stylesheet' id='theme-style-css'  href='<?php echo base_url(); ?>css/style.css' type='text/css' media='all' />
<!--  responsive  -->
<link rel='stylesheet' id='themify-media-queries-css'  href='<?php echo base_url(); ?>css/media-queries.css' type='text/css' media='all' />

<link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Signika%3A400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-css'  href='<?php echo base_url(); ?>css/lightbox.css' type='text/css' media='all' />
<!--  font -->
<link rel='stylesheet' id='themify-icon-font-css'  href='http://themify.me/demo/themes/postline/wp-content/themes/postline/themify/fontawesome/css/font-awesome.min.css?ver=2.1.8' type='text/css' media='all' />

   
	
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
	function isNumberKey(evt)
	{
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



<?php if($this->session->flashdata('notic')) : ?>
 <div class="alert alert-error" style="width:auto; margin:0 auto; "><?php echo $this->session->flashdata('notic'); ?> </div>
<?php endif;?>

<?php if($this->session->flashdata('haveic')) : ?>
 <div class="alert alert-success" style="width:auto; margin:0 auto;"><?php echo $this->session->flashdata('haveic'); ?> </div>
<?php endif;?>


		<!-- content -->
	<div id="content" class="clearfix">
    		
				<BR><BR>
							<div id="page-161" class="type-page" itemscope itemtype="http://schema.org/Article">
							<div class="page-inner clearfix">
                            
                            
						<!-- page-title -->
			<!-- <h2 class="page-title" itemprop="name">Welcome to DinarPal Co-Operative</h2>-->
				<h2>Forgot Password</h2>
				<BR>
			<!-- /page-title -->
<script src="<?php echo base_url(); ?>assets/grocery_crud/js/jquery-1.11.1.js"></script> 
<script>
$(document).ready(function(){
  $("#form_reser_pass").submit(function(event){
	  event.preventDefault();
	  
	$.ajax({
	  type: "POST",
	  url: "<?php echo site_url('user_authentication/update_forgot_password'); ?>",
	  data: {
		 icnumber: $("#icnumber").val(), 
      },
	  success: function(data) {
		 
		  if(data=='Yes')
		  {
			  alert("For this IC Number is exist");
			  
			  $.ajax ({
                       type:"POST",
                       url:"<?php echo site_url('user_authentication/forgot_password'); ?>",
                       data: {
						    icnumber: $("#icnumber").val(), 
					   },
                       success: function(msg) {
		                  $("#paparan").html( msg );
	                   }
              });  
		  }
		  else if(data=='No')
		  {
			  alert("For this IC Number does not exist. Sorry, please try it again"); 
			  location.reload();
		  }
		   
	  }
	  
	});
  });
});	

function refreshPage() {
    location.reload();
}
</script>       



<form action='#' id='form_reser_pass'>




<div class="shortcode col3-1" style=" width:100%" >
<B>
IC Number  : <BR>

<input type="text" name="icnumber" id="icnumber" placeholder="921102601892" onkeypress="return isNumberKey(event)" maxlength="12" required /> <BR><BR>

   <button type="submit" value="Submit">Check</button>
  <button type="reset" value="Reset" onclick="refreshPage()">Reset</button>
  
 
  <BR>
 <div id="paparan"></div>
  <BR>

 
  <BR><BR>
  
<BR><BR>


</div>

</form>
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