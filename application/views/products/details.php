<h2><?= $title ?></h2>

<strong>Product Name: </strong><span><?php echo $product["Name"] ?></span></br>
<strong>Company Name: </strong><span><?php echo $product["CompanyName"] ?></span></br>
<strong>Product Type: </strong><span><?php echo $product["ProductType"] ?></span></br>
<strong>Expiration Date: </strong><span><?php echo $product["ExpirationDate"] ?></span></br>
<strong>Bought Price: </strong><span><?php echo $product["BoughtPrice"] ?></span></br>
<strong>Sell Price: </strong><span><?php echo $product["SellPrice"] ?></span></br>
<strong>Added By: </strong><span><?php echo $product["AddedBy"] ?></span></br>
<strong>Added Date: </strong><span><?php echo $product["AddedDate"] ?></span></br>
</br>

<a href="<?php echo base_url('products/delete_item');?>"><button class="btn btn-primary">Go Back</button></a>

<a href="<?php echo base_url('products/');?>"><button class="btn btn-primary">Go Back</button></a>








