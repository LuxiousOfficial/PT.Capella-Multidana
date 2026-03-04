<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" href="{{ asset('img/capella.png') }}">
  <title>PT. Capella Multidana || Dashboard</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="/css/soft-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show bg-gray-100">
  <x-sidebar-user></x-sidebar-user>
  <div class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <x-navbar-user></x-navbar-user>
  </div>

  <div class="container-fluid">
    <div class="row">
      <main class="col-md-12 ms-sm-auto col-lg-10 px-md-6">
          {{ $slot }}
      </main>
    </div>
</div>
  
  <!--   Core JS Files   -->
  <script src="/../js/popper.min.js"></script>
  <script src="/../js/bootstrap.min.js"></script>
  <script src="/../js/perfect-scrollbar.min.js"></script>
  <script src="/../js/smooth-scrollbar.min.js"></script>
  <script src="/../js/chartjs.min.js"></script>
  <script src="/../js/dashboardahm.js"></script>
  <script src="/../js/dashboardastra.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/../js/soft-ui-dashboard.min.js?v=1.1.0"></script>
</body>

</html>