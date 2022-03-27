<?php require 'views/header.php'; ?>

 <div class="col-lg-12 text-center">
 	
    
   <?php  
   

   
   if (is_array($data)) :
   
					if (count($data)>0) :
					
					
		   
		   
		   echo '<div class="alert alert-danger mt-5">';
		   
					   foreach ($data as $value) :
					   
					   echo $value."<br>";
					   
					   
					   endforeach;
		   echo '</div>';
		   
		   
					   else:
					   
					   echo $yonlen;
   			endif;
   
   
   else:
   
   echo $data;
   echo $yonlen;
   
   
   endif;
   
   

   
    ?> 	
 
 
  </div>


<?php require 'views/footer.php'; ?>