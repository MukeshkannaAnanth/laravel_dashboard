<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/monitor.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <link rel="stylesheet" href="../assets/paypal_css/style.css">
   
    <title>
      Product Billing System
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

  

  </head>
<div class="min-height-300 bg-primary position-absolute w-100"></div>
<div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
  <span class="mask bg-primary opacity-6"></span>
</div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Argon Dashboard 2</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if(request()->url()==route('student.dashboard')) active bg-primary text-white @endif " href="{{route('student.dashboard')}}" >
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/img/dash.png" alt="" width="30px" height="30px">
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->url()==route('customer.list')) active  bg-primary text-white @endif" href="{{route('customer.list')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/img/service.png" alt="" width="30px" height="30px">
            </div>
            <span class="nav-link-text ms-1">Customer</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->url()==route('company.list')) active bg-primary text-white @endif" href="{{route('company.list')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/img/buildings.png" alt="" width="30px" height="30px">
            </div>
            <span class="nav-link-text ms-1">Companies</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  @if(request()->url()==route('texttile')) active bg-primary text-white @endif" href="{{route('texttile')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/img/adddress.png" alt="" width="30px" height="30px">

            </div>
            <span class="nav-link-text ms-1">Dress Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->url()==route('billingproduct')) active bg-primary text-white @endif" href="{{route('billingproduct')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/img/bill.png" alt="" width="30px" height="30px">
            </div>
            <span class="nav-link-text ms-1">Billing Product</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->url()==route('billinglist')) active bg-primary text-white @endif" href="{{route('billinglist')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/img/shopping-list.png" alt="" width="30px" height="30px">
            </div>
            <span class="nav-link-text ms-1">Billing List</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->url()==route('debitcard')) active bg-primary text-white @endif" href="{{route('debitcard')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/img/visa.png" alt="" width="30px" height="30px">
            </div>
            <span class="nav-link-text ms-1">Debit Card List</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->url()==route('carddetails')) active bg-primary text-white @endif" href="{{route('carddetails')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/img/invoice.png" alt="" width="30px" height="30px">
            </div>
            <span class="nav-link-text ms-1">Invoice</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->url()==route('billingcan')) active bg-primary text-white @endif" href="{{route('billingcan')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/img/invoice.png" alt="" width="30px" height="30px">
            </div>
            <span class="nav-link-text ms-1">Water Can</span>
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link @if(request()->url()==route('vegitable')) active bg-primary text-white @endif" href="{{route('vegitable')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/img/clothes-rack.png" alt="" width="30px" height="30px">
            </div>
            <span class="nav-link-text ms-1">Shoping Mart</span>
          </a>
        </li> --}}
        
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./pages/profile.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/img/user.png" alt="" width="30px" height="30px">
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->url()==route('student.Login')) active bg-primary text-white @endif" href="{{route('student.Login')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/img/login.png" alt="" width="30px" height="30px">
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->url()==route('student.register')) active bg-primary text-white @endif" href="{{route('student.register')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/img/signup.png" alt="" width="30px" height="30px">
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void" onclick="$('#logout-form').submit();">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/img/exit.png" alt="" width="30px" height="30px">
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
          <form id="logout-form" action="{{ route('student.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </li>
      </ul>
    </div>
   
  </aside>

  