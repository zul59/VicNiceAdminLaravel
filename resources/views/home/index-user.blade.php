@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .link_selection {
      cursor: pointer;
    }
  </style>
</head>
<center> <h2>Sistem Informasi Manajemen Risiko IT Telkom Purwokerto</h2> </center>
<body>
  <div class="pagetitle">
  </ol>
  </nav>
  </div><!-- End Page Title -->
  <div class="container">
  <h2>
  Silahkan Pilih Unit
  </h2>
  <form class="form-horizontal" action="/action_page.php">
  <div>
  <button class="btn-tambah"><a href="add-component?type=unit" class="link-tambah">Tambah Unit</a></button>
  </div>
  <br />
  <!--nama file link.html-->
  <div class="d-flex align-items-left flex-column" id="unitContainer">
  </div>
  </br>
  </br>
  </br>
  </div>
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