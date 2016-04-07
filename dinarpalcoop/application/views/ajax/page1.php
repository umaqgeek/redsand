<script src="<?php echo base_url(); ?>assets/grocery_crud/js/jquery-1.11.1.js"></script>

<script>
function tukar()
{
	$.ajax({
	  type: "POST",
	  url: "<?php echo site_url('main/test2'); ?>",
	  data: {},
	  success: function(msg) {
		  $("#paparan").html( msg );
	  }
	});
	//setTimeout("tukar()", 3000);
}
$(document).ready(function(e) {
	tukar();
});
</script>

<button id="call_1">Panggil</button>

<div id="paparan"></div>