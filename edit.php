<?php
include 'koneksi.php';

// Get the id of the row to edit
$id = $_GET['id'];

// Get the current data of the row
$sql = "SELECT nama, tanggal, waktu FROM reservasi WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// If the form is submitted, update the data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nama'];
    $date = $_POST['tanggal'];
    $time = $_POST['waktu'];

    $sql = "UPDATE reservasi SET nama = '$name', tanggal = '$date', waktu = '$time' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
		echo "<script>window.location.href='daftar.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Reservasi Restoran Nasi Padang Payakumbuah</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Reservasi Restoran Nasi Padang Payakumbuah</h1>
							<p>Sedap pol
							</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form action="edit.php?id=<?php echo $id; ?>" method="POST">
								<div class="form-group">
									<span class="form-label">Nama</span>
									<input class="form-control" type="text" name="nama" placeholder="Masukan Nama Anda" value="<?php echo $row['nama']; ?>">
								</div>
								<div class="form-group">
									<span class="form-label">Tanggal</span>
									<input class="form-control" type="date" name="tanggal" required value="<?php echo $row['tanggal']; ?>">
								</div>
								<div class="form-group">
									<span class="form-label">Waktu</span>
									<input class="form-control" type="time" name="waktu" required value="<?php echo $row['waktu']; ?>">
								</div>
								<div class="form-btn">
									<button type="submit" class="submit-btn">Perbaharui</button>
								</div>
							</form>
							<div class="form-btn" style="margin-top: 20px;">
								<a href="daftar.php">
									<button class="submit-btn">Kembali</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>