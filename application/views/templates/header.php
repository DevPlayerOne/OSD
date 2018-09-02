<html>

<head>
    <title>
    </title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/storeapp.css');?>">
    <script src="<?php echo base_url('js/jquery-3.3.1.js')?>"></script>
    <script src="<?php echo base_url('js/bootstrap.js')?>"></script>

    <script src="<?php echo base_url('js/myJs.js')?>"></script> 

</head>
<body>


    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="<?php echo base_url(); ?>products"">StoreApp</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>products">Products <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" disabled>Debt</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" disabled>About</a>
          </li>

        </ul>

      </div>
    </nav>
    
    <div class="container">