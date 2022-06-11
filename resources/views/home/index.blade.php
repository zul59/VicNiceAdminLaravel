@extends('layouts.main')

@section('container')
<!DOCTYPE html>
    <html>

    <head>
      <style>
        * {
          box-sizing: border-box;
        }

        .row {
          margin-left: -5px;
          margin-right: -5px;
        }

        .column {
          float: left;
          width: 50%;
          padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row::after {
          content: "";
          clear: both;
          display: table;
        }

        table {
          border-collapse: collapse;
          border-spacing: 0;
          border: 1px solid #ddd;
        }
        /*source code kotak*/
        .half-width {
          width: 65%;
        }

        .full-width {
          width: 65%;
        }

        th,
        td {
          text-align: left;
          padding: 16px;
        }

        tr:nth-child(even) {
          background-color: #f2f2f2;
        }

        /* Tata letak responsif - membuat dua kolom bertumpuk, bukan bersebelahan pada layar yang lebih kecil dari 600 piksel */
        @media screen and (max-width: 100px) {
          .column {
            width: 50%;
          }
        }
      </style>
    </head>
    <center> <h2>Sistem Informasi Manajemen Risiko IT Telkom Purwokerto</h2> </center>

    <body>
      <div class="row">
        <div class="column inline-flex">
          <div>
            <button class="btn-tambah"><a href="add-component?type=unit" class="link-tambah">Tambah Unit</a></button>
          </div>
          <br />
          <table class="half-width">
            <tr>
              <th>Nama Unit</th>
            </tr>
            <tbody id="tBodyUnits">
            </tbody>
          </table>
        </div>
        <div class="column">
          <div>
            <button class="btn-tambah"><a href="add-component?type=rc" class="link-tambah">Tambah Risk Category</a></button>
          </div>
          <br />
          <table class="full-width">
            <tr>
              <th>Risk Category</th>
            </tr>
            <tbody id="tBodyRiskCategories"></tbody>
          </table>
          <section class="section dashboard">
            <div class="row">
              <div class="col-lg-8">
                <div class="row">
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <br />
      <div class="row">
        <div class="column">
          <div>
            <button class="btn-tambah"><a href="add-component?type=sor" class="link-tambah">Tambah Source of Risk</a></button>
          </div>
          <br />
          <table class="half-width">
            <tr>
              <th>Nama Source of Risk</th>
            </tr>
            <tbody id="tBodySourceOfRisk"></tbody>
          </table>
        </div>
        <div class="column">
          <div>
            <button class="btn-tambah"><a href="add-component?type=sa" class="link-tambah">Tambah Standar Akademik</a></button>
          </div>
          <br />
          <table class="full-width">
            <tr>
              <th>Standar Akademik</th>
            </tr>
            <tbody id="tBodyStandarAkademik"></tbody>
          </table>
          <section class="section dashboard">
            <div class="row">
              <div class="col-lg-8">
                <div class="row">
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

  </main><!-- End #main -->
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
  <script src="assets/js/role/checkAdmin.js"></script>
  <script src="assets/js/home_admin.js"></script>
  @endsection
