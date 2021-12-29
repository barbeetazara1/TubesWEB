<?php
include 'koneksitubes.php'
?>
<?php
if (isset($_SESSION['email'])){
    echo "<script> alert ('Anda sudah login!');</script>";
    echo "<script> location = 'halamanutama.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginedit.css">
    <title>YUK WARNET</title>

</head>
<body>
    <form action="koneksitubes.php?proses_login" method="POST">
    <div class="gambar">
    <a href="nextmenu.php" class="tombol">YUK WARNET</a>
        <div class="loginbox">
            <h1>LOGIN</h1>
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Email" name="email">
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="passw">
            </div>
            <br>
        <button type="submit" class="btn btn1"> LOGIN </button> <br> <br>
        <div class="akun">
            Don't have account?
        </div>
        <a class="regis" href="pilihdaftar.php">Sign Up</a>
        </div>
    </div>    
    </form>

</body>
</html>