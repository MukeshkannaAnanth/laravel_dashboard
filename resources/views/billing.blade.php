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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Tables</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here..." id="searchdata">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">{{Session::get('user_name')}}</span>
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
                        <img src="./assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
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
                        <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
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
    <div class="container-fluid py-4" style="width:80%;">
      <div class="row">
        <form action="{{route('add.billing')}}" method="post" id="addbilling">
          
                <div class="col-12">
                    <div class="card mb-4">
                      
                      <div class="card-body px-0 pt-0 pb-2">
                        @csrf
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Add Billing</p>
                            <div class="row">
                              
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Billing Date</label>
                                    <input class="form-control" type="text" name="billing_date" value="<?=date('d-M-Y')?>" readonly>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Billing Time</label>
                                    <?php $datetime = date('d-M-Y'); ?>
                                    <input class="form-control" type="text" name="billing_time" value="<?=date('H:i:s',strtotime($datetime))?>" readonly>
                                  </div>
                                </div>
                                
                              </div>
                              @php
                                   function getNextOrderNumber()
                                      {
                                       $lastOrder = DB::table('billings')->orderBy('created_at', 'desc')->first(); 
                                       if ( ! $lastOrder )
                                           $number = 0;
                                       else 
                                           $number = substr($lastOrder->billing_no, 3);
                                       return 'PRO' . sprintf('%06d', intval($number) + 1);
                                      }
                              @endphp
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                      <label for="example-text-input" class="form-control-label">Billing Number</label>
                                      <input class="form-control" type="text"  name="billing_no" value="<?=getNextOrderNumber()?>" readonly>
                                    </div>
                                  </div>

                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <label for="example-text-input" class="form-control-label">Cust Code</label>
                                     <select name="customer_code" id="customer_code" class="form-control">
                                       @php
                                           $cust_code = DB::table('customer')->get();
                                           foreach($cust_code as $cat){
                                            echo "<option value='".$cat->cust_code."'>".$cat->cust_code."</option>";
                                           }
                                       @endphp
                                     </select>
                                    </div>
                                  </div>

                                  




                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">First Name</label>
                                  <input class="form-control" type="text"  name="fname" autofocus>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Last Name</label>
                                  <input class="form-control" type="text" name="lname">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">E-Mail</label>
                                  <input class="form-control" type="text" name="email">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Mobile</label>
                                  <input class="form-control" type="text" name="mobile">
                                </div>
                              </div>
                              {{-- <div class="col-md-3">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Company Mobile Number</label>
                                  <input class="form-control" type="number" name="company_mobile">
                                </div>
                              </div> --}}
                             
                             
            
            
                            
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Customer Information</p>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Customer Address</label>
                                  <input class="form-control" type="text" name="address">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Customer City</label>
                                  <input class="form-control" type="text" name="city">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Customer State</label>
                                  <input class="form-control" type="text" name="state">
                                </div>
                              </div>
                              
                            </div>
                        <div class="table-responsive p-0">
                            
                          <table class="table align-items-center mb-0" id="t1">
                            <thead>
                              <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Brand</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Name</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Rate</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product quantity</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                                
                             
                                <th class="text-secondary opacity-7"> <a href="#"><img src="../assets/img/add-to-cart.png" alt="" width="30px" height="30px" id="addbilling_product"></a></th>
                              </tr>
                            </thead>
                            <tbody id="tablebody">
                              
                              
                               
                            </tbody>
                          </table>
                         
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Payment By</label>
                                
                                <select name="payment_mode" id="payment_by" class="form-control">
                                  <option value="Select">Select</option>
                                    <option value="COD">COD</option>
                                    <option value="CASH">CASH</option>
                                    <option value="CREDIT">CREDIT</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3" id="carddetails" style="display: none;">
                              <div class="form-group">
                              <div class="row12" style="display:flex;">
                                <div class="wrapper"> <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/> 
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                             </svg>
                             
                             </div>
                             <h5 style="margin-top: 40px;margin-left:15px;">Amount Paid</h5>
                            </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Paid Amount</label>
                                <input class="form-control" type="text" name="paid_amt">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Balance Amount</label>
                                <input class="form-control" type="text" name="balance_amount">
                              </div>
                            </div>
                            
                          </div>
                          
                      </div>
                    </div>
                  </div>
                <hr class="horizontal dark">
                <div class="row">
                  
                  <button type="button" id="submit_btn" class="btn btn-primary">Order Place Now</button>

                </div>
              </div>
            
          </div> 
        </div>
        </form>
       <style>.wrapper{align-items:center;margin-top: 30px;}.checkmark__circle{stroke-dasharray: 166;stroke-dashoffset: 166;stroke-width: 2;stroke-miterlimit: 10;stroke: #7ac142;fill: none;animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards}.checkmark {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: block;
        stroke-width: 2;
        stroke: #fff;
        stroke-miterlimit: 10;
        /* margin: 10% auto; */
        box-shadow: inset 0px 0px 0px #7ac142;
        animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
    }.checkmark__check{transform-origin: 50% 50%;stroke-dasharray: 48;stroke-dashoffset: 48;animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards}@keyframes stroke{100%{stroke-dashoffset: 0}}@keyframes scale{0%, 100%{transform: none}50%{transform: scale3d(1.1, 1.1, 1)}}@keyframes fill{100%{box-shadow: inset 0px 0px 0px 30px #7ac142}}</style>
    
       


     

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

  <div class="container">
    <!-- Modal -->
    <div class="modal fade" id="debitcard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
          <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Payment By</h5>
                <button type="button" class="close" onclick="closemodel();" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
             </div>
             <div class="modal-body">
              <form class="credit-card">
                <div class="form-header">
                  <h4 class="title">Credit card detail</h4>
                </div>
               
                <div class="form-body">
                  <!-- Card Number -->
                  <input type="text" class="card-number" placeholder="Card Number">
               
                  <!-- Date Field -->
                  <div class="date-field">
                    <div class="month">
                      <select name="Month">
                        <option value="january">January</option>
                        <option value="february">February</option>
                        <option value="march">March</option>
                        <option value="april">April</option>
                        <option value="may">May</option>
                        <option value="june">June</option>
                        <option value="july">July</option>
                        <option value="august">August</option>
                        <option value="september">September</option>
                        <option value="october">October</option>
                        <option value="november">November</option>
                        <option value="december">December</option>
                      </select>
                    </div>
                    <div class="year">
                      <select name="Year">
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                      </select>
                    </div>
                  </div>
               
                  <!-- Card Verification Field -->
                  <div class="card-verification">
                    <div class="cvv-input">
                      <input type="text" placeholder="CVV">
                    </div>
                    <div class="cvv-details">
                      <p>3 or 4 digits usually found <br> on the signature strip</p>
                    </div>
                  </div>
               
                  <!-- Buttons -->
                  <button type="button" class="proceed-btn"><a href="#">Proceed</a></button>
                  <button type="button" class="paypal-btn"><a href="#">Pay With</a></button>
                </div>
              </form>
             </div>
            
          </div>
       </div>
    </div>
 </div>




  @include('footer')
</body>

</html>


<script>
  function closemodel()
  {
    $('#debitcard').modal('hide');
  }

</script>

<script>
  $(document).on('click','.proceed-btn',function(){
    $('#debitcard').modal('hide');
    $('#carddetails').css('display','block');
    
  });
</script>

<script>
  $(document).on('change','#payment_by',function(){
    if($(this).val().trim()=='COD'){
      $('#debitcard').modal('show');

    }else{
      $('#debitcard').modal('hide');
      $('#carddetails').css('display','none');
    }
    
  });
</script>


<script>
    $(document).on('click','#addbilling_product',function(){
      let _token = $("input[name=_token]").val();
      
       $.ajax({
        url: "{{route('fetchbrand')}}",
            type:"POST" ,
            data: {
                _token:_token
            },
            success:function(response) 
            {
               console.log(response);
               
               
                  // var arr = $("#t1 tr:last-child").prev().children().map(function(){
                  // return $(this).val()
                  //  }).get()
                  // console.log(arr);
    
              var data = JSON.parse(response);
              $('#tablebody').append('<tr><td class="align-middle text-center"><select type="text" name="product_brand[]" id="tags" class="form-control"><option>Select</option>'+data+'</select></td><td class="align-middle text-center"><select type="text" name="product_name[]" id="product_name1" class="form-control"></select></td><td class="align-middle text-center"><input type="text" name="product_rate[]" id="product_rate1" readonly tabindex="-1" class="form-control"></td><td class="align-middle text-center"><input type="text"  name="product_qty[]" id="qtypro" class="form-control"></td><td class="align-middle text-center"><input type="text" name="product_tot[]" id="total" class="form-control total"></td><td class="align-middle text-center"><a href=""><img src="../assets/img/remove-from-cart.png" alt="" width="30px" height="30px" onclick="return false;" id="removeproduct"></a</td></tr>')
  
            }
       })
    });
</script>

<script>
  $(document).on('change','table #tags',function(){
    let _token = $("input[name=_token]").val();
     var brand = $(this).val();
     tr  =  $(this).parent().parent();
     $.ajax({
        url: "{{route('fetchbrand_product')}}",
            type:"POST" ,
            data: {
                _token:_token,
                brand:brand
            },
            success:function(response) 
            {
               console.log(response);
               var data = JSON.parse(response);
          
               tr.find("#product_name1").html(data[0]);
            }
       })
  });
</script>

<script>
  $(document).on('focusout','table #product_name1',function(){
    let _token = $("input[name=_token]").val();
     var product = $(this).val();
     tr  =  $(this).parent().parent();
     $.ajax({
        url: "{{route('fetchproductrate')}}",
            type:"POST" ,
            data: {
                _token:_token,
                product:product
            },
            success:function(response) 
            {
               console.log(response);
               var data = JSON.parse(response);
               tr.find("#product_rate1").val(data);
               
            }
       })
  });
</script>

<script>
  $(document).on('keyup','table #qtypro',function(){
     var product = $(this).val();
     tr  =  $(this).parent().parent();

    
     
    var product_rate = tr.find('#product_rate1').val();
    totalprice=parseInt(product)*parseFloat(product_rate);
    console.log(totalprice);
    tr.find("#total").val(totalprice);
  
  });
</script>


<script>
    $("table").on("click", "#removeproduct", function() {
   $(this).closest("tr").remove(); 
});
</script>
<script>
  $("#addbilling").keyup(function(event) {
    if (event.keyCode === 13) {
       $("#addbilling_product").click();
    }
});


  $("#addbilling").keyup(function(event) {
    const key = event.key; // const {key} = event; ES6+
    if (key === "Backspace" || key === "Delete") {
        $("#removeproduct").click();
    }
});


$(document).on('click','#submit_btn',function(){
    $(this).attr('type','submit');
});

</script>

<script>
 
  $(document).ready(function(){
    fetch_brand();
});
  function fetch_brand(){
    let _token = $("input[name=_token]").val();
       $.ajax({
        url: "{{route('fetchbrand')}}",
            type:"POST" ,
            data: {
                _token:_token
            },
            success:function(response) 
            {
               console.log(response);
              $('#tags').append(response);
               
            }
       })
  }
</script>
