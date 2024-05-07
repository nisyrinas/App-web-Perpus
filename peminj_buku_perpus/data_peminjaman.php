<?php
include "header.php";

$data = fetchData($conn, $query);
// Function to fetch data from the database
function fetchData($conn, $query) {
    $result = mysqli_query($conn, $query);
    if (!$result) {
        throw new Exception('Database query failed: '. mysqli_error($conn));
    }
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}


// Display the data
$no = 1;
echo '<div class="contaiter">';
echo '<div class="row">';
echo '<div class="col-lg-12 mt-2" style="min-height: 500px;">';
echo '<div class="card">';
echo '<div class="card-header">';
echo 'Data Transaksi Peminjaman Buku';
echo '</div>';
echo '<div class="card-body">';
echo '<div class="row">';
echo '<div class="col">';
echo '<a href="tambah_peminjaman.php" class="btn btn-primary">Tambah Data</a>';
echo '<div class="row">';
echo '<div class="col">';
echo '<table class="table table-bordered table-striped">';
echo '<tr>';
echo '<th>No</th>';
echo '<th>Id Peminjaman</th>';
echo '<th>Id Mahasiswa</th>';
echo '<th>Id Buku</th>';
echo '<th>Jmlh Buku</th>';
echo '<th>Tgl Pinjam</th>';
echo '<th>Tgl kembali</th>';
echo '<th>Status</th>';
echo '<th>Edit</th>';
echo '</tr>';
foreach ($data as $item) {
    echo '<tr>';
    echo '<td>' . $no++ . '</td>';
    echo '<td>' . $item['id_peminjaman'] . '</td>';
    echo '<td>' . $item['id_mahasiswa'] . '</td>';
    echo '<td>' . $item['id_buku'] . '</td>';
    echo '<td>' . $item['jumlah_buku'] . '</td>';
    echo '<td>' . $item['tanggal_peminjaman'] . '</td>';
    echo '<td>' . $item['tanggal_pengembalian'] . '</td>';
    echo '<td>' . $item['status_pengembalian'] . '</td>';
    echo '<td><a href="hapus_peminjaman.php?id=' . $item['id_peminjaman'] . '" class="btn btn_danger">Hapus</a></td>';
    echo '</tr>';
}
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

include "footer.php";