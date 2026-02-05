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

     if($action == 'getone'){
      $id = $_GET['id'];
      $getDataPc = getOnePc($id);
      $computer = mysqli_fetch_assoc($getDataPc);
        include './views/editPc.php';
     }
     
     if($action == 'update'){
      $id = $_POST['id-pc'];
       $name = $_POST['name-pc'];
       $qty = $_POST['qty-pc'];
       $price = $_POST['price-pc'];

       $oldData = getOnePc($id)->fetch_assoc();
       $oldImage = $oldData['prd_img'];

       if(!empty($_FILES['img-pc']['name'])){
         $newImage = time().$_FILES['img-pc']['name'];
         if(file_exists('./uploads/'.$oldImage)){
            unlink('./uploads/'.$oldImage);
         }

          move_uploaded_file($_FILES['img-pc']['tmp_name'],'./uploads/'.$newImage);
         
       }else{
         $newImage=$oldImage;
       }
        upDatePc($name,$qty,$price,$newImage,$id);

        header('location: index.php');
     }
   
    
?>