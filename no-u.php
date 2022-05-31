<?php
    $f_contents = file("https://raw.githubusercontent.com/jasperfrontend/no-u/master/no-u.txt"); 
    $line = $f_contents[rand(0, count($f_contents) - 1)];
    echo rtrim($line);
?>