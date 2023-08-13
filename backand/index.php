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
?>

<div class="container" style="background-attachment: 748DA0;">
    <div class="card">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/mg4.png" style="height:600px; width: 500px;" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/mg3.jpg" style="height:600px; width: 500px;" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/mg2.jpg" style="height:600px; width: 500px;" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/mg1.png" style="height:600px; width: 500px;" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
</div>

<br>
<br>
<br>
<div class="container">
<div class="d-flex justify-content-Evenly">
    <div class="card ">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="catatan.php">
            <i class="fas fa-sign-out-alt"></i>   ISI CATATAN PERJALANAN
          </a>
        </li>
      </ul>
    </div>
</div>
</div>
<!-- #region -->

   



