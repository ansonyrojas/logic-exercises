<?php 

// Sistema para comprar las vacas que produzcan mas leche

$vaca1 = array(

		'pesokg' => 360,

		'producciondL' => 40,

		'codigo' => 1,

);



$vaca2 = array(


	'pesokg' => 250,
	'producciondL' => 35,
	'codigo' => 2

);

$vaca3 = array(

	'pesokg' => 400, 
	'producciondL' => 43,
	'codigo' => 3
);

$vaca4 = array(

	'pesokg' => 180,
	'producciondL' => 28,
	'codigo' => 4
);

$vaca5 = array(

	'pesokg' => 50,
	'producciondL' => 12,
	'codigo' => 5
);

$vaca6 = array(

	'pesokg' => 90,
	'producciondL' => 13,
	'codigo' => 6

);

//MAXIMIZAR la produccion de leche sin sobrepasar el limite de peso del camion




$vacasSelec = [];

$mejorProducta =[]; 

$camion = 700;

$contador = 0; 

// Seleccionamos una vaca que este en el peso medio del limite para asi escojer la indicada y llevar
	//mas vacas posibles que nos puedan ayudar a obtener una mejor produccion de leche. 


	if ($vaca1['pesokg'] >=350 && $vaca1['pesokg'] < 400 && $vaca1['producciondL'] >= 35){

				print "<br>"."la vaca 1 si cumple con los requisitos que estamos buscando";

				array_push($mejorProducta, $vaca1);

				$contador++;

			if($vaca2['pesokg'] > 0 && $vaca2['pesokg'] < 200 && $vaca2['producciondL'] >= 10){

				
				print "<br>Esta vaca 2 produce ". $vaca2['producciondL']. " litros pesa ". $vaca2['pesokg']. "kg";
			
				array_push($mejorProducta, $vaca2);
				$contador++;

			} 

			if($vaca3['pesokg'] > 0 && $vaca3['pesokg'] < 200 && $vaca3['producciondL'] >= 10){

				print "<br>La vaca 3 produce ". $vaca3['producciondL']. " litros pesa ". $vaca3['pesokg']. "kg";
				array_push($mejorProducta, $vaca3);

				$contador++;

			}

			if($vaca4['pesokg'] > 0 && $vaca4['pesokg'] < 200 && $vaca4['producciondL'] >= 10){

			print "<br>La vaca  4 produce ". $vaca4['producciondL']. " litros pesa ". $vaca4['pesokg']. "kg";
			array_push($mejorProducta, $vaca4);

				$contador++;

		    }

			if($vaca5['pesokg'] > 0 && $vaca5['pesokg'] < 200 && $vaca5['producciondL'] >= 10){

			print "<br>La  vaca 5 produce ". $vaca5['producciondL']. " litros pesa ". $vaca5['pesokg']. "kg";

			array_push($mejorProducta, $vaca5);

			$contador++;
		}

			if($vaca6['pesokg'] > 0 && $vaca6['pesokg'] < 200 && $vaca6['producciondL'] >= 10){

			print "<br>La  vaca 6 produce ". $vaca6['producciondL']. " litros pesa ". $vaca6['pesokg']. "kg";
			array_push($mejorProducta, $vaca6);

			$contador++;
		}

			$sumaPt = 0;
			$sumaLL = 0;


				
			$codVaca = array();
					
				print "<br> Las mejor seleccion de vacas que podria cargar su camion seria:";	

				for($i = 0; $i < $contador; $i++){


					print " ".$mejorProducta[$i]['codigo'];


				}	

						while($contador > 0){
							$contador--;

						$sumaPt += $mejorProducta[$contador]['pesokg'];

						$sumaLL += $mejorProducta[$contador]['producciondL'];
					
						}

							


			print " ya que estas 4 vacas pesan : ".$sumaPt." y darian el maximo de produccion de leche posible el cual es : ". $sumaLL. "lts <br>";
			print "Resultado: $sumaLL Litros";
			unset($mejorProducta, $contador);
	



	}else if ($vaca2['pesokg'] >= 350 && $vaca2['pesokg'] < 400 && $vaca2['producciondL'] >= 35){

				print "<br>"."la vaca 2 si cumple con los requisitos que estamos buscando";

				array_push($mejorProducta, $vaca2);

				$contador++;


			if($vaca1['pesokg'] > 0 && $vaca1['pesokg'] < 200 && $vaca1['producciondL'] >= 10){

				
				print "<br>Esta vaca 1 produce ". $vaca1['producciondL']. " litros pesa ". $vaca1['pesokg']. "kg";
			
				array_push($mejorProducta, $vaca1);
				$contador++;

			} 

			if($vaca3['pesokg'] > 0 && $vaca3['pesokg'] < 200 && $vaca3['producciondL'] >= 10){

				print "<br>La vaca 3 produce ". $vaca3['producciondL']. " litros pesa ". $vaca3['pesokg']. "kg";
				array_push($mejorProducta, $vaca3);

				$contador++;

			}

			if($vaca4['pesokg'] > 0 && $vaca4['pesokg'] < 200 && $vaca4['producciondL'] >= 10){

			print "<br>La vaca  4 produce ". $vaca4['producciondL']. " litros pesa ". $vaca4['pesokg']. "kg";
			array_push($mejorProducta, $vaca4);

				$contador++;

		    }

			if($vaca5['pesokg'] > 0 && $vaca5['pesokg'] < 200 && $vaca5['producciondL'] >= 10){

			print "<br>La  vaca 5 produce ". $vaca5['producciondL']. " litros pesa ". $vaca5['pesokg']. "kg";

			array_push($mejorProducta, $vaca5);

			$contador++;
		}

			if($vaca6['pesokg'] > 0 && $vaca6['pesokg'] < 200 && $vaca6['producciondL'] >= 10){

			print "<br>La  vaca 6 produce ". $vaca6['producciondL']. " litros pesa ". $vaca6['pesokg']. "kg";
			array_push($mejorProducta, $vaca6);

			$contador++;
		}

			$sumaPt = 0;
			$sumaLL = 0;


				
			$codVaca = array();
					
				print "<br> Las mejor seleccion de vacas que podria cargar su camion seria:";	

				for($i = 0; $i < $contador; $i++){


					print " ".$mejorProducta[$i]['codigo'];


				}	

						while($contador > 0){
							$contador--;

						$sumaPt += $mejorProducta[$contador]['pesokg'];

						$sumaLL += $mejorProducta[$contador]['producciondL'];
					
						}

							


			print " ya que estas 4 vacas pesan : ".$sumaPt." y darian el maximo de produccion de leche posible el cual es : ". $sumaLL. "lts <br>";

			print "Resultado: $sumaLL Litros";
			
			unset($contador, $mejorProducta);

	
	}else if ($vaca3['pesokg'] >=350 && $vaca3['pesokg'] < 400 && $vaca3['producciondL'] >= 35){

				print "<br>"."la vaca 3 si cumple con los requisitos que estamos buscando";

				array_push($mejorProducta, $vaca3);
				$contador++;


			if($vaca1['pesokg'] > 0 && $vaca1['pesokg'] < 200 && $vaca1['producciondL'] >= 10){

				
				print "<br>Esta vaca 1 produce ". $vaca1['producciondL']. " litros pesa ". $vaca1['pesokg']. "kg";
			
				array_push($mejorProducta, $vaca1);
				$contador++;

			} 

			if($vaca2['pesokg'] > 0 && $vaca2['pesokg'] < 200 && $vaca2['producciondL'] >= 10){

				print "<br>La vaca 3 produce ". $vaca2['producciondL']. " litros pesa ". $vaca2['pesokg']. "kg";
				array_push($mejorProducta, $vaca2);

				$contador++;

			}

			if($vaca4['pesokg'] > 0 && $vaca4['pesokg'] < 200 && $vaca4['producciondL'] >= 10){

			print "<br>La vaca  4 produce ". $vaca4['producciondL']. " litros pesa ". $vaca4['pesokg']. "kg";
			array_push($mejorProducta, $vaca4);

				$contador++;

		    }

			if($vaca5['pesokg'] > 0 && $vaca5['pesokg'] < 200 && $vaca5['producciondL'] >= 10){

			print "<br>La  vaca 5 produce ". $vaca5['producciondL']. " litros pesa ". $vaca5['pesokg']. "kg";

			array_push($mejorProducta, $vaca5);

			$contador++;
		}

			if($vaca6['pesokg'] > 0 && $vaca6['pesokg'] < 200 && $vaca6['producciondL'] >= 10){

			print "<br>La  vaca 6 produce ". $vaca6['producciondL']. " litros pesa ". $vaca6['pesokg']. "kg";
			array_push($mejorProducta, $vaca6);

			$contador++;
		}

			$sumaPt = 0;
			$sumaLL = 0;


				
			$codVaca = array();
					
				print "<br> Las mejor seleccion de vacas que podria cargar su camion seria:";	

				for($i = 0; $i < $contador; $i++){


					print " ".$mejorProducta[$i]['codigo'];


				}	

						while($contador > 0){
							$contador--;

						$sumaPt += $mejorProducta[$contador]['pesokg'];

						$sumaLL += $mejorProducta[$contador]['producciondL'];
					
						}

							


			print " ya que estas 4 vacas pesan : ".$sumaPt." y darian el maximo de produccion de leche posible el cual es : ". $sumaLL. "lts <br>";

			print "Resultado: $sumaLL Litros";
			
			unset($contador, $mejorProducta);


	}else if ($vaca4['pesokg'] >= 350 && $vaca4['pesokg'] < 400 && $vaca4['producciondL'] >= 35){

				print "<br>"."la vaca 4 si cumple con los requisitos que estamos buscando";

				array_push($mejorProducta, $vaca4);

				$contador++;


			if($vaca1['pesokg'] > 0 && $vaca1['pesokg'] < 200 && $vaca1['producciondL'] >= 10){

				
				print "<br>Esta vaca 1 produce ". $vaca1['producciondL']. " litros pesa ". $vaca1['pesokg']. "kg";
			
				array_push($mejorProducta, $vaca1);
				$contador++;

			} 

			if($vaca2['pesokg'] > 0 && $vaca2['pesokg'] < 200 && $vaca2['producciondL'] >= 10){

				print "<br>La vaca 3 produce ". $vaca2['producciondL']. " litros pesa ". $vaca2['pesokg']. "kg";
				array_push($mejorProducta, $vaca2);

				$contador++;

			}

			if($vaca3['pesokg'] > 0 && $vaca3['pesokg'] < 200 && $vaca3['producciondL'] >= 10){

			print "<br>La vaca  4 produce ". $vaca3['producciondL']. " litros pesa ". $vaca3['pesokg']. "kg";
			array_push($mejorProducta, $vaca3);

				$contador++;

		    }

			if($vaca5['pesokg'] > 0 && $vaca5['pesokg'] < 200 && $vaca5['producciondL'] >= 10){

			print "<br>La  vaca 5 produce ". $vaca5['producciondL']. " litros pesa ". $vaca5['pesokg']. "kg";

			array_push($mejorProducta, $vaca5);

			$contador++;
		}

			if($vaca6['pesokg'] > 0 && $vaca6['pesokg'] < 200 && $vaca6['producciondL'] >= 10){

			print "<br>La  vaca 6 produce ". $vaca6['producciondL']. " litros pesa ". $vaca6['pesokg']. "kg";
			array_push($mejorProducta, $vaca6);

			$contador++;
		}

			$sumaPt = 0;
			$sumaLL = 0;


				
			$codVaca = array();
					
				print "<br> Las mejor seleccion de vacas que podria cargar su camion seria:";	

				for($i = 0; $i < $contador; $i++){


					print " ".$mejorProducta[$i]['codigo'];


				}	

						while($contador > 0){
							$contador--;

						$sumaPt += $mejorProducta[$contador]['pesokg'];

						$sumaLL += $mejorProducta[$contador]['producciondL'];
					
						}

							


			print " ya que estas 4 vacas pesan : ".$sumaPt." y darian el maximo de produccion de leche posible el cual es : ". $sumaLL. "lts <br>";

			print "Resultado: $sumaLL Litros";
			
			unset($contador, $mejorProducta);

	}else if ($vaca5['pesokg'] >= 350 && $vaca5['pesokg'] < 400 && $vaca5['producciondL'] >= 35){

				print "<br>"."la vaca 5 si cumple con los requisitos que estamos buscando";

				array_push($mejorProducta, $vaca5);

				$contador++;


			if($vaca1['pesokg'] > 0 && $vaca1['pesokg'] < 200 && $vaca1['producciondL'] >= 10){

				
				print "<br>Esta vaca 1 produce ". $vaca1['producciondL']. " litros pesa ". $vaca1['pesokg']. "kg";
			
				array_push($mejorProducta, $vaca1);
				$contador++;

			} 

			if($vaca2['pesokg'] > 0 && $vaca2['pesokg'] < 200 && $vaca2['producciondL'] >= 10){

				print "<br>La vaca 3 produce ". $vaca2['producciondL']. " litros pesa ". $vaca2['pesokg']. "kg";
				array_push($mejorProducta, $vaca2);

				$contador++;

			}

			if($vaca3['pesokg'] > 0 && $vaca3['pesokg'] < 200 && $vaca3['producciondL'] >= 10){

			print "<br>La vaca  4 produce ". $vaca3['producciondL']. " litros pesa ". $vaca3['pesokg']. "kg";
			array_push($mejorProducta, $vaca3);

				$contador++;

		    }

			if($vaca4['pesokg'] > 0 && $vaca4['pesokg'] < 200 && $vaca4['producciondL'] >= 10){

			print "<br>La  vaca 5 produce ". $vaca4['producciondL']. " litros pesa ". $vaca4['pesokg']. "kg";

			array_push($mejorProducta, $vaca4);

			$contador++;
		}

			if($vaca6['pesokg'] > 0 && $vaca6['pesokg'] < 200 && $vaca6['producciondL'] >= 10){

			print "<br>La  vaca 6 produce ". $vaca6['producciondL']. " litros pesa ". $vaca6['pesokg']. "kg";
			array_push($mejorProducta, $vaca6);

			$contador++;
		}

			$sumaPt = 0;
			$sumaLL = 0;


				
			$codVaca = array();
					
				print "<br> Las mejor seleccion de vacas que podria cargar su camion seria:";	

				for($i = 0; $i < $contador; $i++){


					print " ".$mejorProducta[$i]['codigo'];


				}	

						while($contador > 0){
							$contador--;

						$sumaPt += $mejorProducta[$contador]['pesokg'];

						$sumaLL += $mejorProducta[$contador]['producciondL'];
					
						}

							


			print " ya que estas 4 vacas pesan : ".$sumaPt." y darian el maximo de produccion de leche posible el cual es : ". $sumaLL. "lts <br>";

			print "Resultado: $sumaLL Litros";
			
			unset($contador, $mejorProducta);

	}else if ($vaca6['pesokg'] >= 350 && $vaca6['pesokg'] < 400 && $vaca6['producciondL'] >= 35){

				print "<br>"."la vaca 6 si cumple con los requisitos que estamos buscando";

				array_push($mejorProducta, $vaca6);

				$contador++;

				if($vaca1['pesokg'] > 0 && $vaca1['pesokg'] < 200 && $vaca1['producciondL'] >= 10){

				
				print "<br>Esta vaca 1 produce ". $vaca1['producciondL']. " litros pesa ". $vaca1['pesokg']. "kg";
			
				array_push($mejorProducta, $vaca1);
				$contador++;

			} 

			if($vaca2['pesokg'] > 0 && $vaca2['pesokg'] < 200 && $vaca2['producciondL'] >= 10){

				print "<br>La vaca 3 produce ". $vaca2['producciondL']. " litros pesa ". $vaca2['pesokg']. "kg";
				array_push($mejorProducta, $vaca2);

				$contador++;

			}

			if($vaca3['pesokg'] > 0 && $vaca3['pesokg'] < 200 && $vaca3['producciondL'] >= 10){

			print "<br>La vaca  4 produce ". $vaca3['producciondL']. " litros pesa ". $vaca3['pesokg']. "kg";
			array_push($mejorProducta, $vaca3);

				$contador++;

		    }

			if($vaca4['pesokg'] > 0 && $vaca4['pesokg'] < 200 && $vaca4['producciondL'] >= 10){

			print "<br>La  vaca 5 produce ". $vaca4['producciondL']. " litros pesa ". $vaca4['pesokg']. "kg";

			array_push($mejorProducta, $vaca4);

			$contador++;
		}

			if($vaca6['pesokg'] > 0 && $vaca6['pesokg'] < 200 && $vaca6['producciondL'] >= 10){

			print "<br>La  vaca 6 produce ". $vaca6['producciondL']. " litros pesa ". $vaca6['pesokg']. "kg";
			array_push($mejorProducta, $vaca6);

			$contador++;
		}

			$sumaPt = 0;
			$sumaLL = 0;


				
			$codVaca = array();
					
				print "<br> Las mejor seleccion de vacas que podria cargar su camion seria:";	

				for($i = 0; $i < $contador; $i++){


					print " ".$mejorProducta[$i]['codigo'];


				}	

						while($contador > 0){
							$contador--;

						$sumaPt += $mejorProducta[$contador]['pesokg'];

						$sumaLL += $mejorProducta[$contador]['producciondL'];
					
						}

							


			print " ya que estas 4 vacas pesan : ".$sumaPt." y darian el maximo de produccion de leche posible el cual es : ". $sumaLL. "lts <br>";

			print "Resultado: $sumaLL Litros";
			
			unset($contador, $mejorProducta);
			
	}








?>
