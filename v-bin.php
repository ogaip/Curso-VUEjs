<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>VUEjs V-BIND | .: ogaip-dev :.</title>
</head>
<body>
	
	<div id="main">
		<input type="text" v-model="info">
		<?php 
			$p= "<p v-bind:title='info'>http:backend.dev/ciudad/{{info}}</p>";
		 ?>
		 <?php echo $p ?>
		
	</div>






	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.0/vue.js"></script>

	<script type="text/javascript">
		new Vue({
		
			el: "#main",
			data:{
				info:''
			}		
		});
	</script>
</body>
</html>