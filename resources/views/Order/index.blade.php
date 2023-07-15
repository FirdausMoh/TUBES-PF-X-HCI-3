<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- <title> {{ $pageTitle }} <title> --}}
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('public/fontawesome/css/all.css')}}">

    @vite(['/resources/css/style.css'])
    @vite(['/resources/css/bootstrap.min.css'])
    @vite(['/resources/sass/app.scss'])
    @vite(['/lib/owlcarousel/assets/owl.carousel.min.css'])
    @vite(['/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'])

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="" src="{{ Vite::asset('resources/images/LOGO.png') }}" alt="" style="width: 180px; height: 130px;">
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href=" {{ route('home')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dasbor</a>
                    <a href="" class="nav-item nav-link"><i class="fa fa-shopping-cart me-2"></i>Produk</a>
                    <a href="" class="nav-item nav-link"><i class="fa fa-user-friends me-2"></i>Pelanggan</a>
                    <a href="{{ route('order')}}" class="nav-item nav-link active"><i class="fa fa-chart-bar me-2"></i>Penjualan</a>
                    <a href="" class="nav-item nav-link"><i class="fa fa-cash-register me-2"></i>Titik Penjualan</a>
                    <a href="" class="nav-item nav-link"><i class="fa fa-cog me-2"></i>Setting</a>
                    <a href="{{ route('logout') }}" class="nav-item nav-link"><i class="fa fa-sign-out-alt me-2"
                     onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        </i>
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <div class="content">

            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto me-3">
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="rounded-circle me-lg-2 fa fa-user me-2"></i>
                            <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <div class="d-flex align-items-center justify-content-between mb-4">
                <h4 class="ms-4 mt-4">Penjualan Terbaru</h4>
                <a href="" class="btn btn-success mt-4 me-4">Buka POS</a>
            </div>

            <div class="container-fluid pt-4 px-4">

                <div class="bg-secondary text-center rounded p-4">
                    <div class="row g-2">
                        {{-- <div class="d-flex align-items-center justify-content-between mb-4">
                            <h4 class="ms-4 mt-4">Penjualan Terbaru</h4>
                            <a href="" class="btn btn-dark mt-4 me-4" style="background-color: #358EE0;"><i class="fas fa-filter" style="color: #ffffff;"></i>Filter</a>
                        </div>
                        <div class="col-md">
                          <div class="form-floating ">
                            <input type="email" class="form-control bg-white" id="floatingInputGrid" placeholder="name@example.com">
                            <label for="floatingInputGrid">DD/MM/YY</label>
                          </div>
                        </div>
                        <div class="col-md">
                          <div class="form-floating">
                            <input type="email" class="form-control bg-white" id="floatingInputGrid" placeholder="name@example.com">
                            <label for="floatingSelectGrid">DD/MM/YY</label>
                          </div>
                        </div>
                      </div> --}}
                        <!-- <div class="col-md-3"></div> -->
                        <div class="col-md-12">
                            <form action="">
                                <div class="row">
                                    <div class="col-md 5">
                                        <input type="date" name="start_date" class="form-control" value="{{request('start_date')}}" style="background-color: #ffffff" />
                                    </div>
                                    <div class="col-md-5">
                                        <input type="date" name="end_date" class="form-control" value="{{request('end_date')}}"style="background-color: #ffffff"  />
                                    </div>
                                    <div class="col-md-2 ms-5 ">
                                        <button class="btn btn-dark" type="submit" style="background-color: #358EE0"><i class="fas fa-filter"></i> Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr style="color:#ffffff ">
                        <table class="table text-start align-middle table-bordered table-hover mt-4">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">Pelanggan</th>
                                    <th scope="col">Total Harga</th>
                                    <th scope="col">Uang Diterima</th>
                                    <th scope="col">Kembalian</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Dibuat Pada</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>Miftahul</td>
                                    <td>Rp 190.000</td>
                                    <td>Rp 200.000</td>
                                    <td>Rp 10.000</td>
                                    <td></td>
                                    <td>29-08-2023</td>
                                </tr>
                                <tr>
                                    <td>001</td>
                                    <td>Miftahul</td>
                                    <td>Rp 190.000</td>
                                    <td>Rp 200.000</td>
                                    <td>Rp 10.000</td>
                                    <td></td>
                                    <td>29-08-2023</td>
                                </tr>
                                <tr>
                                    <td>001</td>
                                    <td>Miftahul</td>
                                    <td>Rp 190.000</td>
                                    <td>Rp 200.000</td>
                                    <td>Rp 10.000</td>
                                    <td></td>
                                    <td>29-08-2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


                        {{-- <!-- Footer Start -->
                        <div class="container-fluid pt-4 px-4">
                            <div class="bg-secondary rounded-top p-4">
                                <div class="row">
                                    <div class="col-12 col-sm-6 text-center text-sm-start">
                                        &copy; <a href="#">RYPOS SYSTEM</a>, All Right Reserved.
                                    </div>
                                    <div class="col-12 col-sm-6 text-center text-sm-end">
                                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                        Designed By <a href="https://htmlcodex.com">ThreeDeveloper</a>
                                        <br>Distributed By: <a href="https://themewagon.com" target="_blank">RYPOS SYSTEM</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Footer End --> --}}
                    </div>

<!-- Template Javascript -->
{{-- <script src="js/main.js"></script> --}}
<script src="{{ asset('resources/js/jquery.js') }}"></script>
<script src="{{ asset('resources/js/fa.js') }}"></script>
<script src="{{ asset('resources/js/main.js') }}"></script>
<script src="{{ asset('lib/chart/chart.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

</body>
</html>