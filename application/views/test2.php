<!DOCTYPE html>
<!-- saved from url=(0063)http://themify.me/demo/themes/postline/2012/08/02/sample-quote/ -->
<!--<html itemscope="itemscope" itemtype="http://schema.org/Article" lang="en-US" class="js csstransitions csstransforms csstransforms3d"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">-->
<meta charset="UTF-8">
<!-- wp_header -->

<title>Post</title>
<meta name="robots" content="noindex,follow">
<link rel="canonical" href="<?php echo base_url();?>files/Sample Quote - Postline.html">
<!-- / Yoast WordPress SEO plugin. -->

<script src="<?php echo base_url();?>files/jquery.min.js"></script>
<link rel="stylesheet" id="contact-form-7-css" href="<?php echo base_url();?>css/style.css" type="text/css" media="all">
<link rel="stylesheet" id="math-captcha-frontend-css" href="<?php echo base_url();?>files/frontend.css" type="text/css" media="all">
<link rel="stylesheet" id="themify-framework-css" href="<?php echo base_url();?>files/themify.framework.css" type="text/css" media="all">

<link rel="stylesheet" id="themify-media-queries-css" href="<?php echo base_url();?>files/media-queries.css" type="text/css" media="all">
<link rel="stylesheet" id="google-fonts-css" href="<?php echo base_url();?>files/css" type="text/css" media="all">
<link rel="stylesheet" id="magnific-css" href="<?php echo base_url();?>files/lightbox.css" type="text/css" media="all">
<link rel="stylesheet" id="themify-icon-font-css" href="<?php echo base_url();?>files/font-awesome.min.css" type="text/css" media="all">

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
	<script>			
			function isSupportTransition() {
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
			function hideOrNot(x)
			{
	 			var element = document.getElementById(x);
	 			if(element.style.display == "block")
				{
					element.style.display = "none";
				}
				else
				{
					element.style.display = "block";
				}		
			}			
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
            	$('.readMore').css('display',"block");
            	$('.readMore').css('position',"static");
            	$('.link').css('display',"none");
        	});		
	</script>
				<!--Themify Styling-->
	<style type="text/css">
	div.readMore {
		display:block;
	}
	
	</style>
			<!--/Themify Styling-->
		
</head>

<body class="single single-post postid-<?php echo $id; ?> single-format-aside skin-default webkit not-ie default_width sidebar1 no-home no-touch">

<div id="pagewrap" class="hfeed site">	
	<div id="body" class="clearfix"> 
	


<!-- layout-container -->
<div id="layout" class="pagewidth clearfix">

		<!-- content -->
	<div id="content" class="list-post"> 
    	        
        		<article id="post-<?php echo $id; ?>" class="post-<?php echo $id; ?> post type-post status-publish format-aside hentry category-quote clearfix cat-11 has-post-title has-post-date has-post-category has-post-tag has-post-comment has-post-author">
        	            
			<div class="post-inner">		
		
		<!-- Title, post icon, post date -->
		<span class="post-icon"></span>
					<time datetime = "<?php echo $y.'-'.$m.'-'.$d; ?>" class="post-date entry-date updated" itemprop="datePublished">
				<span><?php echo $month.' '.$d.' , '.$y?></span>
			</time>
		<h1 class="post-title entry-title" itemprop="name"><a href="#" title="<?php echo $t ?>"><?php echo $t ?></a></h1>
										<!-- / Title, post icon, post date -->
<!-- quote-content -->
<div class="content">
	
	<div class="entry-content" itemprop="articleBody">

		
		<p><?php echo $content ?></p>
<div id="themify_builder_content-<?php echo $id ?>" data-postid="<?php echo $id ?>" class="themify_builder_content themify_builder_content-<?php echo $id ?> themify_builder themify_builder_front">
	</div>
<!-- /themify_builder_content -->	
	
	</div><!-- /.entry-content -->
</div>
<!-- /quote-content -->

<!-- quote-author -->
<p class="quote-author">
	— <?php echo $author ?> —</p>
<!-- /quote-author -->
		<!-- /post-dot -->
		<!-- /post-arrow -->
		<!-- /.post-nav -->
<!-- /.commentwrap -->
					</div>
			<!-- /.post-inner -->
            
            		</article>
		<!-- /.post -->
                
        	</div>
	<!-- /content -->
    


<!-- /#sidebar -->

</div>
<!-- /layout-container -->
	
<!-- Missing: missing -->
		</div>
	<!-- /body -->
		
	</div>
</div>
<!-- /#pagewrap -->


<!-- wp_footer -->

</body></html>