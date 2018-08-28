<!-- Button trigger modal -->


<button onclick="myFunction()">Show Snackbar</button>

<!-- The actual snackbar -->
<div id="snackbar">Some text some message..</div>

<h6>
    <?= $title ?>
</h6>


<!-- Button to Open the Modal -->
<a href="<?php echo base_url('products/add'); ?>">
<button type="button" class="btn btn-primary" >
    Add Product Item
  </button></a>
<table class="table ">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Type</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody class="table-striped">
        <?php foreach($products as $product): ?>
        <tr>
            <td>
                <?php echo $product['Name']?>
            </td>
            <td>
                <?php echo $product['SellPrice']?>
            </td>
            <td>
                <?php echo $product['ProductType']?>
            </td>
            <td><a href="">View</a>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>


        </tr>
        <?php endforeach; ?>
    </tbody>
</table>




