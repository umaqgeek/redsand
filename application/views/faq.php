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

  
<script>      

          function isSupportTransition() 
          {
              var b = document.body || document.documentElement,
                  s = b.style,
                  p = 'transition';

              if (typeof s[p] == 'string') 
                { return true;}

              // Tests for vendor specific prop
              var v = ['Moz', 'webkit', 'Webkit', 'Khtml', 'O', 'ms'];
                  p = p.charAt(0).toUpperCase() + p.substr(1);

              for (var i=0; i<v.length; i++) 
              {
                  if (typeof s[v[i] + p] == 'string') 
                    { return true; }
              }
              return false;
          }
            
          if ( isSupportTransition() ) 
          {
              document.documentElement.className += " csstransitions";  
          }
    
</script>

<script> 

          ( function( $ ) 
            {
                $( document ).ready(function() 
                  {
                      $('#cssmenu ul ul li:odd').addClass('odd');
                      $('#cssmenu ul ul li:even').addClass('even');
                      $('#cssmenu > ul > li > a').click(function() 
                        {
                            $('#cssmenu li').removeClass('active');
                            $(this).closest('li').addClass('active'); 
                            
                            var checkElement = $(this).next();
                            
                            if((checkElement.is('ul')) && (checkElement.is(':visible'))) 
                              {
                                  $(this).closest('li').removeClass('active');
                                  checkElement.slideUp('normal');
                              }
                            if((checkElement.is('ul')) && (!checkElement.is(':visible'))) 
                              {
                                  $('#cssmenu ul ul:visible').slideUp('normal');
                                  checkElement.slideDown('normal');
                              }
                            if($(this).closest('li').find('ul').children().length == 0) 
                              {
                                  return true;
                              }  
                            else 
                              {
                                  return false;   
                              }     
                        });     
                  });
            } )( jQuery );
    
</script>


<style>

#cssmenu,
#cssmenu ul,
#cssmenu li,
#cssmenu a {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  font-weight: normal;
  text-decoration: none;
  line-height: 2;
  font-family: 'Gisha', sans-serif;
  font-size: 14px;
  position: relative;
}
#cssmenu a {
  line-height: 1.3;
  padding: 6px 15px;
}
#cssmenu {
  width: 100%;
}
#cssmenu > ul > li {
  cursor: pointer;
  background: #000;
  border-bottom: 1px solid #4c4e53;
}
#cssmenu > ul > li:last-child {
  border-bottom: 1px solid #3e3d3c;
}
#cssmenu > ul > li > a {
  font-size: 16px;
  display: block;
  color: #ffffff;
  text-shadow: 0 1px 1px #000;
  background: #64676e;
  background: -moz-linear-gradient(#64676e 0%, #4c4e53 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #64676e), color-stop(100%, #4c4e53));
  background: -webkit-linear-gradient(#64676e 0%, #4c4e53 100%);
  background: linear-gradient(#64676e 0%, #4c4e53 100%);
}
#cssmenu > ul > li > a:hover {
  text-decoration: none;
}
#cssmenu > ul > li.active {
  border-bottom: 1px solid #ffffff;
}
#cssmenu > ul > li.active > a {
  background: #d2d7da;
  background: -moz-linear-gradient(#d2d7da 0%, #ffffff 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #d2d7da), color-stop(100%, #ffffff));
  background: -webkit-linear-gradient(#d2d7da 0%, #ffffff 100%);
  background: linear-gradient(#d2d7da 0%, #ffffff 100%);
  color: #4e5800;
  text-shadow: 0 1px 1px #ffffff;
}
#cssmenu > ul > li.has-sub > a:after {
  content: "";
  position: absolute;
  top: 10px;
  right: 10px;
  border: 5px solid transparent;
  border-left: 5px solid #ffffff;
}
#cssmenu > ul > li.has-sub.active > a:after {
  right: 14px;
  top: 12px;
  border: 5px solid transparent;
  border-top: 5px solid #4e5800;
}
/* Sub menu */
#cssmenu ul ul {
  padding: 0;
  display: none;
}
#cssmenu ul ul a {
  background: #efefef;
  display: block;
  color: #000000;
  font-size: 13px;
}
#cssmenu ul ul li {
  border-bottom: 1px solid #c9c9c9;
}
#cssmenu ul ul li.odd a {
  background: #e5e5e5;
}
#cssmenu ul ul li:last-child {
  border: none;
}
     
</style>
      
    
</head>

<body class="page page-id-161 page-template-default skin-default webkit not-ie default_width sidebar-none no-home no-touch">

  
<div id="body" class="clearfix"> 
  

<!-- layout-container -->
<div id="layout" class="pagewidth clearfix">  
<BR><BR>
    <!-- content -->
    <div id="content" class="clearfix">
        
        
        <div id="page-161" class="type-page" itemscope itemtype="http://schema.org/Article">
        <div class="page-inner clearfix">
            <!-- page-title -->
       
        <!--<h1 class="page-title" itemprop="name">SEJARAH</h1>-->
        
      <!-- /page-title -->

<div class="page-content entry-content" itemprop="articleBody">

<img style="border-radius:15px" src="<?php echo base_url(); ?>assets/images/faqpic5.PNG" width="940" height="300"/>

<BR><BR><BR>
<div id='cssmenu'>

        <ul>
   
            <!--<li class='active'><a href='#'><span>Home</span></a></li>-->
   
            <li class='has-sub'><a href='#'><span><b>Who own this?</b></span></a>
      
                <ul>
         
                    <li align="justify"><a href='#'><span><b>Dinarpal Coop is own by Al-DinarPal Group.</b></span></a></li>
         
                    <!--<li><a href='#'><span>Product 2</span></a></li>
         
                    <li class='last'><a href='#'><span>Product 3</span></a></li>-->
      
                </ul>
   
            </li>
   
            <li class='has-sub'><a href='#'><span><b>What is Dinarpal Coop?</b></span></a>
      
                <ul>
     
                    <li align="justify"><a href='#'><span><b>Dinarpal Coop is banking-like platform for Dinar (gold coin) and Dirham (silver coin).</b></span></a></li>
         <!--<li class='last'><a href='#'><span>Contact</span></a></li>-->
      
                </ul>
    
            </li>

            <li class='has-sub'><a href='#'><span><b>Dinarpal Coop is a bank?</b></span></a>
      
                <ul>
         
                    <li align="justify"><a href='#'><span><b>No. Dinarpal Coop is not a bank. Dinarpal Coop prefer to be Baitul-Mal in the near future.</b></span></a></li>
         
                    <!--<li><a href='#'><span>Product 2</span></a></li>
         
                    <li class='last'><a href='#'><span>Product 3</span></a></li>-->
      
                </ul>
   
            </li>

            <li class='has-sub'><a href='#'><span><b>How Dinarpal Coop can benefit me?</b></span></a>
      
                <ul>
         
                    <li align="justify"><a href='#'><span><b>Dinarpal Coop can protect your wealth by offering you to buy at least 0.5 gram of gold bar every month and keep it in Dinarpal Coop secure vault. It also can off er you to start purchase things using dinar and dirham among members, Remain your purchasing power and inflation-free. DinarPal also can offer you to get some short-term loan without interest.</b></span></a></li>
         
                    <!--<li><a href='#'><span>Product 2</span></a></li>
         
                    <li class='last'><a href='#'><span>Product 3</span></a></li>-->
      
                </ul>
   
            </li>

            <li class='has-sub'><a href='#'><span><b>Does Dinarpal Coop trying to be a alternative currency?</b></span></a>
      
                <ul>
         
                    <li align="justify"><a href='#'><span><b>No.We just offer an alternative for medium of exchange. Our main currency is still MYR.</b></span></a></li>
         
                    <!--<li><a href='#'><span>Product 2</span></a></li>
         
                    <li class='last'><a href='#'><span>Product 3</span></a></li>-->
      
                </ul>
   
            </li>

            <li class='has-sub'><a href='#'><span><b>How secure we are?</b></span></a>
      
                <ul>
         
                    <li align="justify"><a href='#'><span><b>In sha Allah you will be safe with us. We provide the 24/7 security services with close monitoring and every gram is fully insured.For the security of your information during transmission is ensured. We guarantee secure data transmission by using Secure Sockets Layer (SSL short) protocol. With SSL, your personal information you enter on our Web site will be encrypted and can thus be read only by us. The SSL encryption protocol has been established as the market standard for data over the Internet and is continuously being developed.</b></span></a></li>
         
                    <!--<li><a href='#'><span>Product 2</span></a></li>
         
                    <li class='last'><a href='#'><span>Product 3</span></a></li>-->
      
                </ul>
   
            </li>

            <li class='has-sub'><a href='#'><span><b>How about Cooperative Commission of Malaysia (CCM) approval?</b></span></a>
      
                <ul>
         
                    <li align="justify"><a href='#'><span><b>We got an approval from Cooperative Commission of Malaysia (CCM) under the Ministry of Domestic Trade, Co-Operatives and Consumerism of Malaysia to operate Ar-Rahnu involved in the approval process.</b></span></a></li>
         
                    <!--<li><a href='#'><span>Product 2</span></a></li>
         
                    <li class='last'><a href='#'><span>Product 3</span></a></li>-->
      
                </ul>
   
            </li>

             <li class='has-sub'><a href='#'><span><b>How about collecting deposit from public?</b></span></a>
      
                <ul>
         
                    <li align="justify"><a href='#'><span><b>We got an approval from Cooperative Commission of Malaysia to collect deposit from public and it already clearly spell out in our cooperative by-law.</b></span></a></li>
         
                    <!--<li><a href='#'><span>Product 2</span></a></li>
         
                    <li class='last'><a href='#'><span>Product 3</span></a></li>-->
      
                </ul>
   
            </li>

             <li class='has-sub'><a href='#'><span><b>Who monitor your business operation on behalf of public?</b></span></a>
      
                <ul>
         
                    <li align="justify"><a href='#'><span><b>We have internal audit, external audit and supervision by Cooperative Commission of Malaysia.</b></span></a></li>
         
                    <!--<li><a href='#'><span>Product 2</span></a></li>
         
                    <li class='last'><a href='#'><span>Product 3</span></a></li>-->
      
                </ul>
   
            </li>
   

            <!--<li class='last'><a href='#'><span>Contact</span></a></li>-->

        </ul>

        <BR>

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