<?php
    include './models/computerModel.php';

     $action = $_GET['action']??'list';

     if($action == 'list'){
        $computers = getAll();
        include './views/computerList.php';
     }

     if($action == 'create'){
       include './views/createPc.php';
     }

     if($action == 'store'){
        $image = time().$_FILES['img-pc']['name'];
        move_uploaded_file($_FILES['img-pc']['tmp_name'],'./uploads/'.$image);
        $name = $_POST['name-pc'];
        $qty = $_POST['qty-pc'];
        $price = $_POST['price-pc'];
        insertDatacomputer($name,$qty,$price,$image);
        header('location: index.php');
     }
    
?>