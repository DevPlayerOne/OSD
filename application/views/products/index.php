<!-- Button trigger modal -->
<div class="container">
<strong>Search for Product Name, Type and Company</strong><br>
<div class="col-lg-4">
<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
</div>
<a class = "add-product-item" href="<?php echo base_url('products/add'); ?>">
<button type="button" class="btn btn-primary add-product-item" >
    Add Product Item
  </button></a>
</div>


<!-- Button to Open the Modal -->

<table class="table table-bordered" id="products-table">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Type</th>
            <th>Company</th>
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
            <td>
                <?php echo $product['CompanyName']?>
            </td>
            <td><a  href="<?php echo site_url('products/details/' .$product["productID"]);?>" >View</a>
                <a  href="<?php echo site_url('products/edit/' .$product["productID"]);?>" >Edit</a>


                
                <a  href="<?php echo site_url('products/delete/' .$product["productID"]);?>" >Delete</a>




            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  //searchables 
  var name, type, company;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("products-table");

  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    name = tr[i].getElementsByTagName("td")[0];
    type = tr[i].getElementsByTagName("td")[2];
    company = tr[i].getElementsByTagName("td")[3];

    if (name||type||company) {
      if (name.innerHTML.toUpperCase().indexOf(filter) > -1||
          type.innerHTML.toUpperCase().indexOf(filter) > -1||
          company.innerHTML.toUpperCase().indexOf(filter) > -1
          ) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>