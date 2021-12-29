<?php
include 'koneksitubes.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pembayaran.css">
    <title>YUK WARNET</title>
</head>
<body>
    <form action="#" method="POST">
    <a href="#" class="tombol">YUK WARNET</a>
            <div class="boxbar">
                <div class="navbar">
                        <nav>
                            <ul>
                                <li><a href="koneksitubes.php?proses_logout">Logout</a></li>
                            </ul>
                        </nav>
                </div>
                <div class="kontent">
                    <div class="gambar">
                        <h2>Pembayaran</h2>        
                    </div>	
                
                    <div class="isi">
                        <h2>Metode Pembayaran</h2>
                        <span><input type="number" placeholder="Total Bayar" name="nama" required></span> <br>
                        <select name="id_metode" class="pembayaran">
                            <option selected disabled>Pilih Metode Pembayaran</option>
                            <?php
                            $wilayah = $koneksi->select_pembayaran();
                            foreach ($wilayah as $row): ?>
                                <option value="<?=['id_metode'] ?>"><?= $row['jenis_pembayaran'] ?></option>
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