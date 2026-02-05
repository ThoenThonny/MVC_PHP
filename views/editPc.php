<?php
    include 'header.php';
?>
    <div style="width: 800px;" class=" mx-auto p-3">
        <div class=" bg-success py-2 px-2 rounded-top-2 ">
           <h3 class=" text-white">Update Computer</h3>
        </div>
        <form action="index.php?action=update" method="POST" class=" w-100 shadow-lg p-4 rounded-bottom-2" enctype="multipart/form-data">
             <div>
               
                <input  type="hidden" value="<?= $computer['pc_id'] ?>" name="id-pc" class=" form-control">
            </div>
            <div>
                <label class="fs-5 pb-2" for="">Name</label>
                <input placeholder="enter name computer" value="<?= $computer['pc_name'] ?>" type="text" name="name-pc" class=" form-control">
            </div>
            <div class=" mt-3">
                <label class="fs-5 pb-2" for="">QTY</label>
                <input placeholder="enter qty computer" type="text" value="<?= $computer['pc_qty'] ?>" name="qty-pc" class=" form-control">
            </div>

            <div class=" mt-3">
                <label class="fs-5 pb-2" for="">Price</label>
                <input placeholder="enter price computer" type="text" value="<?= $computer['pc_price'] ?>" name="price-pc" class=" form-control">
            </div>

             <div class=" mt-3">
                <label class="fs-5 pb-2" for="">Image</label>
                <input placeholder="enter price computer" type="file" name="img-pc" onchange="previewImage(this,'preview')" class=" form-control">

                <img class=" object-fit-cover mt-3 rounded-3" style="width: 90px; height: 90px;" id="preview" src="uploads/<?= $computer['prd_img'] ?>" alt="">
            </div>
            
            <div class=" mt-3 d-flex justify-content-end gap-2">
                <button type="submit" class=" btn btn-success">Update</button>
                <a href="index.php?action=list" class=" bg-danger text-decoration-none px-3 rounded-2 py-2 text-white">Cancel</a>
            </div>
        </form>
    </div>
<?php
    include 'footer.php'
?>