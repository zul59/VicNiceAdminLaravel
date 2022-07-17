@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
<h2 style="font-size: 2rem; margin-left: 14rem;">
        Sistem Informasi Manajemen Risiko IT Telkom Purwokerto
    </h2>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
    <div class="pagetitle">
        </ol>
      </nav>
    </div><!-- End Page Title -->
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    </br>
  </br>

  <div class="container">
        <form class="form-horizontal" action="/action_page.php">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">&nbsp; &nbsp; &nbsp; &nbsp;Unit:</label>
            <div class="col-sm-5">
              <select name="unit" id="unit" class="form-control" > </select>
            </div>
          </div>
        <label class="control-label col-sm-2" for="pwd">Risk Identification</label>
        </br>
        </br>
        <div class="form-group">
        <label class="control-label col-sm-2" for="email">&nbsp; &nbsp; &nbsp; &nbsp;Risk ID:</label>
        <div class="col-sm-5">
        <input type="" class="form-control" id="riskId" placeholder="" name="">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Date Raised:</label>
        <div class="col-sm-5">
        <input type="date" class="form-control" id="dateRaised" placeholder="" name="">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Raised By:</label>
        <div class="col-sm-5">
        <input type="" class="form-control" id="raisedBy" placeholder="" name="">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Risk Objective:</label>
        <div class="col-sm-5">
        <input type="" class="form-control" id="riskObjective" placeholder="" name="">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Risk Event :</label>
        <div class="col-sm-5">
        <input type="" class="form-control" id="riskEvent" placeholder="" name="">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Standar :</label>
        <div class="col-sm-5">
          <select name="standar" id="standar" class="form-control"></select>
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Risk Category :</label>
        <div class="col-sm-5">
            <select name="riskCategory" id="riskCategory" class="form-control"></select>
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Cause :</label>
        <div class="col-sm-5">
        <input type="" class="form-control" id="cause" placeholder="" name="">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Source Of Risk :</label>
        <div class="col-sm-5">
          <select name="sourceOfRisk" id="sourceOfRisk" class="form-control"></select>
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Consequence :</label>
        <div class="col-sm-5">
        <input type="" class="form-control" id="consequence" placeholder="" name="">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Risk Owner :</label>
        <div class="col-sm-5">
        <input type="" class="form-control" id="riskOwner" placeholder="" name="">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Unit Terkait Penyebab Resiko :</label>
        <div class="col-sm-5">
        <input type="" class="form-control" id="unitTerkaitPenyebabRisiko" placeholder="" name="">
        </div>
        </div>
        <br>
        <br>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Risk Inherrent</label>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Likelihood :</label>
          <div class="col-sm-5">
            <input type="number" class="form-control" id="riskInherrentLikelihood" placeholder="" name="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Impact :</label>
          <div class="col-sm-5">
            <input type="number" class="form-control" min="1" max="5" id="riskInherrentImpact" placeholder="" name="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Risk Rating :</label>
          <div class="col-sm-5">
            <input type="" class="form-control" min="1" max="5" id="riskInherrentRating" placeholder="" name="" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Risk Matrix :</label>
          <div class="col-sm-5">
            <input type="" class="form-control" id="riskInherrentMatrix" placeholder="" name="" disabled>
          </div>
        </div>
        <form class="form-horizontal" action="/action_page.php">
        </br>
        </br>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Risk Treatment</label>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Action:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="riskTreatmentAction" placeholder="" name="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Plan:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" min="1" max="5" id="riskTreatmentPlan" placeholder="" name="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Resolve By:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" min="1" max="5" id="riskTreatmentResolveBy" placeholder="" name="">
          </div>
        </div>
        </br>
        </br>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Risk Residual</label>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Likelihood :</label>
          <div class="col-sm-5">
            <input type="number" class="form-control" id="riskResidualLikelihood" placeholder="" name="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Impact :</label>
          <div class="col-sm-5">
            <input type="number" class="form-control" min="1" max="5" id="riskResidualImpact" placeholder="" name="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Risk Rating :</label>
          <div class="col-sm-5">
            <input type="" class="form-control" min="1" max="5" id="riskResidualRating" placeholder="" name="" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Risk Matrix :</label>
          <div class="col-sm-5">
            <input type="" class="form-control" id="riskResidualMatrix" placeholder="" name="" disabled>
          </div>
        </div>
        </br>
        </br>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Risk Mitigation</label>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Opsi Perlakuan Risiko:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="riskMitigationOpsiRisiko" placeholder="" name="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Deskripsi Tindakan Mitigasi:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" min="1" max="5" id="riskMitigationDeskripsiTindakanMitigasi" placeholder="" name="">
          </div>
        </div>
        <br>
        <br>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Risk After Mitigation</label>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Likelihood:</label>
          <div class="col-sm-5">
            <input type="number" class="form-control" id="riskAfterMitigationLikelihood" placeholder="" name="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Impact:</label>
          <div class="col-sm-5">
            <input type="number" class="form-control" min="1" max="5" id="riskAfterMitigationImpact" placeholder="" name="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Risk Rating:</label>
          <div class="col-sm-5">
            <input type="" class="form-control" min="1" max="5" id="riskAfterMitigationRating" placeholder="" name="" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Risk Matrix :</label>
          <div class="col-sm-5">
            <input type="" class="form-control" id="riskAfterMitigationMatrix" placeholder="" name="" disabled>
          </div>
        </div>
        <br>
        <br>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Risk Monitoring & Review</label>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Method:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="riskMonitoringMethod" placeholder="" name="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Progress and Compliance Reporting:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" min="1" max="5" id="riskMonitoringProgress" placeholder="" name="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Status:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" min="1" max="5" id="riskMonitoringStatus" placeholder="" name="">
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" id="btnTambahRisiko" class="btn btn-default">Submit</button>
        </div>
        </div>
        </form>
        </div>
  </body>
  </html>


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


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
  <script src="assets/js/tambah_risiko.js"></script>
  <script src="assets/js/role/checkGuest.js"></script>

</body>

</html>
@endsection