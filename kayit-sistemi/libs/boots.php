<?php

class boots {
	
	
	function __construct() {
		
		$url=isset($_GET["url"]) ? $_GET["url"]: null;
		
		$url=rtrim($url,'/');

		$url=explode('/',$url);

//print_r($url);

/*
$url[0]; // kontrolcüm
$url[1]; // method yani fonksiyon
$url[2]; // parametre
*/
			// eğer kontrolcü yazılmaz ise varsayılan olaran ana kontrolücü çalışyıorum.
			if (empty($url[0])):
			require 'controllers/ana.php';
			$controller= new ana();	
			
			else:		
			

			$file='controllers/'.$url[0].'.php';// kontrolcüyü çalıştıroyurm.
			//controllers/ana.php
			if (file_exists($file)):
			
			require $file;
			$controller= new $url[0];
			
			else:
			
			require 'controllers/error.php';
			
			$hata=new hata();
			
			
			
			endif;
			
	endif;		
			
		
		if (isset($url[2])) :
		$controller->{$url[1]}($url[2]);
		// $controller->ileri(10);	
		
		else:
		
			if (isset($url[1])) :
			$controller->{$url[1]}();
			// $controller->ileri();
			
			
			endif;
		
		
		endif;
		
	}
	
}




?>