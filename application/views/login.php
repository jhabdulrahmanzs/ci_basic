<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?php echo base_url('assets/css/login.css'); ?>" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>login</title>
</head>

<body>

    <div class="form-bg">
        <div class="container">
            <div class="lay-container">
                <div class="form-container">
                    <h3 class="title">Login</h3>
                    <div id="message"></div>
                    <form class="form-horizontal" action="<?php echo base_url('LoginController/login_valid');?>" method="post" id="form">
                        <div class="form-group">
                            <label>User Email</label>
                            <input type="text" class="form-control" placeholder="User Email" name="useremail" id="useremail">
                            <span class="error" id="useremail_err"></span>
                            <!-- <div>error</div> -->
                            <?php echo form_error('useremail'); ?>
                        </div>
                        <!-- <input type="text" name="useremail" placeholder="useremail" id="useremail" > -->
                        <div class="form-group">
                            <label>User password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                            <span class="error" id="password_err"></span>
                            <!-- <div>error</div> -->
                            <?php echo form_error('password'); ?>
                        </div>
                        <div class="btns">
                            <input type="submit" class="btn btn-outline-primary btn-sm signup" id="reg-btn" name="Login" value="Login"><br>
                            <span class="signin-link">If You Don't have an Account?Register Here <a href="<?php echo base_url('/register'); ?>">Register</a></span>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>