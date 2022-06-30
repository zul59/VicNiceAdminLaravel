<!DOCTYPE html>
<html lang="en">

  <script src="assets/js/role/checkGuest.js"></script>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Manajemen Risiko</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"  />
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .btn-tambah {
      background-color: #a0ce63;
    }
    .link-tambah {
      color: white;
    }
  </style>

  <style>
      *, *:before, *:after {
        font-size: 12px;
      }
      @import url('https://fonts.googleapis.com/css?family=Varela+Round');
html, body {
    overflow-x: hidden;
    height: 100%;
}
body {
    background: #fff;
    padding: 0;
    margin: 0;
    font-family: 'Varela Round', sans-serif!important;
}
.header {
    display: block;
    margin: 0 auto;
    width: 100%;
    max-width: 100%;
    box-shadow: none;
    background-color: #57cf56!important;
    position: fixed;
    height: 60px!important;
    overflow: hidden;
    z-index: 10;
}
.main {
    margin: 0 auto;
    display: block;
    height: 100%;
    margin-top: 60px;
}
.mainInner{
    display: table;
    height: 100%;
    width: 100%;
    text-align: center;
}
.mainInner div{
    display:table-cell;
    vertical-align: middle;
    font-size: 3em;
    font-weight: bold;
    letter-spacing: 1.25px;
}
#sidebarMenu {
  top: 60px;
  left: 0;
  bottom: 0;
  width: 300px;
  z-index: 996;
  transition: all 0.3s;
  overflow-y: auto;
  scrollbar-width: thin;
  scrollbar-color: #aab7cf transparent;
  background-color: #198754;
}
.sidebarMenuInner{
    margin-top:20px;
    padding:0;
    border-top: 1px solid rgba(255, 255, 255, 0.10);
}
.sidebarMenuInner li{
  list-style: none;
  color: #f6f9ff;
  text-transform: uppercase;
  font-weight: bold;
  padding: 20px;
  cursor: pointer;
  border-bottom: 1px solid rgba(255, 255, 255, 0.10);
}
.sidebarMenuInner li span{
  font-size: 14px;
  color: #f6f9ff;
}
.sidebarMenuInner li a{
  color: #f6f9ff;
  text-transform: uppercase;
  font-weight: bold;
  cursor: pointer;
  text-decoration: none;
}
input[type="checkbox"]:checked ~ #sidebarMenu {
    transform: translateX(0);
}
input[type=checkbox] {
    transition: all 0.3s;
    box-sizing: border-box;
    display: none;
}
.sidebarIconToggle {
    transition: all 0.3s;
    box-sizing: border-box;
    cursor: pointer;
    position: absolute;
    z-index: 99;
    height: 100%;
    width: 100%;
    top: 22px;
    left: 15px;
    height: 22px;
    width: 22px;
}
.spinner {
    transition: all 0.3s;
    box-sizing: border-box;
    position: absolute;
    height: 3px;
    width: 100%;
    background-color: #FC466B;
}
.horizontal {
    transition: all 0.3s;
    box-sizing: border-box;
    position: relative;
    float: left;
    margin-top: 3px;
}
.diagonal.part-1 {
    position: relative;
    transition: all 0.3s;
    box-sizing: border-box;
    float: left;
}
.diagonal.part-2 {
    transition: all 0.3s;
    box-sizing: border-box;
    position: relative;
    float: left;
    margin-top: 3px;
}
input[type=checkbox]:checked ~ .sidebarIconToggle > .horizontal {
    transition: all 0.3s;
    box-sizing: border-box;
    opacity: 0;
}
input[type=checkbox]:checked ~ .sidebarIconToggle > .diagonal.part-1 {
    transition: all 0.3s;
    box-sizing: border-box;
    transform: rotate(135deg);
    margin-top: 8px;
}
input[type=checkbox]:checked ~ .sidebarIconToggle > .diagonal.part-2 {
    transition: all 0.3s;
    box-sizing: border-box;
    transform: rotate(-135deg);
    margin-top: -9px;
}
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index" class="logo d-flex align-items-center">
        <img src="assets/img/ittp.png" alt="">
        <span class="d-none d-lg-block">Manajemen Risiko</span>
      </a>
      <!-- <i class="bi bi-list toggle-sidebar-btn"></i> -->
    </div><!-- End Logo -->
    </ul><!-- End Messages Dropdown Items -->
    </li><!-- End Profile Nav -->
    </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
  <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
  <div id="sidebarMenu">
    <ul class="sidebarMenuInner">
      <li id=btnDashboard >
        <a class="icon" style="color: white; margin-right: 1.5rem;"><i class="fas fa-lg fa-dice-d6" style="transform: scale(2);" aria-hidden="true"></i></a>
        Dashboard
      </li>
        <li>
            <a class="icon" style="color: white; margin-right: 1.5rem;"><i class="fas fa-align-justify" style="transform: scale(2);" aria-hidden="true"></i></a>
            <a href="risiko-unit">Resiko Unit</a>
        </li>
        <li>
            <a class="icon" style="color: white; margin-right: 1.5rem;"><i class="fas fa-plus" style="transform: scale(2);" aria-hidden="true"></i></a>
            <a href="add-data-risiko">Tambah Data Risiko</a>
        </li>
        <li>
            <a class="icon" style="color: white; margin-right: 1.5rem;"><i class="fas fa-plus" style="transform: scale(2);" aria-hidden="true"></i></a>
            <span style="cursor: pointer;" id="btnLogout">Logout<span>


  </div>
  </aside>
  <!-- End Sidebar-->
  <main id="main" class="main">
    <div class="pagetitle">
      </ol>
      </nav>
    </div>
<!-- End Page Title -->
@yield('container')
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

@yield('js')

</body>

</html>