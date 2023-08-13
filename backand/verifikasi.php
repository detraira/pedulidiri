<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['nama'];
    $password = md5($_POST['kata_sandi']); // Hash the password with MD5

    // Connect to the database
    include "koneksi/koneksi.php";

    // Retrieve user data based on email
    $query = "SELECT * FROM pengguna WHERE nama = ? AND kata_sandi = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
       // After successful login verification
$_SESSION['login'] = true;
$_SESSION['nama'] = $user['nama'];
$_SESSION['message'] = 'Berhasil Login Ke Dalam sistem.';

        header("Location: index.php");
        exit();
    } else {
        echo '<script>alert("Nama pengguna atau kata sandi salah.")
                window.location.href="login.php"</script>';
      
        exit();
    }
}
?>