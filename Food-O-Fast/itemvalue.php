<?php 
//session_start();


$value=array("bhelpuri", "veg_vadapav", "veg_friedrice", "veg_pavbaji", "veg_onionbaji", "veg_frenchfries", 
					"veg_noodles", "veg_banabaji", "veg_mirchibaji", "veg_chilligarlicpops", "veg_cornchestnutballs", 
					"veg_deepfiredballs", "veg_vegfriedvegitableballs", "veg_paneerpopcorn", "non_friedchickenlegs", 
					"non_chickenshawarma", "non_chickenfriedrice", "non_breadomelette", "bu_vegburger", "bu_roastedvegburger", 
					"bu_chilliburger", "bu_veggieburger", "bu_redrobinveggieburger", "bu_angusburger", "bu_kiddychickenburger", 
					"s_chickenlolipop", "s_chickenwings", "s_chickenpoppers", "s_chickenfingers", "s_italianrolles", "s_chickennoodels",
					"s_chickentikka", "s_chillichicken", "s_frankie", "s_spicygrilledchicken", "s_somosa", "s_momos", "p_chickenpizza", 
					"p_vegpizza", "p_mixvegpizza", "p_mushroomhawaiianpiza", "p_paneerpizza", "p_pepperonipizza", "p_chocolatepizza", 
					"p_pineapple_and_chocopizza", "p_roastedvegpizza", "p_smoreschocolatepizza", "p_vegcheesepizza", "p_cheesebreadpizza",
					"p_crowncrustpizza");
					for($i=0;$i<count($value);$i++)
					{
						$_SESSION[$value[$i]]=1;
					}

?>