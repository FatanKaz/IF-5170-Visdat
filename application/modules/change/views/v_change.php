<html>
	
	<head>
	<script src="<?php echo base_url(); ?>_assets/bigshope-web/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>_assets/bigshope-web/js/jquery-1.7.2.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript">


	function cek(){

		$.ajax({
			url: "<?php echo base_url(); ?>change/jum_dokter",
			cache: false,
			success: function(msg){
				if(msg > 0){
					$("#notifikasi").show();
					$("#notifikasi").html(msg);
					$("#notifikasi2").show();
					$("#notifikasi2").html(msg);
				} else {
					$("#notifikasi").hide();
					$("#notifikasi2").hide();
				}
			}
		});
		var waktu = setTimeout("cek()",3000);
	}

	$(document).ready(function(){
		cek();
		
	});

	</script>
	
	</head>
	
	<body>
		<div id="notifikasi2"></div>
	</body>

</html>