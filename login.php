<?php
require_once "core/base.php";
require_once "core/function.php";


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo $url; ?>assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $url; ?>assets/vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/style.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        <i class="feather-users text-primary"></i>
                        User Login
                    </h4>
                    <hr>
                    <?php
                    if(isset($_POST['login-btn'])){
                      echo login();
                    }
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group" method="post">



                            <label for="" class="my-2"><i class="feather-mail text-primary"></i>Email</label>
                            <input type="email" name="email" id="" class="form-control" required>

                            <label for="" class="my-2"><i class="feather-lock text-primary"></i>Password</label>
                            <input type="password" name="pass" id="" class="form-control" min="8" required>


                        </div>
                        <div class="form-group mb-0">
                            <button class="btn btn-primary" name="login-btn">Login</button>
                            <a href="register.php" class="btn btn-outline-primary">Register</a> <!-- btn-line-link-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>














<script src="<?php echo $url; ?>assets/js/jquery.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="<?php echo $url; ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $url; ?>assets/js/app.js"></script>
</body>
</html>