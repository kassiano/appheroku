

<?php 



	$Lista = array();

	$Lista[] = array("id" => 1, "destino"=>"Porto seguro", "descricao" => "Aéreo de SP ou BH + Hotel + Traslados" , "preco"=>"549", "diarias" => 7);

	$Lista[] = array("id" => 2, "destino"=>"Orlando e Miami", "descricao" => "Aéreo + Hotel + Aluguel Carro + Seguro" , "preco"=>"1912", "diarias" => 7);

	$Lista[] = array("id" => 3, "destino"=>"Caribe All Inclusive", "descricao" => "Aéreo + 5 Noites + Seguro" , "preco"=>"2199", "diarias" => 5);

	
	$Lista[] = array("id" => 4, "destino"=>"Natal", "descricao" => "Aéreo + Hotel + Passeio e Traslados." , "preco"=>"999", "diarias" => 7);

	$Lista[] = array("id" => 5, "destino"=>"Santiago", "descricao" => "com Passeio para o VALLE NEVADO=> Aéreo + Hotel" , "preco"=>"1187", "diarias" => 3);

	$Lista[] = array("id" => 6, "destino"=>"Curitiba", "descricao" => "com Incrível Passeio de Trem para Morretes" , "preco"=>"589", "diarias" => 3);

	$Lista[] = array("id" => 7, "destino"=>"Tailândia", "descricao" => "ILHAS DE PHUKET + BANGKOK" , "preco"=>"3395", "diarias" => 7);

	$Lista[] = array("id" => 8, "destino"=>"Campos do Jordão", "descricao" => "2 Diárias para Casal + Café" , "preco"=>"175", "diarias" => 2);

	$Lista[] = array("id" => 9, "destino"=>"Cuba", "descricao" => "HAVANA + VARADERO c/ Aéreo + Hotel + Seguro!" , "preco"=>"2487", "diarias" => 5);

	$Lista[] = array("id" => 10, "destino"=>"Maceió", "descricao" => "Hotel TOP + PRAIA do FRANCÊS !" , "preco"=>"1419", "diarias" => 7);
	

	echo json_encode($Lista); 
 ?>




