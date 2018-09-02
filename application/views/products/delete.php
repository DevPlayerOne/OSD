<h2><?= $title ?></h2>
<h1>Are you sure you want to delete this row?</h1>
<?php echo form_open('products/delete_product');?>
    <input type="hidden" class="form-control" id="Company" name="productID"  value="<?php echo $product['productID']?>">
<strong>Product Name: </strong><span><?php echo $product["Name"] ?></span></br>
<strong>Company Name: </strong><span><?php echo $product["CompanyName"] ?></span></br>
<strong>Product Type: </strong><span><?php echo $product["ProductType"] ?></span></br>
<strong>Expiration Date: </strong><span><?php echo $product["ExpirationDate"] ?></span></br>
<strong>Bought Price: </strong><span><?php echo $product["BoughtPrice"] ?></span></br>
<strong>Sell Price: </strong><span><?php echo $product["SellPrice"] ?></span></br>
<strong>Added By: </strong><span><?php echo $product["AddedBy"] ?></span></br>
<strong>Added Date: </strong><span><?php echo $product["AddedDate"] ?></span></br>
</br>
<button type="submit" class="btn btn-danger">Delete</button>
<a href="<?php echo base_url('products/');?>"><button class="btn btn-primary">Go Back</button></a>
</form>





