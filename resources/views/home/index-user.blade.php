@extends('layouts.main')
<img src="assets/img/green.png" alt="Image" height="25%" width="120%" repeat-x top left;> 
@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .link_selection {
      cursor: pointer;
    }
  </style>
  <span style="font-size: 15pt;"> Selamat Datang User ! </span> </br> </br>
  <span style="font-size: 12pt;"> Gunakan Menu Yang Tersedia Untuk Mengakses Fitur Website !</span> </br> </br>
  <p style="font-size: 12pt;" align="justify" >
  Bapak/ibu yang kami hormati, Perkenankan kami, dari unit IT Support dalam rangka untuk meningkatkan kualitas pelayanan akademik di lingkungan IT Telkom Purwokerto
  kepada mahasiswa, stakeholder dan unit yang terkait, maka diharap mengisi form manajemen risiko jika ada kemungkinan risiko yang bisa menggangu proses akademik. Kami sangat mengharapkan
respon yang sebenarnya berdasarkan interaksi yang Bapak/Ibu alami dalam unit terkait.</p> </br>
<!DOCTYPE html>
<style>
button{
font-family: sans-serif;
font-size: 15px;
background:  	#228B22;
color: white;
border: white 3px solid;
border-radius: 5px;
padding: 5px 10px;
margin-top: 10px;
}
button:hover{
opacity:0.9;
}
</style>
<html>
<head>
</head>
<body>
<a href="add-data-risiko"><button>Tambah Data Risiko</button></a>
</body>
</html>
<div class="col-lg-12">
</div>
<div class="container" itemprop="description"  id="unitContainer">
</div>
  <!--nama file link.html-->
  <div class="d-flex align-items-left flex-column" id="unitContainer">
  </div>
  <!-- ======= Footer ======= -->
  <div class="credits">
  </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
@endsection

@section('js')
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/role/checkGuest.js"></script>
  <script src="assets/js/role/checkUser.js"></script>
  <script src="assets/js/home_user.js"></script>
@endsection
</body>
</html>