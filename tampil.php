<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_data"; // nama database kamu

// Koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari tabel tbl_data
$sql = "SELECT * FROM tbl_data";
$result = $conn->query($sql);

// Tampilkan hasil
echo "<h2>Data Pengunjung</h2>";
echo "<table border='1' cellpadding='10'>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
        </tr>";

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Nama']}</td>
                <td>{$row['Email']}</td>
                <td>{$row['Pesan']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='3'>Belum ada data</td></tr>";
}
echo "</table>";

$conn->close();
?>
