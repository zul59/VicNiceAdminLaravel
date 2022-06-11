@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!DOCTYPE html>
    <html>

    <head>
      <style>
        * {
          box-sizing: border-box;
        }

        .container {
            display: inline-flex;
            flex-direction: column;
        }
      </style>
    </head>

    <body>
      <div class="row">
        <h2 id="lblHeader" style="display: none;">Add Something</h2>
        <div class="col-md-4">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="inputName" required>
            <button class="mt-3" id="btnAdd">Add</button>
        </div>
      </div>

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
  <script src="assets/js/role/checkGuest.js"></script>
  <script src="assets/js/add_component.js"></script>

</body>

</html>
@endsection