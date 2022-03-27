<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MVC İLE KAYIT SİSTEMİ</title>

<link rel="stylesheet" href="<?php echo URL; ?>/design/bootstrap.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

<div class="container">
	<div class="row">
    
    
    	<div class="col-lg-12 bg-light border p-2 mt-2">
        <h5>KAYIT SİSTEMİ</h5>
        <div class="row">
        	<div class="col-lg-4 ">
                   <a href="<?php echo URL; ?>/ana">ANASAYFA</a> | <a href="<?php echo URL; ?>/kayit/kayitekle">KAYIT EKLE</a> |  <a href="<?php echo URL; ?>/kayit/listele">KAYITLARI GÖSTER</a>
            </div>
            
            <div class="col-lg-4">
            <form action="<?php echo URL; ?>/kayit/arama" method="post">
        <input type="text" name="kelime" placeholder="Kelime" />
        <input type="submit" name="btn" value="ARA" class="btn btn-danger"  />
        
        </form>
            </div>
            
            <div class="col-lg-4">
            
            <?php
			
			
			
			if (Session::get("kulad")==true) : ?>
			
            <a href="<?php echo URL; ?>/panel/cikis">ÇIKIŞ YAP</a>
            
            <?php else: ?>
			
             <a href="<?php echo URL; ?>/login/Form">GİRİŞ YAP</a>
			
			<?php
			endif;
			
			
			?>
            
            
            
            </div>
        
        
        </div>
        
        

    
        
          
        
        
        </div>