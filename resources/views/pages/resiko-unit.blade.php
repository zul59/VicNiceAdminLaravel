@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="assets/css/risikounit.css" rel="stylesheet">
</head>

<body>

  <main>

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index"></a></li>

        </ol>
      </nav>
      <!DOCTYPE html>
      <html>

      <head>
        <title>Tabel di HTML</title>
      </head>
      <html lang="en">
<h2 style="font-size: 2rem; margin-left: 14rem;">
        Sistem Informasi Manajemen Risiko IT Telkom Purwokerto
    </h2>

      <body>
      <form name=”daftarisi”>
        <select id="ddlUnitName" name=”menu” style=”width:180px”>
            <!-- <option selected disabled="true">List Unit</option> -->
            <option value="All" selected>All</option>
            <option value="Sekpim">Sekpim</option>
            <option value="SPM">SPM</option>
            <option value="Humas">Humas</option>
            <option value="BAA">BAA</option>
            <option value="Perpustakaan">Perpustakaan</option>
            <option value="Inovasi">Inovasi</option>
            <option value="Pusat Bahasa">Pusat Bahasa</option>
            <option value="LPPM">LPPM</option>
            <option value="Finance">Finance</option>
            <option value="SDM">SDM</option>
            <option value="IT Support">IT Support</option>
            <option value="Logistik">Logistik</option>
            <option value="PMB">PMB</option>
            <option value="Kemahasiswaan">Kemahasiswaan</option>
            <option value="CDC">CDC</option>
            <option value="BK">BK</option>
            <option value="ITTP">ITTP</option>
        </select>
    </form>
</br>
        <table id="tableResiko" style="display: block; overflow-x: scroll; white-space: nowrap; border: 1">
          <colgroup>
            <col style='background-color:orange;width:100px;'>
            </col>
            <col style='background-color:#ed752f;width:100px;'>
            </col>
            <col style='background-color:#ed752f;width:150px;'>
            </col>
            <col style='background-color:#ed752f;width:300px;'>
            </col>
            <col style='background-color:#ed752f;width:350px;'>
            </col>
            <col style='background-color:#ed752f;width:500px;'>
            </col>
            <col style='background-color:#ed752f;width:250px;'>
            </col>
            <col style='background-color:#ed752f;width:500px;'>
            </col>
            <col style='background-color:#ed752f;width:1000px;'>
            </col>
            <col style='background-color:#ed752f;width:100px;'>
            </col>
            <col style='background-color:#ed752f;width:100px;'>
            </col>
            <col style='background-color:#ed752f;width:100px;'>
            </col>
            <col style='background-color:#ed752f;width:100px;'>
            </col>
            <col style='background-color:#69bbc4;width:100px;'>
            </col>
            <col style='background-color:#69bbc4;width:100px;'>
            </col>
            <col style='background-color:#69bbc4;width:100px;'>
            </col>
            <col style='background-color:#69bbc4;width:100px;'>
            </col>
            <col style='background-color:#95b4f3;width:100px;'>
            </col>
            <col style='background-color:#95b4f3;width:100px;'>
            </col>
            <col style='background-color:#95b4f3;width:100px;'>
            </col>
            <col style='background-color:#69bbc4;width:100px;'>
            </col>
            <col style='background-color:#69bbc4;width:100px;'>
            </col>
            <col style='background-color:#69bbc4;width:100px;'>
            </col>
            <col style='background-color:#69bbc4;width:100px;'>
            </col>
            <col style='background-color:#f1bf42;width:100px;'>
            </col>
            <col style='background-color:#f1bf42;width:100px;'>
            </col>
            <col style='background-color:#69bbc4;width:100px;'>
            </col>
            <col style='background-color:#69bbc4;width:100px;'>
            </col>
            <col style='background-color:#69bbc4;width:100px;'>
            </col>
            <col style='background-color:#69bbc4;width:100px;'>
            </col>
            <col style='background-color:#90d398;width:100px;'>
            </col>
            <col style='background-color:#90d398;width:100px;'>
            </col>
            <col style='background-color:#90d398;width:100px;'>
            </col>
            <col style='background-color:orange;width:100px;'>
            </col>
          </colgroup>
          <thead>
            <tr>
              <th rowspan="2">Unit</th>
              <th colspan="12" style="text-align: center;">Risk Identification</th>
              <th colspan="4">Risk Inherrent</th>
              <th colspan="3">Risk Treatment</th>
              <th colspan="4">Residual Risk</th>
              <th colspan="2">Risk Mitigation</th>
              <th colspan="4">Risk After Mitigation</th>
              <th colspan="3">Risk Monitoring & Review</th>
              <th id="thUserAction" rowspan="2">User Action</th>
            </tr>
            <tr>
              <th>Risk ID</th>
              <th>Date Raised</th>
              <th>Raised By</th>
              <th>Risk Objective/KPI</th>
              <th>Risk Event</th>
              <th>Standar</th>
              <th>Risk Category</th>
              <th>Cause</th>
              <th>Source of Risk</th>
              <th>Consequence</th>
              <th>Risk Owner</th>
              <th>Unit Terkait Penyebab Resiko</th>
              <th>Likelihood</th>
              <th>Impact</th>
              <th>Risk Rating</th>
              <th>Risk Matrix</th>
              <th>Action</th>
              <th>Plan</th>
              <th>Resolve By</th>
              <th>Likelihood</th>
              <th>Impact</th>
              <th>Risk Rating</th>
              <th>Risk Matrix</th>
              <th>Opsi Perlakuan Risiko</th>
              <th>Deskripsi Tindakan Mitigasi</th>
              <th>Likelihood</th>
              <th>Impact</th>
              <th>Risk Rating</th>
              <th>Risk Matrix</th>
              <th>Method</th>
              <th>Progress and Compliance Reporting</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody id="rows">
          </tbody>
        </table>
</br>
        </h2>
        <div class="row">
            <h5 style="color: green;">
                <button id="exportExcel" class="btn btn-success">
                    Explore Excel
                </button>
            </h5>
</div>
</br>


      </html>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

          </div>
        </div><!-- End News & Updates -->

      </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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
  <script src="assets/js/resiko_unit.js"></script>
  <script src="assets/js/role/checkGuest.js"></script>

</body>

</html>
@endsection