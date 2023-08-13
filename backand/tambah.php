<?php
include("koneksi/koneksi.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $tanggal_input = $_POST['tanggal'];
    $waktu_input = $_POST['waktu'];
    $lokasi = $_POST['lokasi'];
    $suhu = $_POST['suhu'];

    // Combine the selected date and time into a single datetime format
    $datetime = $tanggal_input . ' ' . $waktu_input;

    // Convert to MySQL datetime format (YYYY-MM-DD HH:MM:SS)
    $mysql_datetime = date('Y-m-d H:i:s', strtotime($datetime));
    
    $sql = "INSERT INTO sehat(tanggal, waktu, lokasi, suhu) VALUES ('$tanggal_input', '$mysql_datetime', '$lokasi', '$suhu')";
    
    // Menjalankan query
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                window.location.href = 'catatan.php';
            </script>";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan, periksa kembali!');
                window.location.href = 'formulir_tambah_data.php';
            </script>" . mysqli_error($koneksi);
    }
}
?>
