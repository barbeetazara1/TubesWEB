<?php
include 'koneksitubes.php'
?>
<?php 
if (!isset($_SESSION['email'])){
    echo "<script> alert ('Sesi anda sudah habis!');</script>";
    echo "<script> location = 'pilihlogin.php';</script>";
} 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="databookingg.css">
    <title>YUK WARNET</title>
</head>
<body>
    <form>
            <div class="boxbar">
                <div class="navbar">
                        <nav>
                            <ul>
                                <li><a href="koneksitubes.php?proses_logout">Logout</a></li>
                                <li><a href="databooking.php">History Booking</a></li>
                                <li><a href="datawarnet.php">Warnet</a></li>
                                <li><a href="datauser.php">User</a></li>
                                <li><a href="halamanutamaadmin.php">Home</a></li>
                            </ul>
                        </nav>
                </div>
                <div class="kontent">
                    <div class="gambar">
                        <h2>Data Booking</h2>	
                    </div>	
                    <div class="textnya">
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Jam Awal</th>
                                        <th>Jam Akhir</th>
                                        <th>Nama Warnet</th>
                                        <th>Paket</th>
                                        <th>Metode Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $data = $koneksi->select_booking();
                                    $no = 1;
                                    ?>
                                    <?php foreach ($data as $row): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row['tanggal'] ?></td>
                                        <td><?= $row['jam_awal'] ?></td>
                                        <td><?= $row['jam_akhir'] ?></td>
                                        <td><?= $row['nama_warnet'] ?></td>
                                        <td><?= $row['nama_paket'] ?></td>
                                        <td><?= $row['jenis_pembayaran'] ?></td>
                                        
                                    </tr>
                                    <?php endforeach ?>     
                                </tbody>
                            </table>
      </div>
                </div>
                
        
            </div>
               
        </body>
        </html>
    </form>
</body>
</html>