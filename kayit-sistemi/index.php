<?php
// bu otomatik olarak tüm dosyaları dahil edecektir.
spl_autoload_register(function ($className)
{
	$dosyayolu=__DIR__.'/libs/'.$className.'.php';	
	include($dosyayolu);	
});

require 'config/genel.php';
require 'config/database.php';

$boots= new boots;
		
		
	
	


?>