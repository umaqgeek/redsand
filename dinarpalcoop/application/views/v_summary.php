
<!doctype html>
<html itemscope="itemscope" itemtype="http://schema.org/WebPage" lang="en-US">
<head>
<meta charset="UTF-8">





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
<script type='text/javascript' src='js/bigvideo.js'></script>

	
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
	
    
    
    
</head>

<body class="page page-id-161 page-template-default skin-default webkit not-ie default_width sidebar-none no-home no-touch">


	
	
	<div id="body" class="clearfix"> 
	

<!-- layout-container -->
<div id="layout" class="pagewidth clearfix" style="width:90%;">	

		<!-- content -->
	<div id="content" class="clearfix" >
    		
				    
							<div id="page-161" class="type-page" itemscope itemtype="http://schema.org/Article">
                            
                     
							<div class="page-inner clearfix" >
						<!-- page-title -->
			 				<h2>Summary DinarPal Member</h2>
			
                  <BR>
			<!-- /page-title --> 
             
         
 
     <?php 
	 $not=0; $verified=0; $member=0; $male=0; $female=0; $actives=0; $notactive=0; $progress=0;
	 foreach($allmembers as $data){?>
   
   
        
         <?php 
		 
		    
			  
		      if($data->user_level==2) 
			  {
			    $member++;
	          }
			  if($data->gender=='Male' && $data->user_level==2)
			  {
					$male++;
			  }
			  if($data->gender=='Female' && $data->user_level==2)
			  {
					$female++;
			  }
			  
		      if($data->status=='Not' && $data->user_level==2) 
		      {
		        $not++;
		      }
			  if($data->status=='Verified' && $data->user_level==2) 
		      {
		        $verified++; 
		      }
			  
			  if($data->active=="Not Active" && $data->user_level==2) 
		      {
		        $notactive++;
		      }
			  if($data->active=='In Progres' && $data->user_level==2) 
		      {
		        $progress++; 
		      }
			  
			  if($data->active=='Active' && $data->user_level==2) 
		      {
		        $actives++; 
		      }
	    ?>	
       
     <?php }?>  
 
      
		
           
			<div class="page-content entry-content" itemprop="articleBody" >
		
	
</div>
<B>

<div class="shortcode col3-1" >
  <BR>
  Current total of Dinarpal Member :   <?php echo $member; ?> 
  <BR>
  Male Member :  <?php echo $male; ?> 
  <BR>
  Female Member :   <?php echo $female; ?> 
  <BR>
  </div>
  
  <div class="shortcode col3-1"> 
  <BR>
  (Account status) is not verified :  <?php echo $not; ?>
  <BR>
  (Account status) is verified :   <?php echo $verified; ?>
  <BR>
  <BR>
    <BR>
  (Active status) is not active :   <?php echo $notactive; ?>
    <BR>
  (Active status) is in progress :   <?php echo $progress; ?>
    <BR>
  (Active status) is active :   <?php echo $actives; ?>
  </div>
  
  <div class="shortcode col3-1" >
  <BR>
  Sabah :
  <BR>
  Sarawak :
  <BR>
  Labuan :
  <BR>
  Selangor :
  <BR>
  Putrajaya :
  <BR>
  Kuala Lumpur :
  <BR>
  Johor :
  <BR>
  Melaka :
  <BR>
  Negeri Sembilan :
  <BR>
  Pahang :
  <BR>
  Terengganu :
  <BR>
  Kelantan :
  <BR>
  Kedah :
  <BR>
  Perak :
  <BR>
  Perlis :
  <BR>
  Pulau Pinang :
  <BR>
  </div>
  
</B>


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