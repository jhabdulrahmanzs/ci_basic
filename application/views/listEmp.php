<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List emp</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/crudajax.js" type="text/javascript"></script>
    <link rel ="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" >
</head>
<body>
<div class="container">
        <h1> form </h1>
        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        </div>
        <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
        </div>
        <div class="form-group">
            <label for="email">Phone:</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
        </div>
        <div class="form-group">
            <label for="email">City:</label>
            <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
        </div>
        <button class="btn btn-primary" id="saveEmpForm">Submit</button>
    </div>
  
</body>
</html>
