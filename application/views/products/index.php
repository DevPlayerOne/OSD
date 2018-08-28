<!-- Button trigger modal -->


<button onclick="myFunction()">Show Snackbar</button>

<!-- The actual snackbar -->
<div id="snackbar">Some text some message..</div>

<h6>
    <?= $title ?>
</h6>
<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Add Product Item
  </button>
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




<!-- Add Item Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">App Product</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <label for="ProductName" class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ProductName" placeholder="Product Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Company" class="col-sm-2 col-form-label">Company</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Company" placeholder="Company">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ProductType" class="col-sm-2 col-form-label">Product Type</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ProductType" placeholder="Product Type">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ExpirationDate" class="col-sm-2 col-form-label">Expiration Date</label>
                        <div class="col-sm-10">
                            <input type="date"  data-provide="datepicker" class="form-control" id="ExpirationDate" placeholder="Expiration Date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="BoughtPrice" class="col-sm-2 col-form-label">Bought Price</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="BoughtPrice" placeholder="Bought Price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="SellPrice" class="col-sm-2 col-form-label">Sell Price</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="SellPrice" placeholder="Sell Price">
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" >Add</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>