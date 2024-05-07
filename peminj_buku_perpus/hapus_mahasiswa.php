<?php
    include "header.php";

    // Connect to the database
    $koneksi = mysqli_connect("localhost", "root", "", "peminj_buku_perpus");

    if (isset($_GET['id'])) {
        $id_mahasiswa = $_GET['id'];

        // Prepare the delete statement
        $stmt = $koneksi->prepare("delete from mahasiswa where id_mahasiswa=?");

        // Bind the parameter
        $stmt->bind_param("i", $id_mahasiswa);

        // Execute the statement
        $stmt->execute();
    }

    header('Location: data_mahasiswa.php');

    include "footer.php";
?>