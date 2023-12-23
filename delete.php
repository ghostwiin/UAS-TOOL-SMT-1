<?php
include 'koneksi.php';

// Get the id of the row to delete
$id = $_GET['id'];

// Delete the row
$sql = "DELETE FROM reservasi WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header('Location: daftar.php'); // Redirect to index.php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>