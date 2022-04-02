<?php 
    include("config.php");
    if ( $_POST ) {
        $isim_soyisim = $_POST['isim_soyisim'];
        $email        = $_POST['email'];
        $sifre        = $_POST['sifre'];
        $id = DB::insert("INSERT INTO member(username,email,password) VALUES(?,?,?)",array(
            $isim_soyisim,
            $email,
            $sifre
        ));
        header("Location:login.php?success=1");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
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
                        <input type="text" name="isim_soyisim" class="form-control" placeholder="Name and Surname">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="sifre" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Sign In" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    <a href="login.php">Login</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>