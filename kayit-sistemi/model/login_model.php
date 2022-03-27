<?php

class login_model extends Model {
	
	
	function __construct() {		
		parent:: __construct();
	}
	
	
	
	function giriskontrol($tabload,$kosul) {		
		return $this->db->giriskontrol($tabload,$kosul); 
		
	}
	
	
	
	
	
	

	
}




?>