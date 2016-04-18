

<?php 


	$Lista = new array();

	$Lista[] = array("id" => 1, "nome"=>"Mussarela", "preco"=>"32.00",  "descricao" => "mussarela e orégano");

	$Lista[] = array("id" => 2, "nome"=>"Calabreza", "preco"=>"32.00",  "descricao" => "calabreza, cabola e orégano");

	$Lista[] = array("id" => 3, "nome"=>"Bons Comapanheiros", "preco"=>"36.00",  "descricao" => "mussarela,calabreza e cebola");

	$Lista[] = array("id" => 4, "nome"=>"Quatro queijos", "preco"=>"39.00",  "descricao" => "mussarela, gorgonzola, parmesão e catupiry");

	$Lista[] = array("id" => 5, "nome"=>"Margherita", "preco"=>"39.00", "descricao" => "mussarela, manjerição e rodelas de tomate");

	$Lista[] = array("id" => 6, "nome"=>"Catupiry", "preco"=>"36.00", "promocao"=>"32.00", "descricao" => "catupiry e molho de tomate");

	$Lista[] = array("id" => 7, "nome"=>"Provolone", "preco"=>"36.00",  "descricao" => "mussarela provolone e parmesão");

	$Lista[] = array("id" => 8, "nome"=>"Portuguesa", "preco"=>"36.00",  "descricao" => "mussarela e lombo");

	$Lista[] = array("id" => 9, "nome"=>"Lombo", "preco"=>"36.00",  "descricao" => "mussarela e orégano");

	$Lista[] = array("id" => 10, "nome"=>"Carbonara", "preco"=>"39.00", "descricao" => "parmesão, catupiry, bacon e ovos");

	echo json_encode($Lista); 
 ?>




