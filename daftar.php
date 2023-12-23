<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <title>Reservasi Restoran Nasi Padang Payakumbuah</title>
</head>
<body>
    <div id="booking">
        <div id="app">
            <h1 style="color: white;">Daftar Reservasi Restoran Nasi Padang Payakumbuah</h1>
            <div id="reservation-list">
                <?php
                include 'koneksi.php';

                $sql = "SELECT id, nama, tanggal, waktu FROM reservasi";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<p style='color: black;'><strong>" . $row["nama"]. "</strong> - " . $row["tanggal"]. ", " . $row["waktu"]. "</p>
                            <div style='display: inline-block;'>
                                <form action='edit.php' method='get' style='display: inline;'>
                                    <input type='hidden' name='id' value='" . $row["id"] . "'>
                                    <input type='submit' value='Edit' style='color: black; background-color: white; font-family: \"Montserrat\", sans-serif;'>
                                </form>
                                <form action='delete.php' method='get' style='display: inline;'>
                                    <input type='hidden' name='id' value='" . $row["id"] . "'>
                                    <input type='submit' value='Delete' style='color: black; background-color: white; font-family: \"Montserrat\", sans-serif;'>
                                </form>
                            </div>";
                    }
                } else {
                    echo "<p style='font-weight: bold; color: black;'>Tidak ada reservasi!</p>";
                }
                $conn->close();
                ?>
            </div>
            <div class="form-btn" style="margin-top: 20px;">
                <a href="index.html" style="text-decoration: none;">
                    <button class="submit-btn" style="background-color: #d89d1e; color: white; font-family: 'Montserrat', sans-serif; font-weight: bold;">Kembali</button>
                </a>
            </div>
        </div>
    </div>
    <script>
        function addReservation(event) {
            const name = document.getElementById('nama').value;
            const date = document.getElementById('tanggal').value;
            const time = document.getElementById('waktu').value;

            if (!name || !date || !time) {
                event.preventDefault();
                alert('Silakan isi semua kolom');
            }
        }
    </script>
</body>
</html>
