<?php
    $filename = "/var/lab10File/fileToWrite.txt";
    $fp = fopen($filename, 'r');
    if($fp) {
        $lines = explode("\n", fread($fp, filesize($filename)));
    }
    echo "<table border ='10'>";
    echo "<tr>";
    echo "<td>Name</td></tr>";
    foreach($lines as $name) {
	if(!empty($name))
	    echo "<tr><td>" . $name . "\n</td></tr>";
    }
    echo "</table>";
?>
