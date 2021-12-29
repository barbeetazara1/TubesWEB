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
    <link rel="stylesheet" href="datawarnet.css">
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
                        <h2>Data Warnet</h2>	
        
                    </div>	
                    <div class="textnya">
                    <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Warnet</th>
                                        <th>Email</th>
                                        <th>Wilayah</th>
                                        <th>Password</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $data = $koneksi->select_warnet();
                                    $no = 1;
                                    ?>
                                    <?php foreach ($data as $row): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row['nama_warnet'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['wilayah'] ?></td>
                                        <td><?= $row['passw'] ?></td>
                                        
                                    </tr>
                                    <?php endforeach ?>     
                                </tbody>
                            </table>
                </div>
                
        
            </div>
            
            
        
        </body>
        </html>
    </form>
</body>
</html>