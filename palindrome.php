<?php

// checking in the input equal to the reversed is same or not
function Palindrome($string){
	if (strrev($string) == $string){
		return 1;
	}
	else{
		return 0;
	}
}

   $input = "1201";
if(Palindrome($input)){
	echo  $input." " ." is a Palindrome";
}
else {
    echo  $input." " ." is not a Palindrome";
}
?>