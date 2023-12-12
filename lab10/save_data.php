<?php
    if(isset($_POST['submit'])) {
        $firstName = $_POST['fname']; 
	$lastName = $_POST['lname'];
	if(empty($firstName) || empty($lastName))
	    echo "ERROR: EMPTY LAST OR FIRST NAME";
	else
	    writeToFile($firstName, $lastName);
    }

    function writeToFile($firstName, $lastName) {
        $fp = fopen("/var/lab10File/fileToWrite.txt", 'a');
	$stringToWrite = $firstName . " " . $lastName . "\n";
	fwrite($fp, $stringToWrite);
	fclose($fp);
    }
?>
