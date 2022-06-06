<?php 
// Array with values
$amount=array(100,150,1100,3500,600,50,8000);

// If statement that assigns a value to the individuals.
if($amount[0]==100){
	$output = $amount[0]*3650;
    // Checks the condition
	if($output>=1000000){
	$newamount=($output-($output*0.02));
	$x=$newamount/3870;
    // output
	echo "John's new amount is:".$x."USD"."<br>";
	}else{
        // output
	$newamount=($output)/3870;
	echo "John's new amount is: ".$newamount." USD"."<br>";
	}
}
// If statement that assigns a value to the individuals.
if($amount[1]==150){
	$output = $amount[1]*3650;
	if($output>=1000000){
	$newamount=($output-($output*0.02));
	$x=$newamount/3870;
    // output
	echo "Mark's new amount is:".$x."USD"."<br>";
	}else{
	$newamount=($output)/3870;
    // output
	echo "Mark's new amount is: ".$newamount." USD"."<br>";
	}

}
// If statement that assigns a value to the individuals.
if($amount[2]==1100){
	$output = $amount[2]*3650;
	if($output>=1000000){
	$newamount=($output-($output*0.02));
	$x=$newamount/3870;
    // output
	echo "Slyvia's new amount is: ".$x." USD"."<br>";
	}else{
	$newamount=($output)/3870;
    // output
	echo "Slyvia's new amount is: ".$newamount." USD"."<br>";
	}

}
// If statement that assigns a value to the individuals.
if($amount[3]==3500){
	$output = $amount[3]*3650;
	if($output>=1000000){
	$newamount=($output-($output*0.02));
	$x=$newamount/3870;
    // output
	echo "Juma's new amount is: ".$x." USD"."<br>";
	}else{
	$newamount=($output)/3870;
    // output
	echo "Juma's new amount is: "." ".$newamount." "." USD"."<br>";
	}

}
// If statement that assigns a value to the individuals.
if($amount[4]==600){
	$output = $amount[4]*3650;
	if($output>=1000000){
	$newamount=($output-($output*0.02));
	$x=$newamount/3870;
    // output
	echo "Mike's new amount is: ".$x." USD"."<br>";
	}else{
	$newamount=($output)/3870;
    // output
	echo "Mike's new amount is: "." ".$newamount." "." USD"."<br>";
	}

}
// If statement that assigns a value to the individuals.
if($amount[5]==50){
	$output = $amount[5]*3650;
	if($output>=1000000){
	$newamount=($output-($output*0.02));
	$x=$newamount/3870;
    // output
	echo "Sana's new amount is: ".$x." USD"."<br>";
	}else{
	$newamount=($output)/3870;
    // output
	echo "Sana's new amount is: "." ".$newamount." "." USD"."<br>";
	}

}
// If statement that assigns a value to the individuals.
if($amount[6]==8000){
	$output = $amount[6]*3650;
	if($output>=1000000){
	$newamount=($output-($output*0.02));
	$x=$newamount/3870;
    // output
	echo "Linda's new amount is: ".$x." USD"."<br>";
	}else{
	$newamount=($output)/3870;
    // output
	echo "Linda's new amount is: "." ".$newamount." "." USD"."<br>";
	}

}

?>
