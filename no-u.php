<?php
    $f_contents = file("https://raw.githubusercontent.com/jasperfrontend/no-u/master/no-u.txt"); 
    if($f_contents) {
        $line = $f_contents[rand(0, count($f_contents) - 1)];
        echo rtrim($line);
    } else {
        echo "ERROR: No data received.";
    }
?>