<?php
    include './config/db.php';
    function getAll(){
        global $conn;
        return $conn->query("SELECT *FROM computer_tbl");
    }
    
    function insertDatacomputer($brand,$qty,$price,$image){
        global $conn;
        return $conn->query("INSERT INTO `computer_tbl`( `pc_name`, `pc_qty`, `pc_price`, `prd_img`) VALUES ('$brand',$qty,$price,'$image')");
    }
?>