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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Company table <span style="float:right;"><a href="{{route('company.add')}}"><i class="fa fa-user-plus"></i></a></span></h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Company Brand</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Company Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Company Number</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Company Product</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Company Mobile Number</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Company Address</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Add Product</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody id="tablebody">
                    @foreach ($companys as $company)
                    <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../brand_image/{{$company->company_brand}}" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{$company->company_name}}</h6>
                              <p class="text-xs text-secondary mb-0">{{$company->company_email}}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{$company->company_name}}</p>
                          
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">{{$company->company_no}}</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{{DB::table('products')->where('product_brand',$company->company_name)->Count()}}</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{{$company->company_mobile}}</span>
                        </td>
                      
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{{$company->company_address}}</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><a href="" id="addproduct" data-id="{{$company->company_name}}" data-toggle="modal" data-target="#exampleModal"><img src="../assets/img/addproduct.png" alt="" srcset="" width="40px;" height="30px;"></a></span>
                        </td>
                        <td class="align-middle">
                          <a href="{{route('company.product',$company->company_name)}}" class="text-secondary font-weight-bold text-xs text-success stock" data-toggle="tooltip" data-original-title="Get Stock">
                            <img src="../assets/img/stock.png" class="avatar avatar-sm me-1" alt="user1">
                          </a> &nbsp;
                          <a href="#" data-toggle="modal"  data-target="#getproduct" id="{{$company->company_name}}" class="text-secondary font-weight-bold text-xs text-success getproduct" data-toggle="tooltip" data-original-title="Get Product">
                            <i class="fa fa-eye"></i>
                          </a> &nbsp;
                          <a href="{{route('company.edit',$company->id)}}" class="font-weight-bold text-xs text-primary" data-toggle="tooltip" data-original-title="Edit user">
                            <i class="fas fa-edit"></i>
                          </a>&nbsp;
                          <a  href="#" id="{{$company->id}}" class="text-secondary font-weight-bold text-xs text-danger deletecompany" data-toggle="tooltip" data-original-title="Edit user">
                            <i class="fa fa-trash"></i>
                          </a>
                         
                        </td>
                      </tr> 
                    @endforeach
                    <!-- Display this <tr> when no record found while search -->
                   <tr class='notfound' id="notfound" style="display: none;">
                    <td colspan='4'>No record found</td>
                      </tr>
                    
                     
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
              <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                 </div>
                 <div class="modal-body">
                  <form action="{{route('add.product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Add Information</p>
                        <div class="row">
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Product Name</label>
                              <input class="form-control" type="text"  name="pro_name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Product No</label>
                              <input class="form-control" type="text" name="pro_no">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Product Rate</label>
                              <input class="form-control" type="text" name="pro_rate">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Product stock</label>
                              <input class="form-control" type="text" name="pro_stock">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Product quantity</label>
                              <input class="form-control" type="text" name="pro_quantity">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Product Brand</label>
                              <input class="form-control" type="text" id="pro_brand" name="pro_brand">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Product image</label>
                              <input class="form-control" type="file" name="pro_image">
                            </div>
                          </div>
        
        
                        
                        <hr class="horizontal dark">
                      
                        
                        <hr class="horizontal dark">
                        <div class="row">
                          
                          <button type="submit"  style="margin-left: 10px;" class="btn btn-primary">Submit</button>
        
                        </div>
                      </div>
        
                   </form>
                 </div>
                
              </div>
           </div>
        </div>
     </div>


     <div class="container">
      <!-- Modal -->
      <div class="modal fade" id="getproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content" style="width:800px;">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                <table class="table align-items-center mb-0" style="width:50%;">
                  <thead>
                    <tr>
                      <th class="text-uppercase  text-xxs font-weight-bolder opacity-7" style="color:black;">Company Brand</th>
                      <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2"  style="color:black;">Company Name</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7" style="color:black;">Company Number</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7" style="color:black;">Company Product</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7" style="color:black;">Company Mobile Number</th>
                    
                    </tr>
                  </thead>
                  <tbody id="getproducttable">
                   
                   
                  </tbody>
                </table>
               </div>
              
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

</html>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
  $(document).ready(function(){

// Search all columns
$('#searchdata').keyup(function(){
  // Search Text
  var search = $(this).val();

  // Hide all table tbody rows
  $('table tbody tr').hide();

  // Count total search result
  var len = $('table tbody tr:not(.notfound) td:contains("'+search+'")').length;

  if(len > 0){
    // Searching text in columns and show match row
    $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
      $(this).closest('tr').show();
    });
  }else{
    $('.notfound').show();
  }

});

});


</script>

<script>

  function companydata(){
      let _token = $("input[name=_token]").val();
     $.ajax({
      url: "{{route('company.fetch')}}",
          type:"POST" ,
          data: {
              _token:_token
          },
          success:function(response) 
          {
             console.log(response);
             $('#tablebody').html(response);

          }
     })
  }
</script>

<script>
  $(document).on('click','.deletecompany', function(e){
       e.preventDefault();
       let id = $(this).attr('id');
      console.log(id);
       let _token = $("input[name=_token]").val();
    
       $.ajax({
           url: "{{route('company.delete')}}",
           type:"POST" ,
           data: {
               id:id,
               _token:_token
           },
           success:function(response) 
           {
             // console.log(response); 
             companydata();
           }
       });

   });
</script>

<script>
  $(document).on('click','.getproduct', function(e){
       e.preventDefault();
       let id = $(this).attr('id');
       console.log(id);
       let _token = $("input[name=_token]").val();
    
       $.ajax({
           url: "{{route('product.fetch')}}",
           type:"POST" ,
           data: {
               id:id,
               _token:_token
           },
           success:function(response) 
           {
             console.log(response);
             $('#getproducttable').html(response);
           }
       });

   });
</script>

<script>
  $(document).on('click','#addproduct',function(){
    var data = $(this).data('id');
    $('#pro_brand').val(data);
    $('#pro_brand').attr('readonly',true);
  })
</script>