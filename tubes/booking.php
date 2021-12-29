<?php
include 'koneksitubes.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking1.css">
    <title>YUK WARNET</title>
</head>
<body>
    <form action="koneksitubes.php?proses_booking" method="POST">
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
                        <h2>Book Now!</h2>        
                    </div>	
                
                    <div class="isi">
                        <h2>Book Me!</h2>
                        <span><input type="text" placeholder="Nama" name="nama" required></span> <br>
                        
                        <input type="date" name="tanggal" required>
                        <input type="time" name="jam_awal" class="awal" required>
                        <input type="time" name="jam_akhir" class="akhir" required> <br> <br>
                        <select name="id_warnet" class="wilayah">
                            <option selected disabled>Pilih Warnet</option>
                            <?php
                            $wilayah = $koneksi->select_warnet();
                            foreach ($wilayah as $row): ?>
                                <option value="<?=$row['id_warnet'] ?>"><?= $row['nama_warnet'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <select name="id_paket" class="paket">
                            <option selected disabled>Pilih Paket</option>
                            <?php
                            $paket = $koneksi->select_paket();
                            foreach ($paket as $row): ?>
                                <option value="<?=$row['id_paket'] ?>"><?= $row['nama_paket'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <select name="id_metode" class="pembayaran">
                            <option selected disabled>Pilih Metode Pembayaran</option>
                            <?php
                            $wilayah = $koneksi->select_pembayaran();
                            foreach ($wilayah as $row): ?>
                                <option value="<?=$row['id_metode'] ?>"><?= $row['jenis_pembayaran'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <button type="submit" class="btn btn1" name="selesaibook"> Submit </button>
                        
                    </div>

                </div>
                
        
            </div>
            
            
        
        </body>
        </html>
    </form>
</body>
</html>