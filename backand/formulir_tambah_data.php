<?php
session_start();
if (empty($_SESSION['login'])) {
    header('Location: login.php');
    header('Location: catatan.php');
    header('Location: index.php');
    header('Location: formulir_tambah_data.php');
    exit();
}
session_destroy()?>
<?php
include "koneksi/koneksi.php";
include "header.php";
?>
<div id="page">
	<div class="main-page">
        <div class="card">
           
            <div class="card-body">
                    <form action="tambah.php" method="POST">
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal" style="border-radius: 5px;">
            </div>
            <div class="form-group">
                <label for="waktu">Waktu</label>
                <input type="time" class="form-control" name="waktu" id="waktu" style="border-radius: 5px;">
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi Yang Di Kunjungi</label>
                <input type="text" class="form-control" name="lokasi" id="lokasi" style="border-radius: 5px;">
            </div>
            <div class="form-group">
                <label for="suhu">Suhu Tubuh</label>
                <input type="number" class="form-control" name="suhu" id="suhu" style="border-radius: 5px;">
            </div>
            <br>
            <br>
            <div>
                <input type="submit" value="submit" name="submit" class="btn btn-btn-sm btn-primary" style="border-radius: 5px;">
            </div>
        </form>
            </div>
        </div>
    </div>
</div>



