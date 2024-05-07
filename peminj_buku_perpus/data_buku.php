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
    $query = "SELECT * FROM buku WHERE judul_buku LIKE ?";
    $stmt = $conn->prepare($query);
    if ($stmt) {
        $stmt->bind_param('s', '%' . $keyword . '%');
        $stmt->execute();
        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    } else {
        throw new Exception('Database query preparation failed: '. $conn->error);
    }
} else {
    $query = "SELECT * FROM buku";
    $data = fetchData($conn, $query);
}

// Display the data
$no = 1;
echo '<div class="contaiter">';
echo '<div class="row">';
echo '<div class="col-lg-12 mt-2" style="min-height: 500px;">';
echo '<div class="card">';
echo '<div class="card-header">';
echo 'Data Buku';
echo '</div>';
echo '<div class="card-body">';
echo '<div class="row">';
echo '<div class="col">';
echo '<a href="tambah_buku.php" class="btn btn-primary">Tambah Data</a>';
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
echo '<th>Id Buku</th>';
echo '<th>Judul Buku</th>';
echo '<th>Penulis Buku</th>';
echo '<th>Aksi</th>';
echo '</tr>';
foreach ($data as $item) {
    echo '<tr>';
    echo '<td>' . $no++ . '</td>';
    echo '<td>' . $item['id_buku'] . '</td>';
    echo '<td>' . $item['judul_buku'] . '</td>';
    echo '<td>' . $item['penulis'] . '</td>';
    echo '<td><a href="hapus_buku.php?id=' . $item['id_buku'] . '" class="btn btn_danger">Hapus</a></td>';
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