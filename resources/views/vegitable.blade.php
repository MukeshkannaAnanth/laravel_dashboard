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
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  </head>
<style>
  .modal-content {
   
    width: 131%;
  }
  .carousel-item {
      height: 50vh;
    }
.card {
 box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
.footer-cta {
  box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px;
}
.price {
  color: #263238;
  font-size: 24px;
}

.card-title {
color:#263238
}

.sale {
  color: #E53935
}

.sale-badge {
  background-color: #E53935
}

.swiper {
      width: 93%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
</style>
<body class="g-sidenav-show   bg-gray-100">
    @include('navbar');

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
         
        </nav>


        <nav class="navbar navbar-expand-lg navbar-dark mt-3 mb-5 shadow p-2" style="color:black;background-color: white;width: 1300px;margin-left: 70px;padding-right:30px;margin-bottom:0%;">
            <!-- Container wrapper -->
            <div class="container-fluid">
          
              <!-- Navbar brand -->
              <a class="navbar-brand" style="color: blue" href="#">Categories:</a>
          
              <!-- Toggle button -->
              <button 
                 class="navbar-toggler" 
                 type="button" 
                 data-mdb-toggle="collapse" 
                 data-mdb-target="#navbarSupportedContent2" 
                 aria-controls="navbarSupportedContent2" 
                 aria-expanded="false" 
                 aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>
          
              <!-- Collapsible wrapper -->
              <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
                  <!-- Link -->
                  <li class="nav-item acitve">
                    <a class="nav-link" style="color: blue" href="#">All</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link " style="color: blue" href="#">Shirts</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " style="color: blue" href="#">Sport wears</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" style="color: blue" href="#">Outwears</a>
                      </li>
          
                </ul>
               <style>
             body {
  background: black;
}
.w-100 {
    width: 100%!important;
    height: 286px;
}

.cart {
  position: relative;
  display: block;
  width: 40px;
  height: 28px;
  height: auto;
  overflow: hidden;
  .material-icons {
    position: relative;
    top: 4px;
    z-index: 1;
    font-size: 24px;
    color: white;
  }
  .count {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    font-size: 11px;
    border-radius: 50%;
    background: #d60b28;
    width: 16px;
    height: 16px;
    line-height:16px;
    display: block;
    text-align: center;
    color: white;
    font-family: 'Roboto', sans-serif;
    font-weight: bold;
  }
}
               </style>
                <!-- Search -->
                <form class="w-auto py-1" style="width:400px">
                  <input type="search" class="form-control rounded-0" placeholder="Search" aria-label="Search">
                </form>
                <div class="cart">
                    {{-- <span class="count">1</span> --}}
                    <!--   <span class="count">1</span> -->
                    <a href="#" data-toggle="modal"  data-target="#getproduct"  class="text-secondary font-weight-bold text-xs text-success getproduct" data-toggle="tooltip" data-original-title="Get Product">
                      <img src="../assets/img/wishlist.png" alt="" width="40px" height="30px" style="padding-left:5px;padding-right:5px;">
                    </a>
                    
                </div>
                <div class="cart">
                    {{-- <span class="count">1</span> --}}
                    <!--   <span class="count">1</span> -->
                    <a href="#" data-toggle="modal"  data-target="#checkout"  class="text-secondary font-weight-bold text-xs text-success getproduct" data-toggle="tooltip" data-original-title="Get Product">
                      <img src="../assets/img/shopping-cart.png" alt="" width="40px" height="30px" style="padding-left:5px;padding-right:5px;">
                    </a>
                </div>
               
                
              </div>
            </div>
            <!-- Container wrapper -->
          </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
          



  <!-- Navbar -->
  
  <!-- carousel -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper" style="height: 400px;">
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      <div class="swiper-slide">Slide 4</div>
      <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  
   <!--Main layout-->
  <main>
  <div class="container" style="margin-top:20px;">
    <!-- Navbar -->
  
  <!-- Navbar -->
    
  <!-- Products -->
    <section>
    <div class="text-center">
      @csrf
      <div class="row">
        @php
            $products = App\Models\Add_Dressproduct::all();
        @endphp
         @foreach ($products as $item)
         <div class="col-lg-3 col-md-6 mb-4">
         
          <div class="card" >
            <div class="heart">
              <i class="fa fa-heart fa-2xl"></i>
            </div>
            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
              data-mdb-ripple-color="light">
              <img src="../dress/{{$item->dress_image}}"
                class="w-100" />
              <a href="#!">
            
                <div class="hover-overlay">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </div>
              </a>
            </div>
            <div class="card-body">
              <a href="" class="text-reset">
                <h5 class="card-title mb-2">{{$item->Dress_name}}</h5>
              </a>
              <a href="" class="text-reset ">
                <p>{{$item->dress_type}}</p>
              </a>
              <h6 class="mb-3 price">${{$item->Dress_Rate}}</h6>
              <button class="col-sm-12 btn btn-primary" id="addtocart"><a href="javascript:void(0)"  class="text-reset ">
                {{-- onclick="Addtocart('{{$item->Dress_name}}','{{$item->Dress_Rate}}','{{Session::get('user_name')}}');" --}}
            </a>Add To Cart12</button>
            </div>
          </div>   
         
         
        </div>
        @endforeach
      
      </div>
  
      
    </div>
  </section>
    
  <!-- Pagination -->
    <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
    <ul class="pagination">
      <li class="page-item disabled">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>  
  <!-- Pagination -->  
  </div>
  </main>
   <!--Main layout-->
  

   










   <div class="container" style="width:1400px;">
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
              <style>
                .cart-wrap {
	padding: 40px 0;
	font-family: 'Open Sans', sans-serif;
}
.main-heading {
	font-size: 19px;
	margin-bottom: 20px;
}
.table-wishlist table {
    width: 100%;
}
.table-wishlist thead {
    border-bottom: 1px solid #e5e5e5;
    margin-bottom: 5px;
}
.table-wishlist thead tr th {
    padding: 8px 0 18px;
    color: #484848;
    font-size: 15px;
    font-weight: 400;
}
.table-wishlist tr td {
    padding: 25px 0;
    vertical-align: middle;
}
.table-wishlist tr td .img-product {
    width: 72px;
    float: left;
    margin-left: 8px;
    margin-right: 31px;
    line-height: 63px;
}
.table-wishlist tr td .img-product img {
	width: 100%;
}
.table-wishlist tr td .name-product {
    font-size: 15px;
    color: #484848;
    padding-top: 8px;
    line-height: 24px;
    width: 50%;
}
.table-wishlist tr td.price {
    font-weight: 600;
}
.table-wishlist tr td .quanlity {
    position: relative;
}

.total {
	font-size: 24px;
	font-weight: 600;
	color: #8660e9;
}
.display-flex {
	display: flex;
}
.align-center {
	align-items: center;
}
.round-black-btn {
	border-radius: 25px;
    background: #212529;
    color: #fff;
    padding: 5px 20px;
    display: inline-block;
    border: solid 2px #212529; 
    transition: all 0.5s ease-in-out 0s;
    cursor: pointer;
    font-size: 14px;
}
.round-black-btn:hover,
.round-black-btn:focus {
	background: transparent;
	color: #212529;
	text-decoration: none;
}
.mb-10 {
    margin-bottom: 10px !important;
}
.mt-30 {
    margin-top: 30px !important;
}
.d-block {
    display: block;
}
.custom-form label {
    font-size: 14px;
    line-height: 14px;
}
.pretty.p-default {
    margin-bottom: 15px;
}
.pretty input:checked~.state.p-primary-o label:before, 
.pretty.p-toggle .state.p-primary-o label:before {
    border-color: #8660e9;
}
.pretty.p-default:not(.p-fill) input:checked~.state.p-primary-o label:after {
    background-color: #8660e9 !important;
}
.main-heading.border-b {
    border-bottom: solid 1px #ededed;
    padding-bottom: 15px;
    margin-bottom: 20px !important;
}
.custom-form .pretty .state label {
    padding-left: 6px;
}
.custom-form .pretty .state label:before {
    top: 1px;
}
.custom-form .pretty .state label:after {
    top: 1px;
}
.custom-form .form-control {
    font-size: 14px;
    height: 38px;
}
.custom-form .form-control:focus {
    box-shadow: none;
}
.custom-form textarea.form-control {
    height: auto;
}
.mt-40 {
    margin-top: 40px !important; 
}
.in-stock-box {
	background: #ff0000;
	font-size: 12px;
	text-align: center;
	border-radius: 25px;
	padding: 4px 15px;
	display: inline-block;  
    color: #fff;
}
.trash-icon {
    font-size: 20px;
    color: #212529;
}
              </style>
              <div class="cart-wrap">
                <div class="container">
                      <div class="row">
                      <div class="col-md-12">
                          <div class="main-heading mb-10">My wishlist</div>
                          <div class="table-wishlist">
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                              <thead>
                                <tr>
                                  <th width="45%">Product Name</th>
                                  <th width="15%">Unit Price</th>
                                  <th width="15%">Stock Status</th>
                                  <th width="15%"></th>
                                  <th width="10%"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td width="45%">
                                    <div class="display-flex align-center">
                                                    <div class="img-product">
                                                        <img src="https://www.91-img.com/pictures/laptops/asus/asus-x552cl-sx019d-core-i3-3rd-gen-4-gb-500-gb-dos-1-gb-61721-large-1.jpg" alt="" class="mCS_img_loaded">
                                                    </div>
                                                    <div class="name-product">
                                                        Apple iPad Mini
                                                    </div>
                                                  </div>
                                              </td>
                                  <td width="15%" class="price">$110.00</td>
                                  <td width="15%"><span class="in-stock-box">In Stock</span></td>
                                  <td width="15%"><button class="round-black-btn small-btn">Add to Cart</button></td>
                                  <td width="10%" class="text-center"><a href="#" class="trash-icon"><i class="far fa-trash-alt"></i></a></td>
                                </tr>
                                <tr>
                                  <td width="45%">
                                    <div class="display-flex align-center">
                                                    <div class="img-product">
                                                        <img src="https://www.91-img.com/pictures/laptops/asus/asus-x552cl-sx019d-core-i3-3rd-gen-4-gb-500-gb-dos-1-gb-61721-large-1.jpg" alt="" class="mCS_img_loaded">
                                                    </div>
                                                    <div class="name-product">
                                                        Apple iPad Mini
                                                    </div>
                                                  </div>
                                              </td>
                                  <td width="15%" class="price">$110.00</td>
                                  <td width="15%"><span class="in-stock-box">In Stock</span></td>
                                  <td width="15%"><button class="round-black-btn small-btn">Add to Cart</button></td>
                                  <td width="10%" class="text-center"><a href="#" class="trash-icon"><i class="far fa-trash-alt"></i></a></td>
                                </tr>
                                <tr>
                                  <td width="45%">
                                    <div class="display-flex align-center">
                                                    <div class="img-product">
                                                        <img src="https://www.91-img.com/pictures/laptops/asus/asus-x552cl-sx019d-core-i3-3rd-gen-4-gb-500-gb-dos-1-gb-61721-large-1.jpg" alt="" class="mCS_img_loaded">
                                                    </div>
                                                    <div class="name-product">
                                                        Apple iPad Mini
                                                    </div>
                                                  </div>
                                              </td>
                                  <td width="15%" class="price">$110.00</td>
                                  <td width="15%"><span class="in-stock-box">In Stock</span></td>
                                  <td width="15%"><button class="round-black-btn small-btn">Add to Cart</button></td>
                                  <td width="10%" class="text-center"><a href="#" class="trash-icon"><i class="far fa-trash-alt"></i></a></td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
             </div>
            
          </div>
       </div>
    </div>
 </div>
 <a href="#" data-toggle="modal"  data-target="#getproduct"  class="text-secondary font-weight-bold text-xs text-success getproduct" data-toggle="tooltip" data-original-title="Get Product">
  <i class="fa fa-eye"></i>
</a>


  <footer class="text-center text-white mt-4" style="background-color: #607D8B">
    
    <!--Call to action-->
      <div class="pt-4 pb-2">
        <a class="btn btn-outline-white footer-cta mx-2" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank" role="button">Download MDB
          <i class="fas fa-download ms-2"></i>
        </a>
        <a class="btn btn-outline-white footer-cta mx-2" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start free tutorial
          <i class="fas fa-graduation-cap ms-2"></i>
        </a>
      </div>
      <!--/.Call to action-->
    
    <hr class="text-dark">
    
    <div class="container">
      <!-- Section: Social media -->
      <section class="mb-3">
        
        <!-- Facebook -->
        <a
          class="btn-link btn-floating btn-lg text-white"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a
          class="btn-link btn-floating btn-lg text-white"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a
          class="btn-link btn-floating btn-lg text-white"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a
          class="btn-link btn-floating btn-lg text-white"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- YouTube -->
        <a
          class="btn-link btn-floating btn-lg text-white"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-youtube"></i
        ></a>
        <!-- Github -->
        <a
          class="btn-link btn-floating btn-lg text-white"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); text-color: #E0E0E0">
      © 2022 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>








    <div class="container">
      <!-- Modal -->
      <div class="modal fade" id="checkout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
         <div class="modal-dialog" role="document">
            <div class="modal-content" style="width:900px;">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Check Out Page</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
             
                <main class="page">
                  <section class="shopping-cart dark">
                    <div class="container">
                         <div class="block-heading">
                           <h2>Shopping Cart</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                         </div>
                         <div class="content">
                        <div class="row">
                          <div class="col-md-12 col-lg-8">
                            <div class="items">
                              <div class="product">
                                <div class="row">
                                  <div class="col-md-3">
                                    <img class="img-fluid mx-auto d-block image" src="image.jpg">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="info">
                                      <div class="row">
                                        <div class="col-md-5 product-name">
                                          <div class="product-name">
                                            <a href="#">Lorem Ipsum dolor</a>
                                            <div class="product-info">
                                              <div>Display: <span class="value">5 inch</span></div>
                                              <div>RAM: <span class="value">4GB</span></div>
                                              <div>Memory: <span class="value">32GB</span></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4 quantity">
                                          <label for="quantity">Quantity:</label>
                                          <input id="quantity" type="number" value ="1" class="form-control quantity-input">
                                        </div>
                                        <div class="col-md-3 price">
                                          <span>$120</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="product">
                                <div class="row">
                                  <div class="col-md-3">
                                    <img class="img-fluid mx-auto d-block image" src="image.jpg">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="info">
                                      <div class="row">
                                        <div class="col-md-5 product-name">
                                          <div class="product-name">
                                            <a href="#">Lorem Ipsum dolor</a>
                                            <div class="product-info">
                                              <div>Display: <span class="value">5 inch</span></div>
                                              <div>RAM: <span class="value">4GB</span></div>
                                              <div>Memory: <span class="value">32GB</span></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4 quantity">
                                          <label for="quantity">Quantity:</label>
                                          <input id="quantity" type="number" value ="1" class="form-control quantity-input">
                                        </div>
                                        <div class="col-md-3 price">
                                          <span>$120</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="product">
                                <div class="row">
                                  <div class="col-md-3">
                                    <img class="img-fluid mx-auto d-block image" src="image.jpg">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="info">
                                      <div class="row">
                                        <div class="col-md-5 product-name">
                                          <div class="product-name">
                                            <a href="#">Lorem Ipsum dolor</a>
                                            <div class="product-info">
                                              <div>Display: <span class="value">5 inch</span></div>
                                              <div>RAM: <span class="value">4GB</span></div>
                                              <div>Memory: <span class="value">32GB</span></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4 quantity">
                                          <label for="quantity">Quantity:</label>
                                          <input id="quantity" type="number" value ="1" class="form-control quantity-input">
                                        </div>
                                        <div class="col-md-3 price">
                                          <span>$120</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 col-lg-4">
                            <div class="summary">
                              <h3>Summary</h3>
                              <div class="summary-item"><span class="text">Subtotal</span><span class="price">$360</span></div>
                              <div class="summary-item"><span class="text">Discount</span><span class="price">$0</span></div>
                              <div class="summary-item"><span class="text">Shipping</span><span class="price">$0</span></div>
                              <div class="summary-item"><span class="text">Total</span><span class="price">$360</span></div>
                              <button type="button" class="btn btn-primary btn-lg btn-block">Checkout</button>
                            </div>
                          </div>
                        </div> 
                      </div>
                    </div>
                 </section>
               </main>
               </div>
              
            </div>
         </div>
      </div>
   </div>






    
    <!-- Copyright -->
  </footer>






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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
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


<script>
  function Addtocart(product_name,product_rate,session_user){
      var pro_name = product_name;
      var pro_rate = product_rate;
      var pro_user = session_user;
      // var pro_qyt = qyt;
  
      $.ajax({
        url:"{{route('addtocart')}}",
        method:'POST',
        data:{
          _token: "{{ csrf_token() }}",
          pro_name: pro_name,pro_rate: pro_rate,pro_user:pro_user},
          success:function(data){
             console.log(data);
            }
      })
  }
</script>

</html>


