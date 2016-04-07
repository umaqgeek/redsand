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
</script>
<script>
	$('tr:odd'), CSS('background'), ('#e3e3e3');
</script>


			<!--Themify Styling-->

<style type="text/css"></style>

<style>

#container{
	width: 100%;
	margin: auto;
}

table{
	width: 65%;
	margin-bottom: 1px;
}

tr:nth-child(even) {
    background-color: #eeeeee;
}

tr:nth-child(odd) {
   background-color: #ffffff;
}

td{
	text-align: left;
	padding: 5px;
  	font-size: 11px;
}

td:last-child{
	border-right: none;
}

th{

  background-color: #cac9c9;
  height: 25px;
  color: white;
  font-size: 11px;
}

</style>
		     
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
<h3>General Information of DinarPal Member</h3>
			
                  <BR>
			<!-- /page-title -->

<p><a href="index.php"></a></p>
<div>

<div id="container">
 
<center><a href="<?php echo site_url('pag/edit/'.$person->id_login) ?>">Edit</a></center>
<br>
<center><table border=1 >

  <tr bgcolor="#b5b5b5">
    <th colspan="2" align="left"><font color="black">GENERAL INFORMATION</font></th>
  </tr>
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Username :</font></th>
    <td align="left"><font color="black"><?php echo $person->user_name; ?></font></td>
  </tr>
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">IC Number :</font></th>
    <td align="left"><font color="black"><?php echo $person->icnumber; ?></font></td>
  </tr> 
   <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">First Name :</font></th>
    <td align="left"><font color="black"><?php echo $person->firstname; ?></font></td>
  </tr>
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Middle Name :</font></th>
    <td align="left"><font color="black"><?php echo $person->middlename; ?></font></td>
  </tr>
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Last Name :</font></th>
    <td align="left"><font color="black"><?php echo $person->lastname; ?></font></td>
  </tr> 
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Status :</font></th>
    <td align="left"><font color="black"><?php echo $person->status; ?></font></td>
  </tr>
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Password :</font></th>
    <td align="left"><font color="black"><?php echo $person->user_password; ?></font></td>
  </tr>
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">E-mail :</font></th>
    <td align="left"><font color="black"><?php echo $person->user_email; ?></font></td>
  </tr>
   <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Facebook URL ID :</font></th>
    <td align="left"><font color="black"><?php echo $person->facebookurlid; ?></font></td>
  </tr>
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Street Line 1 :</font></th>
    <td align="left"><font color="black"><?php echo $person->street1; ?></font></td>
  </tr> 
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Street Line 2 :</font></th>
    <td align="left"><font color="black"><?php echo $person->street2; ?></font></td>
  </tr> 
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">District :</font></th>
    <td align="left"><font color="black"><?php echo $person->district; ?></font></td>
  </tr>
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Postcode :</font></th>
    <td align="left"><font color="black"><?php echo $person->postcode; ?></font></td>
  </tr>	
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">State :</font></th>
    <td align="left"><font color="black"><?php echo $person->state; ?></font></td>
  </tr>
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Country :</font></th>
    <td align="left"><font color="black"><?php echo $person->country; ?></font></td>
  </tr>
  <tr bgcolor="#b5b5b5">
    <th colspan="2" align="left"><font color="black">BENEFICIARY INFORMATION</font></th>
  </tr>
   <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">First Name :</font></th>
    <td align="left"><font color="black"><?php echo $person->firstnamew; ?></font></td>
  </tr>
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Middle Name :</font></th>
    <td align="left"><font color="black"><?php echo $person->middlenamew; ?></font></td>
  </tr>
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Last Name :</font></th>
    <td align="left"><font color="black"><?php echo $person->lastnamew; ?></font></td>
  </tr>
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">E-mail :</font></th>
    <td align="left"><font color="black"><?php echo $person->emailw; ?></font></td>
  </tr>
   <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Facebook URL ID :</font></th>
    <td align="left"><font color="black"><?php echo $person->facebookurlidw; ?></font></td>
  </tr>
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Street Line 1 :</font></th>
    <td align="left"><font color="black"><?php echo $person->street1w; ?></font></td>
  </tr> 
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Street Line 2 :</font></th>
    <td align="left"><font color="black"><?php echo $person->street2w; ?></font></td>
  </tr> 
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">District :</font></th>
    <td align="left"><font color="black"><?php echo $person->districtw; ?></font></td>
  </tr>
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Postcode :</font></th>
    <td align="left"><font color="black"><?php echo $person->postcodew; ?></font></td>
  </tr>	
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">State :</font></th>
    <td align="left"><font color="black"><?php echo $person->statew; ?></font></td>
  </tr>
  <tr bgcolor="#b5b5b5">
    <th align="right"><font color="black">Country :</font></th>
    <td align="left"><font color="black"><?php echo $person->countryw; ?></font></td>
  </tr> 
</table></center>
<br>
</div>
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