<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpustakaan";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi untuk menambahkan peminjaman
function peminjaman_buku($conn, $id_buku, $id_mahasiswa) {
    $tanggal_peminjaman= date("Y-m-d");
    $tanggal_pengembalian= date('Y-m-d', strtotime($tanggal_peminjaman . ' + 7 days')); // Contoh: peminjaman selama 7 hari

    $sql = "INSERT INTO peminjaman_buku (id_buku, id_mahasiswa, tanggal_peminjaman, tanggal_pengembalian) VALUES ('$id_buku', '$id_mahasiswa', '$tanggal_peminjaman', '$tanggal_pengembalian')";

    if ($conn->query($sql) === TRUE) {
        echo "Peminjaman berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Contoh pemanggilan fungsi tambahPeminjaman
$id_buku = $_POST['id_buku']; // ID buku yang dimasukkan oleh pengguna (harus divalidasi)
$id_mahasiswa = $_POST['id_mahasiswa']; // ID mahasiswa yang dimasukkan oleh pengguna (harus divalidasi)

peminjaman_buku($conn, $id_buku, $id_mahasiswa);

// Tutup koneksi
$conn->close();
?>
