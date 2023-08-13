<?php
session_start();
if (empty($_SESSION['login'])) {
    header('Location: login.php');
    header('Location: catatan.php');
    header('Location: index.php');
    header('Location: formulir_tambah_data.php');
    exit();
}
session_destroy()
?>

<?php
include "koneksi/koneksi.php";
include "header.php";
$q = "SELECT * FROM sehat";
$tampil = mysqli_query($koneksi,$q)
?>

<div class="container">
    <div class="card">
        <div class="text-center">
            <div id="">
	<div class="main-page">
	<div class="card-header" style="background-color: #222d32; display: flex; align-items: center; justify-content: space-between; padding: 10px; border-radius: 10px 10px 0 0;">
            <h3 style="color: #fff;">Data <span class="fw-bold">Prestasi</span></h3>
            <a class="btn btn-success fw-bold text-center" style="margin-left: auto; " href="formulir_tambah_data.php"><i class="fa fa-plus-circle fa-lg" aria-hidden="true" style="padding: 5px;"></i> <b>Tambah Data</b></a>
        </div>

            <div class="card-body">
                <table class="table table-hover">    
                    
                        <tr>
                            <thead>
                                <th scope="col" >#</th>
                                <th scope="col" >Tanggal</th>
                                <th scope="col" >Waktu</th>
                                <th scope="col" >Lokasi Yang Dikunjungi</th>
                                <th scope="col" >Suhu Tubuh</th>
                                <th scope="col" >Action</th>
                            </thead>
                        </tr>
                        <?php
$no = 1;
// Gunakan $no=1; dan id_profil diganti $no++ agar menjadi urut
while ($t = mysqli_fetch_assoc($tampil)):
?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo strftime('%d-%m-%Y', strtotime($t['tanggal'])); ?></td>
    <td><?php echo date('H:i', strtotime($t['waktu'])); ?></td>
    <td><?php echo $t['lokasi'] ?></td>
    <td><?php echo $t['suhu'] ?></td>
    <td>
        <a class="btn fw-bold text-center ms-auto" style="" href='delet.php?id=<?php echo $t['id'];?>'><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
        <a class="btn fw-bold text-center ms-auto" style="" href='prestasi.form_edit.php?id=<?php echo $t['id'];?>'><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>                         
    </td>    
</tr>
<?php endwhile; ?>

                </table>
            </div>
        </div>
	</div>
</div>
        </div>
    </div>
</div>


