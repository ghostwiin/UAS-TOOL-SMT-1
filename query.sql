CREATE DATABASE restoranpadang;
USE restoranpadang;
CREATE TABLE reservasi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    tanggal DATE NOT NULL,
    waktu TIME NOT NULL
);