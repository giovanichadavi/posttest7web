<?php
include 'koneksi.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $telepon= isset($_POST['telepon']) ? $_POST['telepon'] : '';
        $status = isset($_POST['status']) ? $_POST['status'] : '';
        $pesan = isset($_POST['pesan']) ? $_POST['pesan'] : '';
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE cs SET id = ?, nama = ?, email = ?, telepon = ?, status =? , pesan = ? WHERE id = ?');
        $stmt->execute([$id, $nama, $email, $telepon, $status, $pesan, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM cs WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>



<?=template_header('Read')?>

<div class="content update">
	<h2>Update Contact #<?=$contact['id']?></h2>
    <form action="update.php?id=<?=$contact['id']?>" method="post">
        <label for="id">ID</label>
        <label for="nama">Nama</label>
        <input type="text" name="id" value="<?=$contact['id']?>" id="id">
        <input type="text" name="nama" value="<?=$contact['nama']?>" id="nama">
        <label for="email">Email</label>
        <label for="telepon">Telepon</label>
        <input type="text" name="email" value="<?=$contact['email']?>" id="email">
        <input type="text" name="telepon" value="<?=$contact['telepon']?>" id="telepon">
        <label for="status">status</label>
        <input type="text" name="status" value="<?=$contact['status']?>" id="title">
        <label for="pesan">pesan</label>
        <input type="text" name="pesan" value="<?=$contact['pesan']?>" id="title">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>