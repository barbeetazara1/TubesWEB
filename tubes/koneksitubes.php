<?php 

class Koneksi {
    var $conn;
	function __construct()
	{
        session_start();
		$servername = "localhost";
		$username = "root";
		$password = "";
		$databasename = "tubes";
		$this->conn = mysqli_connect($servername, $username, $password, $databasename);
	}

    public function proses_login()
	{
		$email = $_POST['email'];
        $passw = $_POST['passw'];

		$cek_email = "SELECT * FROM tubes1 WHERE email= '$email'";
		//$cek_email = "SELECT * FROM warnet WHERE email='".$email."' AND passw='".$passw."'";
        $result_email = mysqli_query($this->conn, $cek_email);
		
		//cek email
        if(mysqli_num_rows($result_email)===1){
            //cek password
            $row = mysqli_fetch_assoc($result_email);
            if(password_verify($passw, $row["passw"])){
                //set session
                session_start();
                $_SESSION['email']= $email;

                echo "<script>alert('Login anda berhasil!'); location='halamanutama.php';</script>;";
                exit;
            }
        }else{
            echo "<script>alert('Username atau Password Salah!'); location='logintubesutama.php';</script>;";

        }
		if($result_email->fetch_assoc() > 0 ) {
			$_SESSION['email'] = $email;
			
			header("location: halamanutama.php");
		} else {
			echo "<script>alert('Username atau Password Salah!');</script>";
			echo "<script>location='logintubesutama.php'; </script>";
		}

	}

    public function proses_logout()
	{
		session_destroy();
		echo "<script>alert('Anda Berhasil Logout');</script>";
		echo '<script>window.location="pilihlogin.php"</script>';
	}

	public function select_wilayah()
	{
		$sql = "SELECT * FROM nama_wilayah";
		return $this->conn->query($sql);
	}

	public function select_pembayaran()
	{
		$sql = "SELECT * FROM pembayaran";
		return $this->conn->query($sql);
	}

	public function select_paket()
	{
		$sql = "SELECT * FROM paket";
		return $this->conn->query($sql);
	}

	public function select_user()
	{
		$sql = "SELECT * FROM tubes1";
		return $this->conn->query($sql);
	}

	public function select_warnet()
	{
		$sql = "SELECT * FROM warnet JOIN nama_wilayah ON warnet.id_wilayah = nama_wilayah.id_wilayah";
		//$sql = "SELECT * FROM warnet";
		//$sql = "SELECT * FROM warnet JOIN nama_wilayah ON warnet.id_wilayah = nama_wilayah.id_wilayah";
		return $this->conn->query($sql);
	}

	public function select_booking()
	{
		$sql = "SELECT * FROM booking JOIN warnet ON booking.id_warnet = warnet.id_warnet JOIN paket ON booking.id_paket = paket.id_paket JOIN pembayaran ON booking.id_metode = pembayaran.id_metode" ;
		//$sql = "SELECT * FROM booking";
		return $this->conn->query($sql);
	}

	public function proses_registrasi()
	{
		$nama = $_POST['nama'];
    	$email = $_POST['email'];
    	$no_hp= $_POST['no_hp'];
		$passw = $_POST['passw'];
		$passw2 = $_POST['passw2'];

		//cek email ganda
		$cek_email = "SELECT email FROM tubes1 WHERE email = '$email'";
        $result_email = mysqli_query($this->conn, $cek_email);

		if(mysqli_fetch_assoc($result_email)){
            echo "<script>alert('Email yang anda masukkan sudah terpakai!'); location='registrasitubes.php';</script>;";
            return false;
        }

		//cek password
        if($passw !== $passw2){
            echo "<script>alert('Password anda tidak sesuai'); location='registrasitubes.php';</script>;";
            return false;
        }

		//enkripsi password
        $passw = password_hash($passw, PASSWORD_DEFAULT);

		//tambah data ke database
        $sql = "INSERT INTO tubes1 VALUES ('', '$nama','$email','$no_hp','$passw')";
        $result = mysqli_query($this->conn, $sql);

        if ($result){
            echo "<script>alert('Registrasi Berhasil'); location='logintubesutama.php';</script>;"; 
            
        } else{
            echo "<script>alert('Registrasi Gagal!'); location='registrasitubes.php';</script>;";
        }
	}

	public function proses_registrasiwarnet()
	{
		$nama_warnet = $_POST['nama_warnet'];
		$email = $_POST['email'];
		$id_wilayah = $_POST['id_wilayah'];
		$passw =$_POST['passw'];
		$passw2 =$_POST['passw2'];

		//cek email ganda
		$cek_email = "SELECT email FROM warnet WHERE email = '$email'";
        $result_email = mysqli_query($this->conn, $cek_email);

		if(mysqli_fetch_assoc($result_email)){
            echo "<script>alert('Email yang anda masukkan sudah terpakai!'); location='registrasiwarnet.php';</script>;";
            return false;
        }

		//cek password
        if($passw !== $passw2){
            echo "<script>alert('Password anda tidak sesuai'); location='registrasiwarnet.php';</script>;";
            return false;
        }

		//enkripsi password
        $passw = password_hash($passw, PASSWORD_DEFAULT);

		//tambah data ke database
        $sql = "INSERT INTO warnet VALUES ('','$nama_warnet','$email','$id_wilayah','$passw')";
        $result = mysqli_query($this->conn, $sql);

        if ($result){
            echo "<script>alert('Registrasi Berhasil'); location='loginadmin.php';</script>;"; 
            
        } else{
            echo "<script>alert('Registrasi Gagal!'); location='registrasiwarnet.php';</script>;";
        }

	}

	public function proses_booking() /*blom selesai */
	{
		$tanggal = $_POST['tanggal'];
		$jam_awal = $_POST['jam_awal'];
		$jam_akhir = $_POST['jam_akhir'];
        $warnet = $_POST['id_warnet'];
		$paket = $_POST['id_paket'];
		$pembayaran = $_POST['id_metode'];
		$sql = "INSERT INTO `booking`(`tanggal`,`jam_awal`,`jam_akhir`,`id_warnet`,`id_paket`, `id_metode`) VALUES ('$tanggal','$jam_awal','$jam_akhir','$warnet','$paket', '$pembayaran')";
        $this->conn->query($sql);
		/* header("location : berhasilbook.php"); */
		echo "<script>alert('Booking Berhasil'); location='halamanutama.php';</script>;";

		/* if($result)
		{
			$_SESSION['status'] = 'Data Booking Sudah Masuk';
			header("Location : berhasilbook.php");

		}
		else
		{
			$_SESSION['status'] = 'Data Booking Tidak Masuk';
			header("Location : berhasilbook.php");

		} */
	}

	public function proses_loginadmin() /*blom selesai */
	{
		$email = $_POST['email'];
        $passw = $_POST['passw'];

		$cek_email = "SELECT * FROM warnet WHERE email= '$email'";
		//$cek_email = "SELECT * FROM warnet WHERE email='".$email."' AND passw='".$passw."'";
        $result_email = mysqli_query($this->conn, $cek_email);
		
		//cek email
        if(mysqli_num_rows($result_email)===1){
            //cek password
            $row = mysqli_fetch_assoc($result_email);
            if(password_verify($passw, $row["passw"])){
                //set session
                session_start();
                $_SESSION['email']= $email;;
                echo "<script>alert('Login anda berhasil!'); location='halamanutamaadmin.php';</script>;";
                exit;
            }
        }else{
            echo "<script>alert('Username atau Password Salah!'); location='loginadmin.php';</script>;";

        }
		if($result_email->fetch_assoc() > 0 ) {
			$_SESSION['email'] = $email;
			header("location: halamanutamaadmin.php");
		} else {
			echo "<script>alert('Username atau Password Salah!');</script>";
			echo "<script>location='loginadmin.php'; </script>";
		}
	}

}



$koneksi = new Koneksi();
if (isset($_GET['proses_login'])){
    $koneksi->proses_login();
}

if (isset($_GET['proses_logout'])){
    $koneksi->proses_logout();
}

if (isset($_GET['proses_registrasi'])){
    $koneksi->proses_registrasi();
}

if (isset($_GET['proses_registrasiwarnet'])){
    $koneksi->proses_registrasiwarnet();
}

if (isset($_GET['proses_booking'])){
    $koneksi->proses_booking();
}

if (isset($_GET['proses_loginadmin'])){
    $koneksi->proses_loginadmin();
}



?>