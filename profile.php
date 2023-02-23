<?php
require 'connect.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HomeLand - Profile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- FontsAwesome -->

    <script src="https://kit.fontawesome.com/ad59909c53.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ============ Header Navbar Start ============ -->

    <header class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                <div class="icon me-2">
                    <img class="img-fluid" src="img/logo1.png" alt="Icon" style="width: 4rem; height: 4rem;">
                </div>
                <h1 class="m-0 text-color">HomeLand</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>


                    <div class="nav-item dropdown d-flex m-1">
                        <a href="#" class="nav-item"><img class="rounded-circle" style="width:4rem; height:4rem;"
                                src="img/Review1.jpg">
                            <span class="fw-bold">jalil betroji</span>
                        </a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#full_Announces_List" class="dropdown-item" id="my_announces">My Announces</a>
                            <a href="#add_announces" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#add_announces" id="add_announce">Add Announce</a>
                            <a href="#Profile" class="dropdown-item" id="setting">Setting</a>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    <!-- ============ Header Navbar End ============ -->


    <!-- =========== My Full Announces List Start ============= -->

    <section class="container-xxl py-5 profile_hide" id="full_Announces_List">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3 container">Your Announces List</h1>

                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sell</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For Rent</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-4">Published date
                                <i class="fa-solid fa-caret-up"></i>
                            </a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-5">Price
                                <i class="fa-solid fa-caret-up"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                    <div
                                        class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Sell
                                    </div>
                                    <div
                                        class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Appartment
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-color mb-3">$12,345</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-color me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-color me-2"></i>1000 m2</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-color me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-color me-2"></i>2 Bath</small>
                                </div>
                                <div class="d-flex m-2 justify-content-between">
                                    <button class="btn btn-primary">Details</button>
                                    <button class="btn btn-warning">Update</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-2.jpg" alt=""></a>
                                    <div
                                        class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Rent</div>
                                    <div
                                        class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Villa
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-color mb-3">$12,345</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-color me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-color me-2"></i>1000 m2</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-color me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-color me-2"></i>2 Bath</small>
                                </div>
                                <div class="d-flex m-2 justify-content-between">
                                    <button class="btn btn-primary">Details</button>
                                    <button class="btn btn-warning">Update</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-3.jpg" alt=""></a>
                                    <div
                                        class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Sell</div>
                                    <div
                                        class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Office
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-color mb-3">$12,345</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-color me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-color me-2"></i>1000 m2</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-color me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-color me-2"></i>2 Bath</small>
                                </div>
                                <div class="d-flex m-2 justify-content-between">
                                    <button class="btn btn-primary">Details</button>
                                    <button class="btn btn-warning">Update</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-4.jpg" alt=""></a>
                                    <div
                                        class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Rent</div>
                                    <div
                                        class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        House
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-color mb-3">$12,345</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-color me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-color me-2"></i>1000 m2</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-color me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-color me-2"></i>2 Bath</small>
                                </div>
                                <div class="d-flex m-2 justify-content-between">
                                    <button class="btn btn-primary">Details</button>
                                    <button class="btn btn-warning">Update</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-5.jpg" alt=""></a>
                                    <div
                                        class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Sell</div>
                                    <div
                                        class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Studio
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-color mb-3">$12,345</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-color me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-color me-2"></i>1000 m2</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-color me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-color me-2"></i>2 Bath</small>
                                </div>
                                <div class="d-flex m-2 justify-content-between">
                                    <button class="btn btn-primary">Details</button>
                                    <button class="btn btn-warning">Update</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-6.jpg" alt=""></a>
                                    <div
                                        class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Rent</div>
                                    <div
                                        class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Villa
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-color mb-3">$12,345</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-color me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-color me-2"></i>1000 m2</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-color me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-color me-2"></i>2 Bath</small>
                                </div>
                                <div class="d-flex m-2 justify-content-between">
                                    <button class="btn btn-primary">Details</button>
                                    <button class="btn btn-warning">Update</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <!-- =========== My Full Announces List End ============= -->


    <!-- ============ Announces List Home Page Start ============ -->

    <section class="container-xxl py-5" id="profile_homePage">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3 container">Your Announces List</h1>

                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sell</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For Rent</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-4">Published date
                                <i class="fa-solid fa-caret-up"></i>
                            </a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-5">Price
                                <i class="fa-solid fa-caret-up"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                    <div
                                        class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Sell
                                    </div>
                                    <div
                                        class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Appartment
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-color mb-3">$12,345</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-color me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-color me-2"></i>1000 m2</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-color me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-color me-2"></i>2 Bath</small>
                                </div>
                                <div class="d-flex m-2 justify-content-between">
                                    <button class="btn btn-primary">Details</button>
                                    <button class="btn btn-warning">Update</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-2.jpg" alt=""></a>
                                    <div
                                        class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Rent</div>
                                    <div
                                        class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Villa
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-color mb-3">$12,345</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-color me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-color me-2"></i>1000 m2</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-color me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-color me-2"></i>2 Bath</small>
                                </div>
                                <div class="d-flex m-2 justify-content-between">
                                    <button class="btn btn-primary">Details</button>
                                    <button class="btn btn-warning">Update</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-3.jpg" alt=""></a>
                                    <div
                                        class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Sell</div>
                                    <div
                                        class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Office
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-color mb-3">$12,345</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-color me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-color me-2"></i>1000 m2</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-color me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-color me-2"></i>2 Bath</small>
                                </div>
                                <div class="d-flex m-2 justify-content-between">
                                    <button class="btn btn-primary">Details</button>
                                    <button class="btn btn-warning">Update</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-4.jpg" alt=""></a>
                                    <div
                                        class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Rent</div>
                                    <div
                                        class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        House
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-color mb-3">$12,345</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-color me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-color me-2"></i>1000 m2</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-color me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-color me-2"></i>2 Bath</small>
                                </div>
                                <div class="d-flex m-2 justify-content-between">
                                    <button class="btn btn-primary">Details</button>
                                    <button class="btn btn-warning">Update</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-5.jpg" alt=""></a>
                                    <div
                                        class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Sell</div>
                                    <div
                                        class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Studio
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-color mb-3">$12,345</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-color me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-color me-2"></i>1000 m2</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-color me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-color me-2"></i>2 Bath</small>
                                </div>
                                <div class="d-flex m-2 justify-content-between">
                                    <button class="btn btn-primary">Details</button>
                                    <button class="btn btn-warning">Update</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-6.jpg" alt=""></a>
                                    <div
                                        class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Rent</div>
                                    <div
                                        class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Villa
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-color mb-3">$12,345</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-color me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-color me-2"></i>1000 m2</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-color me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-color me-2"></i>2 Bath</small>
                                </div>
                                <div class="d-flex m-2 justify-content-between">
                                    <button class="btn btn-primary">Details</button>
                                    <button class="btn btn-warning">Update</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary py-3 px-5" href="#full_Announces_List" id="browse_more">Browse
                                More Announces</a>
                        </div>
                    </div>
                </div>
    </section>

    <!-- ============ Announces List Home Page End ============ -->

    <!-- ============ Profile Setting Start ============ -->

    <section class="row justify-content-center mt-5 w-100 profile_hide" id="Profile">

        <form class="col-md-5 profile form-input">
            <input type="text" name="" value="Jalil" tabindex="10" required>

            <input type="text" name="" value="Betroji" required>

            <input type="email" name="" value="client.customer@gmail.com" tabindex="10" required>

            <input type="text" name="" value="+212010101010" required>

            <input type="text" name="" value="GM******" tabindex="10" required>
        </form>
        <form class="col-md-5 profile form-input">

            <input type="text" name="" value="Morocco" required>

            <input type="text" name="" value="Tanger" tabindex="10" required>

            <input type="text" name="" value="Tanger-Ahlan" required>

            <input type="text" name="" value="Code Postal" tabindex="10" required>

            <input type="text" name="" value="Account Type" required>
        </form>
        <input type="submit" class="btn btn-warning col-md-6 container" value="Update">
    </section>

    <!-- ========== Profile Setting Start ======== -->

    <!-- =========================================== -->
    <!-- The Start of add announce Modal -->
    <!-- =========================================== -->

    <div class="modal fade" id="add_announces" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Add New Announce
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add_new_announce" method="POST" enctype="multipart/form-data" class="form-input">
                        <div id="modal_flex">
                            <form class="form-box px-3">
                                <div>
                                    Select image to upload:
                                    <input type="file" name="image[]" class="border-0" multiple="multiple">
                                </div>

                                <div class="form-input">
                                    <input type="text" name="Title" placeholder="Title">

                                    <input type="text" name="Rooms" placeholder="Rooms">

                                    <input type="number" name="Price" placeholder="Price">

                                    <select name="City">
                                        <option selected>City</option>
                                        <option value="Tanger">Tanger</option>
                                        <option value="Tetouan">Tetouan</option>
                                        <option value="Casablanca">Casablanca</option>
                                        <option value="Hociema">Hociema</option>
                                        <option value="Rabat">Rabat</option>
                                    </select>

                                    <input type="text" name="house_number" placeholder="House Number">

                                    <select name="Category">
                                        <option value="- Select Category -" selected>
                                            - Select Category -
                                        </option>
                                        <option value="Rent" >Rental</option>
                                        <option value="Sell" >Sell</option>
                                    </select>

                                </div>

                                <div class="form-input">

                                    <input type="number" name="Area" placeholder="Area">

                                    <input type="tex" name="Bathrooms" placeholder="Bathrooms">

                                    <select name="Country">
                                        <option selected>Country</option>
                                        <option value="Morocco">Morocco</option>
                                    </select>

                                    <input type="tex" name="code_postal" placeholder="Code Postal">

                                    <input type="tex" name="house_floor" placeholder="House Floor">

                                    <select name="Type">
                                        <option selected>Type</option>
                                        <option value="Appartment">Appartment</option>
                                        <option value="House">House</option>
                                        <option value="Villa">Villa</option>
                                        <option value="Office">Office</option>
                                        <option value="Land">Land</option>
                                    </select>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <input type="submit" name="add_announce_btn" class="btn btn-warning" value="Add Announce">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- =========================================== -->
        <!-- The End of add announce Modal -->
        <!-- =========================================== -->

        <!-- Template Javascript -->
        <script src="js/profile.js"></script>
        <script>
        $(document).on('submit','#add_new_announce',function(){
          var formData = new FormData(this);
          formData.append("save_announce",true);
          $.ajax({
            type:"POST",
            url:"code.php",
            data:formData,
            processData:false,
            contentType:false,
            success: function (response){
              var res = jQuery.parseJSON(response);
            }
          })
        })
        </script>
       
</body>

</html>