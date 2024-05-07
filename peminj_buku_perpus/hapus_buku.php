<?php
    include "header.php";

    // Connect to the database
    $koneksi = mysqli_connect("localhost", "root", "", "peminj_buku_perpus");

    if (isset($_GET['id'])) {
        $id_buku = $_GET['id'];

        // Prepare the delete statement
        $stmt = $koneksi->prepare("delete from buku where id_buku=?");

        // Bind the parameter
        $stmt->bind_param("i", $id_buku);

        // Execute the statement
        $stmt->execute();
    }

    header('Location: data_buku.php');

    include "footer.php";
?>