<?php
include "header.php";

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

// Check if the 'cari' parameter is set
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE ?";
    $stmt = $conn->prepare($query);
    if ($stmt) {
        $stmt->bind_param('s', '%' . $keyword . '%');
        $stmt->execute();
        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    } else {
        throw new Exception('Database query preparation failed: '. $conn->error);
    }
} else {
    $query = "SELECT * FROM mahasiswa";
    $data = fetchData($conn, $query);
}

// Display the data
$no = 1;
echo '<div class="contaiter">';
echo '<div class="row">';
echo '<div class="col-lg-12 mt-2" style="min-height: 500px;">';
echo '<div class="card">';
echo '<div class="card-header">';
echo 'Data Mahasiswa';
echo '</div>';
echo '<div class="card-body">';
echo '<div class="row">';
echo '<div class="col">';
echo '<a href="tambah_mahasiswa.php" class="btn btn-primary">Tambah Data</a>';
echo '</div>';
echo '<div class="col">';
echo '<form class="from-inline float-right" method="get">';
echo '<input type="text" class="form-control" name="keyword">';
echo '<input type="submit" class="btn btn-primary ml-1" name="cari" value="Cari">';
echo '</form>';
echo '</div>';
echo '</div>';
echo '<div class="row">';
echo '<div class="col">';
echo '<table class="table table-bordered table-striped">';
echo '<tr>';
echo '<th>No</th>';
echo '<th>Id Mahasiswa</th>';
echo '<th>Nama</th>';
echo '<th>No Hp</th>';
echo '<th>Alamat</th>';
echo '<th>Prodi</th>';
echo '<th>Jumlah Buku</th>';
echo '<th>Edit</th>';
echo '</tr>';
foreach ($data as $item) {
    echo '<tr>';
    echo '<td>' . $no++ . '</td>';
    echo '<td>' . $item['id_mahasiswa'] . '</td>';
    echo '<td>' . $item['nama'] . '</td>';
    echo '<td>' . $item['no_hp'] . '</td>';
    echo '<td>' . $item['alamat'] . '</td>';
    echo '<td>' . $item['prodi'] . '</td>';
    echo '<td>' . $item['jumlah_buku'] . '</td>';
    echo '<td><a href="hapus_mahasiswa.php?id=' . $item['id_mahasiswa'] . '" class="btn btn_danger">Hapus</a></td>';
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