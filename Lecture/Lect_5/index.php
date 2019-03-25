<?php
//	echo "hello";
    $randonNum = array();
	for($i = 0; $i < 9; $i++)
	{   
	        $n = rand(0,100);

	        $randonNum[] = "$n";
	}
	$total = 0; 
    for($i = 0; $i < count($randonNum); $i++)
    {
        $total = $total + $randonNum[$i];
        $odd_or_even = ($randonNum % 2 == 0)? "even" : "odd";
        echo $odd_or_even;
        echo $randonNum[$i] ;
        echo " ";
       
    }
    	
    
	 
    echo "Total: ";
    echo $total;
?>
