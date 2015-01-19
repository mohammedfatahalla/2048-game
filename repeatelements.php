<?php

$a= array(1,2,2,3,3,4,5,6,6);

function dupelement($a= array(1,2,2,3,3,4,5,6,6)){
	 
	 $i=0;
     for ($i=0; $i < count($a); $i++) { 
     	# code...

     	 if ($a[$i]===$a[$i+1]) {
     	 	# code...

     	 	echo $a[$i];


     	 }

     	

     	
     }

    
   

}


echo dupelement($a);


?>
