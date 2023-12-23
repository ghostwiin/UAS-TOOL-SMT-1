<?php
include 'koneksi.php';

$name = $_POST['nama'];
$date = $_POST['tanggal'];
$time = $_POST['waktu'];

$sql = "INSERT INTO reservasi (nama, tanggal, waktu) VALUES ('$name', '$date', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Reservasi Berhasil!');window.location.href='index.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>