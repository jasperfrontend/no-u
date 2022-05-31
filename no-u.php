<?php
    $f_contents = file("no-u.txt"); 
    $line = $f_contents[rand(0, count($f_contents) - 1)];
    echo rtrim($line);
?>