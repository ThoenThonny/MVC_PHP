<?php
    include 'header.php';
?>
<div class="container h-auto mx-auto p-5">
    <div class=" card-title d-flex justify-content-between">
        <h3>Computer Magements</h3>
        <a class="bg-primary py-2 text-decoration-none rounded-2 px-4 text-white" href="index.php?action=create">Add Cumputer</a>
    </div>
    <table class=" table w-75 mx-auto mt-4">
        <thead class=" table-dark">
            <tr>
                <th>PC-code</th>
                <th>Images</th>
                <th>Brand</th>
                <th>QTY</th>
                <th>PRICE</th>
            </tr>
        </thead>
        <tbody>
            <?php while($rows=mysqli_fetch_assoc($computers)) : ?>
            <tr>
                <td class=" pt-3"><?= $rows['pc_id'] ?></td>
                <td>
                    <img class=" object-fit-cover" style="width: 45px; height: 45px;" src="uploads/<?= $rows['prd_img'] ?>" alt="">
                </td>
                <td class=" pt-3"><?= $rows['pc_name'] ?></td>
                <td class=" pt-3"><?= $rows['pc_qty'] ?></td>
                <td class=" pt-3"><?= $rows['pc_price'] ?>$</td>
            </tr>

            <?php endwhile ?>
        </tbody>
    </table>
</div>
<?php
    include 'footer.php'
?>