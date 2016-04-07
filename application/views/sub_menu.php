<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/back.css" rel="stylesheet" type="text/css" />
<!-- Demo page js and css files -->
		<!--<link rel="stylesheet" type="text/css" href="demo/demo.css" media="screen" />-->
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="<?php echo base_url();?>css/highlight.pack.js"></script>
		<script src="<?php echo base_url();?>css/fixture.js"></script>
		<script src="<?php echo base_url();?>css/demo.js"></script>

		<!-- Add JQuery cookie plugin (optional) -->
		<script src="<?php echo base_url();?>js/jquery.cookie.js"></script>
		<!-- Add navgoco main js and css files  -->
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.navgoco.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/jquery.navgoco.css" media="screen" />
        
<script type="text/javascript" id="demo1-javascript">
$(document).ready(function() {
	// Initialize navgoco with default options
	$("#demo1").navgoco({
		caret: '<span class="caret"></span>',
		accordion: false,
		openClass: 'open',
		save: true,
		cookie: {
			name: 'navgoco',
			expires: false,
			path: '/'
		},
		slide: {
			duration: 400,
			easing: 'swing'
		}
	});

	$("#collapseAll").click(function(e) {
		e.preventDefault();
		$("#demo1").navgoco('toggle', false);
	});

	$("#expandAll").click(function(e) {
		e.preventDefault();
		$("#demo1").navgoco('toggle', true);
	});
});
</script>

<title>Untitled Document</title>
</head>
<body>



<body class="page page-id-161 page-template-default skin-default webkit not-ie default_width sidebar-none no-home no-touch">


	
	
	<div id="body" class="clearfix"> 
	

<!-- layout-container -->
<div id="layout" class="pagewidth clearfix">	

		<!-- content -->
	<div id="content" class="clearfix">
    		
				
							<div id="page-161" class="type-page" itemscope itemtype="http://schema.org/Article">
							<div class="page-inner clearfix">
						<!-- page-title -->
			<!-- <h2 class="page-title" itemprop="name">Welcome to DinarPal Co-Operative</h2>-->
				
<strong>
 <ul id="demo1" class="nav">
    <li><a href="#"><strong><center>MANAGE</center></strong></a></li>
     
    <li><a href="#"><strong>FILE</strong></a>
        <ul>
            <li><a href="main.php?page=add_student">Manage File</a></li>
             <li><a href="main.php?page=liststudent">View File</a></li>
           
        </ul>
    </li>

    <li><a href="#"><strong>SECRETARY</strong></a>
        <ul>
            <li><a href="main.php?page=add_teacher">Manage Secretary</a></li>
             <li><a href="main.php?page=listteacher">View Secretary</a></li>
            
        </ul>
    </li>
    
    
    <li><a href="#"><strong>REPORT</strong></a>
        <ul>
            <li><a href="main.php?page=barchartbyday"> Report by Day </a></li>
            <li><a href="main.php?page=barchartbymonth"> Report by Month </a></li>
            <li><a href="main.php?page=barchartbyyear"> Report by Year </a></li>
          
        </ul>
    </li>
   
    
    
    
</ul>
<p class="external" align="right">
  <a href="" id="collapseAll"><strong style="color:black;">Collapse All</strong></a> | <a href="" id="expandAll"><strong style="color:black;">Expand All</strong></a>&nbsp;&nbsp;
</p>
</ul>



</strong>


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

<BR /><BR />
</body>
</html>



	
