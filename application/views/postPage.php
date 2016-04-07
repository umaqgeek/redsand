<html>
<head>
	<title></title>
</head>
<body>
  <script src="http://d2g9qbzl5h49rh.cloudfront.net/static/prototype.forms.js" type="text/javascript"></script>
<script src="http://d2g9qbzl5h49rh.cloudfront.net/static/jotform.forms.js?3.2.6611" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
    if(!(!Prototype.Browser.IE9 && !Prototype.Browser.IE10 && Prototype.Browser.IE)) {
        new nicEditor({iconsPath : location.protocol + '//www.jotform.com/images/nicEditorIcons.gif?v2'}).panelInstance('input_5');
        JotForm.updateAreaFromRich(5);
    }
      JotForm.onSubmissionError="jumpToSubmit";
   });
</script>
<link href="http://d2g9qbzl5h49rh.cloudfront.net/static/formCss.css?3.2.6611" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="http://d2g9qbzl5h49rh.cloudfront.net/css/styles/nova.css?3.2.6611" />
<link type="text/css" media="print" rel="stylesheet" href="http://d2g9qbzl5h49rh.cloudfront.net/css/printForm.css?3.2.6611" />
<style type="text/css">
    .form-label-left{
        width:150px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    .form-all{
        width:650px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: #555;
    }
</style>

<link type="text/css" rel="stylesheet" href="http://d2g9qbzl5h49rh.cloudfront.net/css/responsive.css?3.2.6611" />
<form class="jotform-form" action="<?php echo base_url();?>index.php/portal/insertPost" method="post" name="form_50980796266469" id="50980796266469" accept-charset="utf-8">
  <input type="hidden" name="formID" value="50980796266469" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_3" class="form-input-wide" data-type="control_head">
        <div class="form-header-group">
          <div class="header-text httal htvam">
            <h2 id="header_3" class="form-header">
              Posting Form
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_4">
        <label class="form-label form-label-left" id="label_4" for="input_4"> Title </label>
        <div id="cid_4" class="form-input jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_4" name="title" size="50" value="" maxlength="70" />
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5"> Messege </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <textarea id="input_5" class="form-textarea" name="content" cols="40" rows="6" style="min-width: 353px; min-height: 150px; background-color: white;" data-richtext="Yes"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_6">
        <div id="cid_6" class="form-input-wide">
          <div style="text-align:left" class="form-buttons-wrapper">
            <button id="input_6" type="submit" class="form-submit-button">
              Submit
            </button>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <!--<input type="hidden" id="simple_spc" name="simple_spc" value="50980796266469" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "50980796266469-50980796266469";
  </script>-->
</form>
<script src="http://d2g9qbzl5h49rh.cloudfront.net/js/vendor/nicEdit.js?REV=3.2.6611" type="text/javascript"></script>
</body>
</html>