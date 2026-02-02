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
            <tr>
                <td class=" pt-3">101</td>
                <td>
                    <img class=" object-fit-cover" style="width: 45px; height: 45px;" src="https://www.asus.com/media/Odin/Websites/global/ProductLine/20250425022746.png" alt="">
                </td>
                <td class=" pt-3">ASUS</td>
                <td class=" pt-3">10</td>
                <td class=" pt-3">300$</td>
            </tr>
        </tbody>
    </table>
</div>
<?php
    include 'footer.php'
?>