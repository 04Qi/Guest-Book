<?php
include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $isi = mysqli_real_escape_string($conn, $_POST['isi']);

    $query = "INSERT INTO buku_tamu (NAMA, EMAIL, ISI) VALUES ('$nama', '$email', '$isi')";

    if (mysqli_query($conn, $query)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>