<?php
// Function to insert data into the database
function insertData($koneksi, $id_mahasiswa, $nama, $no_hp, $alamat, $prodi, $jumlah_buku) {
    // Validate the input data
    if (empty($id_mahasiswa) || empty($nama) || empty($no_hp) || empty($alamat) || empty($prodi) || empty($jumlah_buku)) {
        throw new Exception('Input data cannot be empty');
    }

    // Prepare the statement
    $query = "INSERT INTO mahasiswa (id_mahasiswa, nama, no_hp, alamat, prodi, jumlah_buku) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);

    // Bind the parameters
    if ($stmt) {
        $stmt->bind_param("ssssss", $id_mahasiswa, $nama, $no_hp, $alamat, $prodi, $jumlah_buku);

        // Execute the statement
        $stmt->execute();

        // Check if the query was successful
        if ($stmt->affected_rows > 0) {
            return 'Data berhasil disimpan';
        } else {
            return 'Data gagal disimpan';
        }
    } else {
        throw new Exception('Database query preparation failed: '. $koneksi->error);
    }

    // Close the statement
    $stmt->close();
}

// Connect to the database
$koneksi = mysqli_connect("localhost", "root", "", "peminj_buku_perpus");

// Check the connection
if (!$koneksi) {
    echo "Koneksi Gagal";
} else {
    try {
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the form data
            $id_mahasiswa = $_POST["id_mahasiswa"] ?? '';
            $nama = $_POST["nama"] ?? '';
            $no_hp = $_POST["no_hp"] ?? '';
            $alamat = $_POST["alamat"] ??'';
            $prodi = $_POST["prodi"] ??'';
            $jumlah_buku = $_POST["jumlah_buku"] ??'';

            // Insert the data into the database
            $message = insertData($koneksi, $id_mahasiswa, $nama, $no_hp, $alamat, $prodi, $jumlah_buku);
            echo $message;

            // Get the ID of the last inserted row
            $id_mahasiswa = $koneksi->insert_id;

            // Display the ID of the last inserted row
            echo 'ID Mahasiswa: ' . $id_mahasiswa;
        }

        // Close the database connection
        $koneksi->close();
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>