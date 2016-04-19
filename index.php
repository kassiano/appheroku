<?php 
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
?>

<html ng-app="heroku">
<head>
	<title>Smartfit</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<script src="lib/Jquery/jquery.min.js"></script>
	<script src="lib/jquery-ui-1.11.4/jquery-ui.js"></script>
	<script src="lib/bootstrap/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="lib/jquery-ui-1.11.4/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/bootstrap-3.3.6-dist/css/bootstrap.css">
	<script src="lib/angular/angular.min.js"></script>
	

	<style type="text/css">

		.jumbotron{

			/*width: 900px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 20px;
			*/
			text-align: center;
			
		}
		

		.form-control{

			margin-bottom: 5px;
		}
		
	</style>
	<script type="text/javascript">


		$(document).ready(function(){
			
			$('.datepicker').datepicker({
			    dateFormat: 'yy-mm-dd',
			    dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
			    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
			    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
			    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
			    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
			    nextText: 'Próximo',
			    prevText: 'Anterior'
			});	
		});

		angular.module("heroku",[]);


		angular.module("heroku").controller("appsController", function($scope, $http){

			$scope.apps = [
				{ nome ="Pizzaria", link="pizzaria.php" },
				{ nome ="Agencia Viagens", link="agencia.php" },
				{ nome ="Concessionaria de veículos", link="concessionaria.php" }
				{ nome ="Escola técnica", link="escola.php" }

			];				

			$scope.titulo = "Apps";
		});


		

	</script>
</head>
<body ng-controller="appsController">


<div class="jumbotron">
		<h3>
			{{titulo}}
		</h3>


	<div class="container">
		


	        <div class="col-xs-6">
	            <table class="table table-striped">
	        
	            <tr>
	                <thead>
	                    <th>Sistema </th>       
	                </thead>
	            </tr>

	            <tr ng-repeat="item in apps">
	            	<td>{{item.nome}}</td>
	           
	            </tr>
	        </table>
	        </div>
	 </div>
</div>

       

</body>
</html>