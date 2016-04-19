

<?php 



	$Lista = array();

	$Lista[] = array("id" => 1, "curso"=>"Desenvolvedor Java", "area" : "Tecnoclogia" , "investimento"=>"1200",  "cargahoraria" => "40");

	$Lista[] = array("id" => 2, "curso"=>"Desenvolvedor .NET", "area" : "Tecnoclogia" , "investimento"=>"900",  "cargahoraria" => "40");

	$Lista[] = array("id" => 3, "curso"=>"Operador de empilhadeira", "area" : "Logistica" , "investimento"=>"750",  "cargahoraria" => "32");

	$Lista[] = array("id" => 4, "curso"=>"Regulagem de motores", "area" : "Automobilistica" , "investimento"=>"1350",  "cargahoraria" => "90");

	$Lista[] = array("id" => 5, "curso"=>"Eletricista automotivo", "area" : "Automobilistica" , "investimento"=>"600",  "cargahoraria" => "32");

	$Lista[] = array("id" => 6, "curso"=>"Auto CAD 3D", "area" : "Informática" , "investimento"=>"350",  "cargahoraria" => "24");

	$Lista[] = array("id" => 7, "curso"=>"Eletrônica digital", "area" : "Eletroeletrônica" , "investimento"=>"1200",  "cargahoraria" => "60");

	$Lista[] = array("id" => 8, "curso"=>"Ferramenteiro de corte", "area" : "Ferramentaria" , "investimento"=>"600",  "cargahoraria" => "40");

	$Lista[] = array("id" => 9, "curso"=>"Desenvolvedor IOS", "area" : "Tecnologia" , "investimento"=>"1400",  "cargahoraria" => "90");

	$Lista[] = array("id" => 10, "curso"=>"Desenvolvedor ANDROID", "area" : "Tecnologia" , "investimento"=>"1400",  "cargahoraria" => "90");

	echo json_encode($Lista); 
 ?>




