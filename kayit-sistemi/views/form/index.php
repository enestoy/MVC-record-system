<?php require 'views/header.php'; ?>

 <div class="col-lg-12 text-center">
 	
    
    	<div class="row col-lg-4 mx-auto m-2 border bg-light">
        	   <div class="col-lg-12 border-bottom"> KAYIT FORMU</div>
        	<div class="col-lg-6 p-2">ADI </div>
       		 <div class="col-lg-6 p-2"><form action="<?php echo URL; ?>/kayit/kontrol" method="post"><input type="text" name="ad"   class="form-control"/> </div>
             
             <div class="col-lg-6 p-2">SOYADI </div>
       		 <div class="col-lg-6 p-2"> <input type="text" name="soyad"   class="form-control"/> </div>
             
             <div class="col-lg-6 p-2">YAŞI </div>
       		 <div class="col-lg-6 p-2"><input type="text" name="yas"   class="form-control"/> </div>
             
             <div class="col-lg-12"> <input type="submit" name="buton" value="EKLE"  class="btn btn-success mb-2"  /></div>
   
        
        </div>
 		
 
 
 	
        
       
        
       
        
        
        
        
        </form>
 
 
  </div>


<?php require 'views/footer.php'; ?>