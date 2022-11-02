<?php
include 'koneksi.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telepon = isset($_POST['telepon']) ? $_POST['telepon'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';
    $pesan = isset($_POST['pesan']) ? $_POST['pesan'] : '';
    $file = isset($_POST['file']) ? $_POST['file'] : '';

    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO cs VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nama, $email, $telepon, $status, $pesan, $file]);
    // Output message
    $msg = 'Created Successfully!';
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

<?=template_header('Create')?>
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
            <h2>Trade</h2>
        </div>
        <div class="content_update">
        <a href="read.php"><i class="fas fa-address-book"></i>LIHAT DATA</a>
    <form action="read.php" method="post" class="form">
        
        <ul>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class ="form">

        </ul>

        <label for="email">Email</label>

        <input type="text" name="email" id="email" class = "form">

        <ul>
        <label for="telepon">Notlp</label>
        <input type="text" name="telepon" id="telepon" class = "form">
        </ul>

        <ul>
        <label for="status">status</label>
        <input type="text" name="status" id="status" class= "form">
        </ul>

        <ul>
        <label for="pesan">pesan</label>
        <input type="text" name="pesan" id="pesan" class = "form">
        </ul>

        <ul>
            <label for="file">Masukkan File Jika Ada</label>
        <input type="file" id="file" name="file">
        </ul>
        <input type="submit" value="Create" class="submit-button">
        <br>
    </form>
    <br>
    
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>


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

</body>
<script src="script.js"></script>
</html>



<?=template_footer()?>