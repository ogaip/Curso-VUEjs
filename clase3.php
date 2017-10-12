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
			<br>
			<pre>
			{{ $data }}
			</pre>
			<h4>¿Has trabajado con Vue.js?</h4>
			<div class="radio">
				<label class="radio-inline">
					<input type="radio" v-model="vue.exp" :value="true"> Sí
				</label>
				<label class="radio-inline">
					<input type="radio" v-model="vue.exp" :value="false"> No
				</label>
			</div>
			<template v-if="vue.exp">
				<div class="form-group">
				<label for="vue_years"> ¿Cuantos años de experiencia tienes con Vue?</label>
				<input type="number" v-model="vue.years" class="form-control">
			</div>
			<div v-if="vue.years < 2" class="form-group">
				<label for="vue_years">¿Que te motivó a aprender Vue?</label>
				<textarea v-model="vue.description" class="form-control" rows="4"></textarea>
			</div>
			<div v-if="vue.years >= 2" class="form-group">
				<label for="vue_years">Cuentanos tu experiencia con Vue.js </label>
				<textarea v-model="vue.description" class="form-control" rows="4"></textarea>
			</div>
			</template>
			
			<footer class="footer">
				<p>&copy; 2017 <a href="thhp://resource.com.py">resource.com.py</a></p>
				<p>&copy; 2017 <a href="thhp://resource.com.py">dsdev.com</a></p>
			</footer>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js"></script>
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
					vue:{
						exp: null,
						years: 0,
						description: ''
					}
				}				
			});

			
			
		</script>
	</body>
</html>