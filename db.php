<?php

$db = mysqli_connect('localhost', 'root', '', 'onlineedu');

if($db) {
    //echo "success"; 
} 
else {
    die("Error". mysqli_connect_error()); 
}

?>
