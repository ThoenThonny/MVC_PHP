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

    function getOnePc($id){
        global $conn;
        return $conn->query("SELECT *FROM computer_tbl WHERE pc_id=$id");
    }

    function upDatePc($brand,$qty,$price,$image,$id){
        global $conn;
        return $conn->query("UPDATE `computer_tbl` SET pc_name ='$brand',pc_qty = $qty, pc_price=$price,prd_img='$image' WHERE `pc_id`=$id");
    }

    function deletePc($id){
        global $conn;
        return $conn->query("DELETE FROM `computer_tbl` WHERE `pc_id`=$id");
    }
    
    
?>