

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
                <li><a href="index.html" class="warna" style=" text-decoration:none;"> Home </a> </li>
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
        <div class="aboutus">
            <h2>Costumer Service</h2>
        </div>

            <div class="contact-form">
                <form action="read.php" name="form" method="POST">
            <br>
            <br>

                <p>Username *</p>
                <input type="text" name="username" placeholder="masukkan username anda"class="form-text">
                <br>
                <br>
                </div>

                <p>Email *</p>
                <input type="email" name="email" placeholder="masukkan email anda" class="form-text">
                <br>
                <br>

                <p>Telepon</p>
                <input type="number" name="telepon" class="form-text">
                <br>
                <br>

                <p>Status</p>

                <li><input type="radio" name="status" value="trader">Trader </li>
                <li><input type="radio" name="status" value="nft">Buy And Sell NFT</li>


                <br>
                <br>
                <br>
                <br>
                <br>
                
                <p>Pesan (Wajib Diisi)</p>
                <textarea cols="40" rows="8" name="pesan"></textarea>
                <br>
                <br>

                <input type="submit" id="contact-submit" name="submit" value="Kirim" class="submit-button">
                <script>
                    document.getElementById("contact-submit").addEventListener("click", function() {
                        alert("Terima Kasih Atas Masukan Anda!!!");
                    });
                </script>             
            </form>
            </div>
        </div>
    </div>



    </div>

    <div class="footer">
        <div class="footer-list">
            <ul>
                <li>Vansboys © 2022</li>
            </ul>
        </div>

    </div>

</body>
<script src="script.js"></script>
</html>