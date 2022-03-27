<?php

class Bilgi  {

		function basarili($deger,$yol) {
			
			
			return '<div class="alert alert-success mt-5">'.$deger.'</div>'
			. header("Refresh:3; url=".URL.$yol);
		}
		
		function hata($deger=false,$yol) {
			
			
			return '<div class="alert alert-danger mt-5">'.$deger.'</div>'
			. header("Refresh:3; url=".URL.$yol);
		}
	
	
	
	

	
}




?>