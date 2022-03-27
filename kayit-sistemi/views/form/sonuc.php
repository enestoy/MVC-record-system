<?php require 'views/header.php'; ?>

 <div class="col-lg-12 text-center">
 	
    
   <?php  
   
   if (is_array($data)) :
   
   echo '<div class="alert alert-danger mt-5">';
   
			   foreach ($data as $value) :
			   
			   echo $value."<br>";
			   
			   
			   endforeach;
   echo '</div>';
   
   else:
   
   echo $data;
   
   endif;
   
   
   
    ?> 	
 
 
  </div>


<?php require 'views/footer.php'; ?>