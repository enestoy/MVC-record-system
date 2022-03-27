<?php

class login extends Controller  {
	
	
	function __construct() {
	parent::__construct();
	
	$this->Modelyukle('login');
	
	}	
	
	function Form() {
	$this->view->goster("form/giris");			
	}
	
	
	function giriskontrol() {		
	$ad=$this->form->get("ad")->bosmu();
	$sifre=$this->form->get("sifre")->bosmu();

	
	if (!empty($this->form->error)) :
	// bir hata var demektir.

	$this->view->goster("form/sonuc",
	$this->form->error,
	$this->bilgi->hata(false,"/login/Form"));
	
	
	else:
	
	$sonuc=$this->model->giriskontrol("panel","ad='$ad' and sifre='$sifre'");
	
	
	
			if ($sonuc==1) :
			
			header("Location:".URL."panel");
			else:
			
			$this->view->goster("panel/sonuc",
			$this->form->error,
			$this->bilgi->hata("Eşleşme yok","/login/Form"));
			endif;	
	
	
	
	endif;
	
	
	
	
	
	}
	
	
	

	

	
}




?>