<!DOCTYPE html>
<?php include 'function.php'; ?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title ?></title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container" id="app">
			<div>
				<h1>Bienvenido {{name}}</h1>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="well">
						En esta clase aprendimos a definir componentes en vue
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<pre>
						{{$data}}
					</pre>
				</div>
			</div>
			
			
			<footer class="footer">
				<p>&copy; 2017 <a href="thhp://resource.com.py">resource.com.py</a></p>
			</footer>
		</div>
		<!-- Lates compiled and minified JqueryJS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Latest compiled and minified JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- Vue JS v2.4.4 -->
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js"></script>
		<script>
			new Vue({
			
				el: "#app",
				data: {
					name: ''
				}
			});
		</script>
	</body>
</html>