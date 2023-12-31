<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
  </head>
<style>
  .modal-content {
   
    width: 131%;
  }
</style>
<body class="g-sidenav-show   bg-gray-100">
    @include('navbar');

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
          <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">Billing</li>
              </ol>
              <h6 class="font-weight-bolder text-white mb-0">Billing</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
              <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                  <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" placeholder="Type here...">
                </div>
              </div>
              <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                    <i class="fa fa-user me-sm-1"></i>
                    <span class="d-sm-inline d-none">Sign In</span>
                  </a>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line bg-white"></i>
                      <i class="sidenav-toggler-line bg-white"></i>
                      <i class="sidenav-toggler-line bg-white"></i>
                    </div>
                  </a>
                </li>
                <li class="nav-item px-3 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-white p-0">
                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                  </a>
                </li>
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell cursor-pointer"></i>
                  </a>
                  <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="my-auto">
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                              <span class="font-weight-bold">New message</span> from Laur
                            </h6>
                            <p class="text-xs text-secondary mb-0">
                              <i class="fa fa-clock me-1"></i>
                              13 minutes ago
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="my-auto">
                            <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                              <span class="font-weight-bold">New album</span> by Travis Scott
                            </h6>
                            <p class="text-xs text-secondary mb-0">
                              <i class="fa fa-clock me-1"></i>
                              1 day
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <title>credit-card</title>
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                  <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(453.000000, 454.000000)">
                                      <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                      <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                              Payment successfully completed
                            </h6>
                            <p class="text-xs text-secondary mb-0">
                              <i class="fa fa-clock me-1"></i>
                              2 days
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-xl-6 mb-xl-0 mb-4">
                    <div class="row">
                        <div class="col-md-6">
                          <div class="card">
                            <div class="card-header mx-4 p-3 text-center">
                              <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                <img src="../assets/img/business-credit-score.png" alt="" width="55px" height="55px" style="margin-top:5px;">
                              </div>
                            </div>
                            <div class="card-body pt-0 p-3 text-center">
                              <h6 class="text-center mb-0">Credit</h6>
                              <span class="text-xs">Belong Interactive</span>
                              <hr class="horizontal dark my-3">
                              @php 
                              $sum = DB::table('billings')->where('payment_mode','CREDIT')->sum('product_total');
                             @endphp
                              <h5 class="mb-0">+${{number_format($sum,2)}}</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-4">
                          <div class="card">
                            <div class="card-header mx-4 p-3 text-center">
                              <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                <img src="../assets/img/money.png" alt="" width="55px" height="55px" style="margin-top:5px;">
                              </div>
                            </div>
                            <div class="card-body pt-0 p-3 text-center">
                              <h6 class="text-center mb-0">Cash</h6>
                              <span class="text-xs">Freelance Payment</span>
                              <hr class="horizontal dark my-3">
                              @php 
                              $sum = DB::table('billings')->where('payment_mode','CASH')->sum('product_total');
                             @endphp
                              <h5 class="mb-0">${{$sum}}</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-xl-6">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-header mx-4 p-3 text-center">
                          <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                            <img src="../assets/img/card-payment.png" alt="" width="55px" height="55px" style="margin-top:5px;">
                          </div>
                        </div>
                        <div class="card-body pt-0 p-3 text-center">
                          <h6 class="text-center mb-0">Card</h6>
                          <span class="text-xs">Belong Interactive</span>
                          <hr class="horizontal dark my-3">
                          @php 
                          $sum = DB::table('billings')->where('payment_mode','COD')->sum('product_total');
                         @endphp
                          <h5 class="mb-0">+${{number_format($sum,2)}}</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4">
                      <div class="card">
                        <div class="card-header mx-4 p-3 text-center">
                          <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                            <img src="../assets/img/paypal.png" alt="" width="55px" height="55px" style="margin-top:5px;">
                          </div>
                        </div>
                        <div class="card-body pt-0 p-3 text-center">
                          <h6 class="text-center mb-0">Paypal</h6>
                          <span class="text-xs">Freelance Payment</span>
                          <hr class="horizontal dark my-3">
                          <h5 class="mb-0">$455.00</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mb-lg-0 mb-4">
                  <div class="card mt-4">
                    <div class="card-header pb-0 p-3">
                      <div class="row">
                        <div class="col-6 d-flex align-items-center">
                          <h6 class="mb-0">Payment Method</h6>
                        </div>
                        <div class="col-6 text-end">
                          <a class="btn bg-gradient-dark mb-0" href="{{route('debitcard')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Card</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body p-3">
                      <div class="row">
                        <div class="col-md-6 mb-md-0 mb-4">
                          <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                            <img class="w-10 me-3 mb-0" src="../assets/img/logos/mastercard.png" alt="logo">
                            <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852</h6>
                            <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                            <img class="w-10 me-3 mb-0" src="../assets/img/logos/visa.png" alt="logo">
                            <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;5248</h6>
                            <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Invoices</h6>
                    </div>
                    <div class="col-6 text-end">
                      <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3 pb-0">
                  <ul class="list-group">
                    @foreach (DB::table('billings')->select('billing_no',DB::raw("count(billing_no) AS counting"))->groupBy('billing_no')->limit('5')->orderBy('billing_no', 'DESC')->get() as $billing_i)
                    @php
                    $data = DB::table('billings')->where('billing_no',$billing_i->billing_no)->get()->first(); 
                 @endphp
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="mb-1 text-dark font-weight-bold text-sm">{{$data->billing_date}}</h6>
                          <span class="text-xs">{{$billing_i->billing_no}}</span>
                        </div>
                        <div class="d-flex align-items-center text-sm">
                            @php 
                            $sum = DB::table('billings')->where('billing_no',$billing_i->billing_no)->sum('product_total');
                           @endphp
                          ${{$sum}}
                          <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                        </div>
                      </li>
                    @endforeach
                    
                   
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 mt-4">
              <div class="card">
                <div class="card-header pb-0 px-3">
                  <h6 class="mb-0">Billing Information</h6>
                </div>
                <div class="card-body pt-4 p-3">
                  <ul class="list-group">
                    @foreach (DB::table('billings')->select('billing_no',DB::raw("count(billing_no) AS counting"))->groupBy('billing_no')->limit('3')->orderBy('billing_no', 'DESC')->get() as $billing_i)

                    @php
                    $data = DB::table('billings')->where('billing_no',$billing_i->billing_no)->get()->first(); 
                 @endphp
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                      <div class="d-flex flex-column">
                        @php
                          $cust_name =  DB::table('customer')->where('cust_code',$data->cust_code)->get()->first()
                        @endphp
                        <h6 class="mb-3 text-sm">{{$cust_name->customername}}&nbsp;&nbsp;&nbsp;&nbsp;<b>Cust Code :</b>{{$cust_name->cust_code}}</h6>
                        <span class="mb-2 text-xs">Customer Name: <span class="text-dark font-weight-bold ms-sm-2">{{$data->firstname.$data->lastname}}</span></span>
                        <span class="mb-2 text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold">{{$data->email}}</span></span>
                        <span class="mb-2 text-xs">Bill Date: <span class="text-dark ms-sm-2 font-weight-bold">{{$data->billing_date}}</span></span>
                        <span class="text-xs">Bill No: <span class="text-dark ms-sm-2 font-weight-bold">{{$data->billing_no}}</span></span>
                        
                      </div>
                      <div class="ms-auto text-end">
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-5 mt-4">
              <div class="card h-100 mb-4">
                <div class="card-header pb-0 px-3">
                  <div class="row">
                    <div class="col-md-6">
                      <h6 class="mb-0">Your Transaction's</h6>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end align-items-center">
                      <i class="far fa-calendar-alt me-2"></i>
                      <small><input type = "text" id = "datepicker-1"></small>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-4 p-3" style="overflow-y: scroll; height:400px;">
                  <div class="m-4">
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="nav-item">
                            <a href="#home" class="nav-link" data-bs-toggle="tab">Paid Amount</a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile" class="nav-link" data-bs-toggle="tab">Balance Amount</a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages" class="nav-link" data-bs-toggle="tab">Credit Amount</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="home">
                          @php
                          $date = date('d-M-Y');
                          
                      @endphp
                      @foreach (DB::table('billings')->select('billing_no',DB::raw("count(billing_no) AS counting"))->where('billing_date',$date)->groupBy('billing_no')->orderBy('billing_no', 'DESC')->get() as $billing_i)
                      @php
                      $data = DB::table('billings')->where('billing_no',$billing_i->billing_no)->get()->first(); 
                     @endphp
  @if ($data->paid_amt > 0)
  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
    <div class="d-flex align-items-center">
      <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
      <div class="d-flex flex-column">
        <h6 class="mb-1 text-dark text-sm">{{$billing_i->billing_no}}</h6>
        <span class="text-xs">27 March 2020, at 04:30 AM</span>
      </div>
    </div>
    <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
      + ${{$data->paid_amt}}
    </div>
  </li>  
  @endif                            @endforeach 
                          </div>
                        <div class="tab-pane fade" id="profile">
                          @php
                          $date = date('d-M-Y');
                          
                      @endphp
                      @foreach (DB::table('billings')->select('billing_no',DB::raw("count(billing_no) AS counting"))->where('billing_date',$date)->groupBy('billing_no')->orderBy('billing_no', 'DESC')->get() as $billing_i)
                      @php
                      $data = DB::table('billings')->where('billing_no',$billing_i->billing_no)->get()->first(); 
                     @endphp
                    @if ($data->balance_amt)
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                     <div class="d-flex align-items-center">
                       <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></button>
                       <div class="d-flex flex-column">
                         <h6 class="mb-1 text-dark text-sm">{{$billing_i->billing_no}}</h6>
                         <span class="text-xs">27 March 2020, at 12:30 PM</span>
                       </div>
                     </div>
                     <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                       - ${{$data->balance_amt}}
                     </div>
                   </li>  
                    @endif                     
                   @endforeach 
                        </div>
                        <div class="tab-pane fade" id="messages">
                          @if ($data->payment_mode >=0)

                          <h4>No Credit Amount</h4>
                           @else
                           @if ($data->payment_mode=='CREDIT')
                           <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                              <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-exclamation"></i></button>
                              <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm">Webflow</h6>
                                <span class="text-xs">26 March 2020, at 05:00 AM</span>
                              </div>
                            </div>
                            <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
                              Pending
                            </div>
                          </li>
                           @endif
                          @endif
                         
                        </div>
                    </div>
                </div>
                  {{-- <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Today</h6>
                  @php
                        $date = date('d-M-Y');
                        
                    @endphp
                    @foreach (DB::table('billings')->select('billing_no',DB::raw("count(billing_no) AS counting"))->where('billing_date',$date)->groupBy('billing_no')->orderBy('billing_no', 'DESC')->get() as $billing_i)
                    @php
                    $data = DB::table('billings')->where('billing_no',$billing_i->billing_no)->get()->first(); 
                   @endphp
                  <ul class="list-group">
                    
                   @if ($data->balance_amt)
                   <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></button>
                      <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm">{{$billing_i->billing_no}}</h6>
                        <span class="text-xs">27 March 2020, at 12:30 PM</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                      - ${{$data->balance_amt}}
                    </div>
                  </li>  
                   @endif
                    @if ($data->paid_amt > 0)
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                      <div class="d-flex align-items-center">
                        <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
                        <div class="d-flex flex-column">
                          <h6 class="mb-1 text-dark text-sm">{{$billing_i->billing_no}}</h6>
                          <span class="text-xs">27 March 2020, at 04:30 AM</span>
                        </div>
                      </div>
                      <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                        + ${{$data->paid_amt}}
                      </div>
                    </li>  
                    @endif
                   @if ($data->payment_mode=='CREDIT')
                   <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-exclamation"></i></button>
                      <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm">Webflow</h6>
                        <span class="text-xs">26 March 2020, at 05:00 AM</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
                      Pending
                    </div>
                  </li>
                   @endif
                    
                    
                  </ul>
                  
                  @endforeach --}}
                </div>
              </div>
            </div>
          </div>
          <footer class="footer pt-3  ">
            <div class="container-fluid">
              <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                  <div class="copyright text-center text-sm text-muted text-lg-start">
                    © <script>
                      document.write(new Date().getFullYear())
                    </script>,
                    made with <i class="fa fa-heart"></i> by
                    <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                    for a better web.
                  </div>
                </div>
                <div class="col-lg-6">
                  <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                      <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                    </li>
                    <li class="nav-item">
                      <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </main>
  


  @include('footer')
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script>
  $(document).ready(function(){
      $("#myTab li:eq(1) a").tab("show"); // show second tab (0-indexed, like an array)
  });
  </script>
<script>
    $(document).ready(function(){
      $( "#datepicker-1" ).datepicker();
    })
    
  
</script>
</html>


