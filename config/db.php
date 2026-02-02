<?php
    $conn = new mysqli("localhost","root","","db_php_time7",3306);
    if(!$conn){
        echo '<h1>Connaction Is Error : '.mysqli_connect_error().'</h1>';
    }
?>