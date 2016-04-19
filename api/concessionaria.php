

<?php 



	$Lista = array();

	$Lista[] = array("id" => 1, "modelo"=>"Celta", "marca" => "Chevrolet" , "preco"=>"13000",  "localizacao" => "São Paulo - Capital");


	$Lista[] = array("id" => 2, "modelo"=>"i30", "marca" => "Hyundai" , "preco"=>"33900",  "localizacao" => "São Paulo - Zona Sul");
	$Lista[] = array("id" => 3, "modelo"=>"serie 3", "marca" => "BMW" , "preco"=>"80000",  "localizacao" => "São Bernardo do Campo");
	$Lista[] = array("id" => 4, "modelo"=>"Civic", "marca" => "Honda" , "preco"=>"21900",  "localizacao" => "São Paulo - Zona oeste");

	$Lista[] = array("id" => 5, "modelo"=>"Vectra", "marca" => "Chevrolet" , "preco"=>"24900",  "localizacao" => "Santo André");
	$Lista[] = array("id" => 6, "modelo"=>"Punto", "marca" => "Fiat" , "preco"=>"25500",  "localizacao" => "São Paulo - Capital");

	$Lista[] = array("id" => 7, "modelo"=>"Stilo", "marca" => "Fiat" , "preco"=>"33990",  "localizacao" => "Osasco");
	$Lista[] = array("id" => 8, "modelo"=>"Fusion", "marca" => "Ford" , "preco"=>"28900",  "localizacao" => "São paulo - Zona leste");
	$Lista[] = array("id" => 9, "modelo"=>"Ecosporte", "marca" => "Ford" , "preco"=>"20900",  "localizacao" => "São paulo - Zona Sul");

	$Lista[] = array("id" => 10, "modelo"=>"Golf", "marca" => "Volkswagem" , "preco"=>"27800",  "localizacao" => "São paulo - Capital");


	echo json_encode($Lista); 
 ?>




