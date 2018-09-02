
<h2><?= $title?></h2>
    <?php echo validation_errors(); ?>

    <?php echo form_open('products/add');?>

    <div class="form-group row">
        <label for="ProductName" class="col-sm-2 col-form-label">Product Name</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="ProductName" name="ProductName" placeholder="Product Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="Company" class="col-sm-2 col-form-label">Company</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="Company" name="Company" placeholder="Company">
        </div>
    </div>
    <div class="form-group row">
        <label for="ProductType" class="col-sm-2 col-form-label">Product Type</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="ProductType" name="ProductType" placeholder="Product Type">
        </div>
    </div>
    <div class="form-group row">
        <label for="ExpirationDate" class="col-sm-2 col-form-label">Expiration Date</label>
        <div class="col-sm-3">
            <input type="date" data-provide="datepicker" class="form-control" id="ExpirationDate" name="ExpirationDate" placeholder="Expiration Date">
        </div>
    </div>
    <div class="form-group row">
        <label for="BoughtPrice" class="col-sm-2 col-form-label">Bought Price</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="BoughtPrice" name="BoughtPrice" placeholder="Bought Price">
        </div>
    </div>
    <div class="form-group row">
        <label for="SellPrice" class="col-sm-2 col-form-label">Sell Price</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="SellPrice" name="SellPrice" placeholder="Sell Price">
        </div>
    </div>



    <button type="submit" class="btn btn-primary">Add</button>


    </form>
