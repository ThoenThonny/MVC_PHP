<?php
    include './config/db.php';
    function getAll(){
        global $conn;
        return $conn->query("SELECT *FROM computer_tbl");
    }
    
    function insertDatacomputer($image,$brand,$qty,$price){
        global $conn;
        return $conn->query("INSERT INTO `computer_tbl`( `pc_name`, `pc_qty`, `pc_price`, `prd_img`) VALUES ('$image','$brand',$qty,$price)");
    }
?>