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
                <li><a href="index-trade.html" class="warna" style=" text-decoration:none;"> Trade </a> </li>
                <li><a href="index-market.html" class="warna" style=" text-decoration:none;  "> Market </a></li>
                <li><a href="index-aboutus.html" class="warna" style=" text-decoration:none; "> About Us </a></li>
                
                <div class=toggle onclick="myFunction()">
                    <div class="circle"></div>
                    <div class="toggle-moon"><i class="fas fa-moon"></i></div>
                    <div class="toggle-sun"><i class="fas fa-sun"></i></div>
                    
                </div>
            </ul>
        </div>

    </div>

    <div class="main">
    <div class="main-masukan">
            <?php
                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $telepon = $_POST['telepon'];
                    $status = $_POST['status'];
                    $pesan = $_POST['pesan'];
                    $file	= array('png','jpg');

                    echo "<ul>";
                    echo "<li>Username     : $username</li>";
                    echo "<li>Email        : $email</li>";
                    echo "<li>Telepon      : $telepon</li>";
                    echo "<li>Status       : $status</li>";
                    echo "<li>Pesan        : $pesan</li>";
                    echo "<li>File         : $file</li>";
                    
                }
            ?>
        </div>


    </div>





    </div>

    <div class="footer">
        <div class="footer-list">
            <ul>
                <li id="bawah"><a href="index-cs.php" class="warna" style=" text-decoration:none;">Costumer Service</a> </li>
                <li>Vansboys © 2022</li>
            </ul>
        </div>
        
    </div>
    <script src="script.js"></script>
</body>

</html>