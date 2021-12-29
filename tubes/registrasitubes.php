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
    <link rel="stylesheet" href="regis.css">
    <title>YUK WARNET</title>

</head>
<body>
    <form action="koneksitubes.php?proses_registrasi" method="POST">
        <div class="gambar">
        <a href="nextmenu.php" class="tombol">YUK WARNET</a>
            <div class="daftar">
                <h1>SIGN UP</h1>
                <div class="textbox">
                    <label>Nama Lengkap</label> <br>
                    <input type="text" placeholder="Masukkan nama anda" name="nama">
                </div>
                

                <div class="textbox">
                    <label>Email</label> <br>
                    <input type="email" placeholder="Masukkan email anda" name="email">
                </div>

                <div class="textbox">
                    <label>No Handphone</label> <br>
                    <input type="text" placeholder="Masukkan no anda" name="no_hp">
                </div>

                <div class="textbox">
                    <label>Password</label> <br>
                    <input type="password" placeholder="Masukkan password anda" name="passw">
                </div>

                <div class="textbox">
                    <label>Confirm Password</label> <br>
                    <input type="password" placeholder="Masukkan password anda lagi" name="passw2">
                </div>
            <button type="submit" class="btn btn1" name="selesai"> Sign Up </button> <br> <br>
            <div class="akun">
                <br> <br>
                Already have account?
            </div>
            <a class="login" href="logintubesutama.php">Login</a>
            </div>

        </div>

    </form>

</body>
</html>