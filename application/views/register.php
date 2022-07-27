<!doctype html>
<html lang="en">

<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?php echo base_url('assets/css/register.css'); ?>" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Signup</title>
</head>

<body>


    <div class="form-bg">
        <div class="container">
            <div class="lay-container">
                <div class="form-container">
                    <h3 class="title">Register</h3>
                    <div id="message"></div>
                    <form class="form-horizontal" method="POST" action="<?php echo base_url('RegisterController/insertdata'); ?>" enctype="multipart/form-data" id="form">
                        <div class="form-group">
                            <label class="required" for="fname">First Name</label>
                            <input type="text" class="form-control" id="firstname" placeholder="User Name" name="first_name">
                            <span class="error" id="firstname_err"></span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="lname">last Name</label>
                            <input type="text" class="form-control" id="lastname" placeholder="User Name" name="last_name">
                            <span class="error" id="lastname_err"></span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="useremail">Email ID</label>
                            <input type="email" class="form-control" id="useremail" title="Invalid email address" placeholder="Email Address" name="user_email">
                            <span class="error" id="useremail_err"></span>
                        </div>

                        <div class="form-group">
                            <label class="form-label required" for="phoneNumber">Phone Number</label>
                            <input type="tel" id="phonenumber" class="form-control" name="user_phone" placeholder="Phone no" />
                            <span class="error" id="phonenumber_err"></span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="pwd">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="user_pwd">
                            <span class="error" id="password_err"></span>
                        </div>
                        <div id="formErr">

                        </div>
                        <div class="btns">
                            <input type="submit" class="btn btn-outline-primary btn-sm signup" id="reg-btn" name="savedata" value="Create Account">
                            <span class="signin-link">Already have an account? Click here to <a href="login.php">Login</a></span>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



</body>

</html>