/*

snippest code to find repeated elements in an array
author:- eng mohammed fatahalla
my email :- mohammedfatahalla@gmail.com

*/

<?php
//initialization of an array
$a= array(1,2,2,3,3,4,5,6,6);

function dupelement($a= array(1,2,2,3,3,4,5,6,6)){
	 
	 $i=0;
	 //loop for searching about the repeated elements in the whole array
     for ($i=0; $i < count($a); $i++) { 
     	# code...

     	 if ($a[$i]===$a[$i+1]) {
     	 	# code...
       //printing the repeated elements
     	 	echo $a[$i];


     	 }

     	

     	
     }

    
   

}


echo dupelement($a);


?>
