<?php
// Function to insert data into the database
function insertData($koneksi, $id_buku, $judul_buku, $penulis) {
    // Validate the input data
    if (empty($id_buku) || empty($judul_buku) || empty($penulis)) {
        throw new Exception('Input data cannot be empty');
    }

    // Prepare the statement
    $query = "INSERT INTO buku (id_buku, judul_buku, penulis) VALUES (?, ?, ?)";
    $stmt = $koneksi->prepare($query);

    // Bind the parameters
    if ($stmt) {
        $stmt->bind_param("sss", $id_buku, $judul_buku, $penulis);

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
            $id_buku = $_POST["id_buku"] ?? '';
            $judul_buku = $_POST["judul_buku"] ?? '';
            $penulis = $_POST["penulis"] ?? '';

            // Insert the data into the database
            $message = insertData($koneksi, $id_buku, $judul_buku, $penulis);
            echo $message;
        }

        // Close the database connection
        $koneksi->close();
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>