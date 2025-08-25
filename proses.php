<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_data";

// Koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$Nama_lengkap = $_POST['Nama'];
$Email = $_POST['Email'];
$Pesan = $_POST['Pesan'];

// Simpan ke database
$sql = "INSERT INTO tbl_data (Nama, Email, Pesan) 
        VALUES ('$Nama', '$Email', '$Eesan')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
