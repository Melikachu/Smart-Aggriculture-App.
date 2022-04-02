<?php 
    require 'config.php';
    if ( $_POST ) {
        
        $email = $_POST['email'];
        $sifre = $_POST['sifre'];

        $control = DB::getRow("SELECT * FROM member WHERE email=? AND password=?",array(
            $email,
            $sifre
        ));

        
        if ( $control ) {
            $_SESSION['login'] = $control->id;
            header("Location:index.php");
            die();
        }
        else
        {
            header("Location:login.php?error=1");
            die();
        }

        
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3><font face="Tahoma" size="5" color="#495057">Welcome to the Smart Farm App!</font></h3>
                
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                        
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="sifre" class="form-control" placeholder="Password" required="">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <?php if ( isset($_GET['success']) ): ?>
                <div class="alert alert-success">
                You have successfully registered.
                </div>
            <?php endif ?>

            <?php if ( isset($_GET['error']) ): ?>
                <div class="alert alert-danger">
                Email or password is incorrect.
                </div>
            <?php endif ?>

            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                Aren't You a Member? <a href="#">Sign up</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>