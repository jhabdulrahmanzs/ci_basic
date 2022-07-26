<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">    
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
        <button type="submit" class="btn btn-primary" id="btnsave">Submit</button>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/crudajax.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
        $('#btnsave').on('click', function(e) {
            e.preventDefault();
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var city = $('#city').val();
            if (name == '' || email == '' || phone == '' || city == '') {
                alert("Please fill all fields.");
                return false;
            } else {
                $.ajax({
                    url: "<?php echo base_url("insert");?>",
                    type: "POST",
                    data: {
    
                        name: name,
                        email: email,
                        phone: phone,
                        city: city
                    },
                    success: function(data) {
                        alert(data);
                    },
                    error: function() {
                        alert('Error');
                    }
                });
            }
    
    
        });
    });
    </script>
</body>
</html>