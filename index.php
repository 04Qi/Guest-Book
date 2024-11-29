<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
</head>
<body>
    <h1>Buku Tamu</h1>

    <?php 
    // Include the database connection file
    include 'koneksi.php'; 

    // Display the guestbook entries
    $query = "SELECT * FROM buku_tamu ORDER BY ID_BT DESC";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<ul>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<li>";
            echo "<b>" . $row["NAMA"] . "</b> - " . $row["EMAIL"] . "<br>";
            echo $row["ISI"];
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "Belum ada pesan.";
    }
    ?>

    <h2>Tulis Pesan</h2>
    <form method="post" action="proses.php">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name=" email" required><br><br>

        <label for="isi">Pesan:</label><br>
        <textarea id="isi" name="isi" required></textarea><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>