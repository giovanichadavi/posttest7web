<?php
require 'koneksi.php';

if (isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    if($password == $confirm_password){
        $password = password_hash($password, PASSWORD_DEFAULT);
    }
    else{
        echo "<script>
            alert('Konfirmasi Password Anda Tidak Sesuai');
            document.location.href = 'daftar-akun.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vansboys</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <script src="jquery.js"></script>
    <script src="https://kit.fontawesome.com/d6e78495c8.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <div class="header">


        <div class="logo-utama"><img src="img/logo.png" alt="Image" height="50px" width="px"></div>
        <div class="header-logo">Vansboys
        </div>
        <div class="header-list">

            <ul>
                <li><a href="index.html" class="warna" style=" text-decoration:none; "> Home </a></li>
                <li><a href="index-trade.html" class="warna" style=" text-decoration:none;"> Trade </a> </li>
                <li><a href="index-market.html" class="warna" style=" text-decoration:none;  "> Market </a></li>

                
                <div class=toggle onclick="myFunction()">
                    <div class="circle"></div>
                    <div class="toggle-moon"><i class="fas fa-moon"></i></div>
                    <div class="toggle-sun"><i class="fas fa-sun"></i></div>
                    
                </div>
            </ul>
        </div>

    </div>

    <div class="main">
        <div class="aboutus">
            <h2>REGISTER</h2>
            <br><br><br>
        </div>

        <div class="container" style="margin-top: 100px;">
            <form>
                <label>Username</label><br>
                <input type="text"><br>

                <label>Email</label><br>
                <input type="email"><br>

                <label>Password</label><br>
                <input type="password"><br>

                <label>Confirm Password</label><br>
                <input type="password"><br>

                <button type = "submit" name="register" id="register" >Daftar</button>
            </form>
            <br>
    
            </div>

                
        </div>            

 

        </div>
        

    </div>



    </div>

    <div class="footer">
        <div class="footer-list">
            <ul>
                <li id="bawah"><a href="index-cs.html" class="warna" style=" text-decoration:none;">Costumer Service</a> </li>
                <li>Vansboys © 2022</li>
            </ul>
        </div>

    </div>

</body>
<script src="script.js"></script>
</html>