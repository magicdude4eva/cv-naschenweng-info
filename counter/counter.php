<?php 
	// Open the counter file
	
	$file = "/var/www/vhosts/naschenweng.info/httpdocs/cv/counter/stats";
	if(!($fp = fopen($file , "r"))) 
		die ("Could not open the requested file!  You may need to CHMOD 777 it!");
	$count = trim(fgets($fp));
	$selection = trim(fgets($fp));
	
	fclose($fp);
	
	$count++;
	
	$fp = fopen($file , "w");
	
	fwrite($fp, $count);
	fwrite($fp, "\n");
	fwrite($fp, $selection);
	
	fclose($fp);
        print $count;
//	$count_image = "<img src='./counter/images/".$selection."/";
//	for($i = 0; $i < strlen($count); $i++){
//		$temp = $count_image.substr($count, $i, 1).".gif' />";
//		print $temp;
//		
//	}
	
	
	
	// Increment the counter
	
	// Write to the file
	
	// Loop through to print out the counter pictures
	
	
	


?>
