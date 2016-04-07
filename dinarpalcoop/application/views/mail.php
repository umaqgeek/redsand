<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
         
        <meta charset="utf-8">
        <title>Inbox</title>
        <meta name="generator" content="Bootply">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?php echo base_url();?>css/mailcss/bootstra.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]
        <link rel="shortcut icon" href="<?php echo base_url();?>/<?php echo base_url();?>css/mailcss/favicon0.htm">-->
        <!--<link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">-->

<link href="<?php echo base_url();?>css/mailcss/font-awf.css" type="text/css" rel="stylesheet">
        <!-- CSS code from Bootply.com editor -->
        
        <style type="text/css">
            /* CSS used here will be applied after bootstrap.css */
        </style>
        <script type="text/javascript">
          function viewMessage(x){
            var tajuk = document.getElementById("title_"+ x);
            var dari = document.getElementById("sender_"+ x);
            var masa = document.getElementById("dateTime_"+ x);
            var msg = document.getElementById("content_"+ x);
            var del = document.getElementById("deleteLink");
            document.getElementById("title").innerHTML = tajuk.value;
            document.getElementById("from").innerHTML = dari.value;
            document.getElementById("date").innerHTML = masa.value;
            document.getElementById("content").innerHTML = msg.value;
            del.setAttribute("onClick","location.href='<?php echo base_url() ?>c_mail/del/"+x+"'"); 
            viewBox(true);
          }
          function viewInbox() {
            viewBox(false);
            clearMsg();
          }
          function clearMsg() {
            document.getElementById("title").innerHTML = "";
            document.getElementById("from").innerHTML = "";
            document.getElementById("date").innerHTML = "";
            document.getElementById("content").innerHTML = "";
            var del = document.getElementById("deleteLink");
            del.setAttribute("onClick",""); 
          }
          function viewBox(x)
          {
            var inbox = document.getElementById("inbox");
            var msg = document.getElementById("msg");
			msg.setAttribute("style",""); 
            if(x){
              inbox.setAttribute("class","table-responsive ng-hide");
              msg.setAttribute("class","container-fluid");  
            }else{
              inbox.setAttribute("class","table-responsive");
              msg.setAttribute("class","container-fluid ng-hide"); 
            }              
          }
		function checkForm () {
		var a = document.getElementById('inputTo');
		var b = document.getElementById('inputSubject');
		var c = document.getElementById('inputBody');
		if (a.value == "" || a.value == null ){
			alert("Please Fill This Form");
			a.focus();
			return false;
		}else{
			if(b.value == "" || b.value == null){
				alert("Please Fill This Form");
			    b.focus();
			    return false;
			}else{
				if(c.value == "" || c.value == null) {
					alert("Please Fill This Form");
			        c.focus();
			        return false;
				};
			}
		}
		return true;
	}
	function formSubmit()
	{
		document.getElementById("myForm").submit();
	}
        </script>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body>       
<ng ng-app="myApp">

  <hr>  
  <div class="container">
    <h1>Messages</h1>
  
        <div class="row" ng-controller="inboxCtrl">
        <aside class="col-md-2 pad-right-0">
            <ul class="nav nav-pills nav-stacked">
               <!-- #FFCF00-->
              <li class="active"><a href="javascript:;" onClick ="viewInbox();"><span class="badge pull-right"><?php echo $msgNum;?></span> Inbox </a></li>
              
            </ul>
            
        </aside>
        <div class="col-md-10">
            <!--inbox toolbar-->
            <div class="row" ng-show="!isMessageSelected()">
                <div class="col-xs-12">
                    <!--<a class="btn btn-default btn-lg" data-toggle="tooltip" title="Refresh" id="refreshInbox" href="javascript:;">
                      <span class="fa fa-refresh fa-lg"></span>
                    </a>-->
                    <?php echo $arr["button"]?>                    
                    <!--<div class="btn-group btn-group-lg">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            More <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:;" ng-click="readAll()">Mark all as read</a></li>
                            <li class="divider"></li>
                            <li><a href data-toggle="modal" data-target="#modalCompose">Compose new</a></li>
                            <li><a href="javascript:;" class="text-muted">Settings</a></li>
                        </ul>
                    </div>-->                    
                </div><!--/col-->
                <div class="col-xs-12 spacer5"></div>
            </div><!--/row-->
            <!--/inbox toolbar-->
            <div class="panel panel-default inbox">
                <!--message list-->
                <div class="table-responsive" id = "inbox">
                    <table class="table table-striped table-hover refresh-container pull-down">
                        <thead class="hidden-xs">
                            <tr>
                            <td class="col-sm-3"><a href="javascript:;"><strong>Date / Time</strong></a></td>
                            <td class="col-sm-2"><a href="javascript:;"><strong>From</strong></a></td>
                            <td class="col-sm-4"><a href="javascript:;"><strong>Title</strong></a></td>
                            <td class="col-sm-1"></td>
                        </tr></thead>
                        
                        <tbody>
                            <!-- kat sini inbox ."ng-hide" utk hide-->
                            <?php echo $inboxList;?>
                        </tbody>
                    </table>
                </div>
                <!--message detail-->
                <div class="container-fluid ng-hide" id = "msg" style = "display : none;">
                    <div class="row" ng-controller="messageCtrl">
                        <div class="col-xs-12">
                            <h3 title="Back To Inbox"><button type="button" class="close pull-right" aria-hidden="true" onClick ="viewInbox();">×</button>
                            <a onClick ="viewInbox();">Inbox</a> &gt; <span id = "title"></span></h3>
                        </div>
                        <div class="col-md-8">
                            <!--<blockquote class="bg-info small">-->
                            <strong>From : <span id = "from"></span></strong> on <span id = "date"></span><hr>
                            <div id = "content"></div>
                            <!--</blockquote>-->
                        </div>
                        <div class="col-md-4">
                			<!--<div class="btn-group btn-group-lg pull-right">
                				<button class="btn btn-primary" title="Reply to this message" data-toggle="tooltip">
                					<i class="fa fa-reply"></i>Reply</button>
                				<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" title="More options">
                					<i class="fa fa-angle-down"></i>
                				</button>
                				<ul class="dropdown-menu pull-right">
                					<li><a href="javascript:;"><i class="fa fa-reply"></i> Reply</a></li>
                					<li><a href="javascript:;"><i class="fa fa-mail-forward"></i> Forward</a></li>
                					<li><a href="javascript:;"><i class="fa fa-print"></i> Print</a></li>
                					<li class="divider"></li>
                					<li><a href="javascript:;"><i class="fa fa-ban"></i> This is Spam</a></li>
                					<li><a href="javascript:;"><i class="fa fa-trash-o"></i> Send to Trash</a></li>
                				</ul>
                			</div>-->
                			<div class="spacer5 pull-right"></div>
                			<button id = "deleteLink" onClick = "" class="btn btn-lg btn-primary pull-right" title="Delete this message" data-toggle="tooltip">
            					<i class="fa fa-trash-o fa-1x"></i>
            				</button>
                		</div>
                		<div class="col-xs-12"><hr></div>
                        <div class="col-xs-12">
                            <!--message body-->
                            <div ng-bind-html="renderMessageBody(selected.body)"></div>
                            <!--/message body-->
                        </div>
                        
                    </div><!--/row-->
                </div>
            </div><!--/inbox panel-->
            <div class="well well-s text-right"><em>Inbox last updated: <span id="lastUpdated"><?php echo $last;?></span></em>			
			<?php echo $arr["upload"];?>
			</div>
          
            <!--paging
          	<div class="pull-right ng-hide">
              <span class="text-muted"><b>{{(itemsPerPage * currentPage) + 1}}</b>–<b>{{(itemsPerPage * currentPage) + pagedItems[currentPage].length}}</b> of <b>{{items.length}}</b></span>
              <div class="btn-group btn-group">
                <button type="button" class="btn btn-default btn-lg" ng-class="{disabled: currentPage == 0}" ng-click="prevPage()">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </button>
                <button type="button" class="btn btn-default btn-lg" ng-class="{disabled: currentPage == pagedItems.length - 1}" ng-click="nextPage()">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </button>
              </div>
          	</div>-->
          
            <hr>
          
        </div><!--/col-9-->
        <!-- /.modal compose message -->
        <?php echo $arr["form"];?>
    <div><!--/row ng-controller-->
  	</div><!--/container-->
  
  </div>

  </div>
</ng>
        
        <script type="text/javascript" src="<?php echo base_url();?>css/mailcss/jquery02.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>css/mailcss/bootstrd.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>css/mailcss/angular0.js"></script>

    </body>
</html>
