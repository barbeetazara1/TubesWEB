<?php
include 'koneksitubes.php'
?>
<?php
if (!isset($_SESSION['email'])){
    echo "<script> alert ('Sesi anda sudah habis!');</script>";
    echo "<script> location = 'logintubesutama.php';</script>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="halaman.css">
    <title>YUK WARNET</title>
</head>
<body>
    <form>
    <a href="halamanutama.php" class="tombol">YUK WARNET</a>
            <div class="boxbar">
                <div class="navbar">
                        <nav>
                            <ul>
                                <li><a href="koneksitubes.php?proses_logout">Logout</a></li>
                                <li><a href="about2.php">About</a></li>
                                <li><a href="pricelist.php">Pricelist</a></li>
                                <li><a href="booking.php">Book</a></li>
                                <li><a href="halamanutama.php">Home</a></li>
                            </ul>
                        </nav>
                </div>
                <div class="kontent">
                    <div class="gambar">
                        <h2>HOME</h2>	
        
                    </div>	
                    <div class="textnya">
                        <h2>Why Us?</h2>
                        <p>We provide the best gaming services in Indonesia, with good quality gaming 
                            performance <br> and a comfortable place to play! Come and play!
                        </p>
                        <div class="kontengambar">
                            <img src="pc.jpg" alt="" class="pict">
                            <img src="gaming.jpg" alt="" class="pict2">
                            <p class="isi">Good Quality Gaming Performance</p>
                            <p class="isi2">The Best Gaming Equipment</p>
                        </div>
                    </div>
                </div>
                
        
            </div>
            
            
        
        </body>
        </html>
    </form>
</body>
</html>