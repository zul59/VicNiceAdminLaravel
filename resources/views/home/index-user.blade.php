@extends('layouts.main')
<img src="assets/img/pink.png" alt="Image" height="25%" width="120%" repeat-x top left;> 
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
  Risiko adalah suatu ketidakpastian dimasa yang akan datang tentang kerugian yang harus dipikul oleh
organisasi. Risiko mengandung tiga unsur pembentukan risiko, yaitu : kemungkinan kejadian
atau peristiwa, dampak atau konsekuensi (jika terjadi,risiko akan membawa akibat atau konsekuensi),kemungkinan kejadian (risiko masih berupa
kemungkinan atau diukur dalam bentuk probabilitas. Pada suatu instansi pendidikan, risiko bisa timbul dikarenakan oleh pihak eksternal dan pihak internal.
Risiko yang berasal dari pihak eksternal dan internal. Risiko yang berasal dari pihak eksternal diantaranya
diberlakukannya peraturan perundang-undangan baru, perkembangan teknologi, bencana alam dan gangguan keamanan. Sementara itu risiko yang
bersumber dari pihak internal diantaranya adanya keterbatasan dana operasional, sumber daya manusia. yang tidak kompeten, peralatan yang tidak memadai,
kebijaan prosedur yang tidak jelas, suasana kerja yang tidak kondusif, adanya unsur sabotase dari pegawai dan sebagainya. Dengan adanya sistem informasi manajemen risiko ini 
diharapkan user bisa terbantu mengenai adanya risiko yang ada di IT Telkom Purwokerto.</p> </br>
<!DOCTYPE html>
<style>
button{
font-family: sans-serif;
font-size: 15px;
background: #ff26a0;
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