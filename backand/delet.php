<?php
include("koneksi/koneksi.php");

$id = $_GET['id'];
$query = "DELETE FROM sehat WHERE id = '$id'";
$result = mysqli_query($koneksi,$query) or die((mysqli_error($koneksi)));

if($result){
    echo "
    <script>
        alert('data siswa telah dihapus');
        window.location.href = 'catatan.php';
    </script>
    ";
    // eror
} else {
    echo"
    <script>
        alert('data siswa telah dihapus');
        window.location.href = 'catatan.php';
    </script>
    ";
}

if(isset($_GET['id'])){

    // get data dari table
    $p=mysqli_query($koneksi,"SELECT * FROM sehat WHERE id IN('{$_GET['id']}')");

    
    $query="DELETE FROM sehat WHERE id='{$_GET['id']}'";
    $hapus=mysqli_query($koneksi,$query);

    echo '<script>
    swal({
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success",
        button: "Aww yiss!",
      }).then(function (){
        window.location.href = "catatan.php" ;
      });
        </script>';

}
?>