<?php 
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
?>

<html ng-app="heroku">
<head>
	<title>Lista Apps</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<script src="lib/bootstrap/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="lib/jquery-ui-1.11.4/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/bootstrap-3.3.6-dist/css/bootstrap.css">
	<script src="lib/angular/angular.min.js"></script>
	

	<style type="text/css">

		.jumbotron{

			width: 900px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 20px;
			
			text-align: center;
			
		}
		

		.form-control{

			margin-bottom: 5px;
		}
		
	</style>
	<script type="text/javascript">


		angular.module("heroku",[]);


		angular.module("heroku").controller("appsController", function($scope){

			$scope.apps = [
				{ nome:"Pizzaria", link:"pizzaria.php" },
				{ nome :"Agencia Viagens", link:"agencia.php" },
				{ nome :"Concessionaria de veículos", link:"concessionaria.php" },
				{ nome :"Escola técnica", link:"escola.php" }
			];				

			$scope.titulo = "Apps";
		});


		

	</script>
</head>
<body ng-controller="appsController">


<div class="jumbotron">
		
	<div class="container">
		<h3>
			{{titulo}}
		</h3>


	        <div>
	            <table class="table">
	       

	            <tr ng-repeat="item in apps">
	            	<td>
	            		<a href="{{item.link}}">{{item.nome}}</a> 
	            	</td>
	           
	            </tr>
	        </table>
	        </div>
	 </div>
</div>     
</body>
</html>