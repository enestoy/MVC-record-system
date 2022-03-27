<?php require 'views/header.php'; ?>

 <div class="col-lg-12 text-center">
 	
    
    	<div class="row col-lg-4 mx-auto m-2 border bg-light">
        	   <div class="col-lg-12 border-bottom">GİRİŞ FORMU</div>
        	<div class="col-lg-6 p-2">KULLANICI ADI </div>
       		 <div class="col-lg-6 p-2"><form action="<?php echo URL; ?>/login/giriskontrol" method="post"><input type="text" name="ad"   class="form-control"/> </div>
             
             <div class="col-lg-6 p-2">ŞİFRE </div>
       		 <div class="col-lg-6 p-2"> <input type="password" name="sifre"   class="form-control"/> </div>
             
        
             
             <div class="col-lg-12"> <input type="submit" name="buton" value="GİRİŞ YAP"  class="btn btn-success mb-2"  /></div>
   
        
        </div>
 		
 
 
 	
        
       
        
       
        
        
        
        
        </form>
 
 
  </div>


<?php require 'views/footer.php'; ?>