<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "tubes";
$conn = mysqli_connect($servername, $username, $password, $databasename);
if (isset($_POST['selesai'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp= $_POST['no_hp'];
    $passw= md5($_POST['passw']);
    $sql = "INSERT INTO `tubes1`(`nama`,`email`,`no_hp`,`passw`) VALUES ('$nama','$email','$no_hp','$passw')";
    $result = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="selesaii.css">
    <title>Game Centre</title>
</head>
<body>
    <form action="logintubesutama.php">
    <div class="gambar">
        <div class="konten-area">
            <h1>YUK WARNET</h1>
            <div class="konten">
                WELCOME BACK! <br>
                TO YUK WARNET
                <button type="submit"> Next</button>
            </div>
        </div>
    </div>
    </form>
</body>
</html>
    
</body>
</html>