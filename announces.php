<?php
require 'connect.php';
session_start();
if(isset($_SESSION['email'])){
    $clientEmail = $_SESSION['email'];
    $sql = "SELECT a.Client_ID , a.Last_Name, b.First_Name, a.Country ,a.Email , a.Phone , a.Account_Type,
     a.City , a.Code_Postal ,a.CIN , 'Full_Name' , concat(b.First_Name ,' ',a.Last_Name) as 'Full_Name'
    FROM client a,client b WHERE a.Email = b.Email;";
    $statment = $conn->query($sql)->fetch();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HomeLand - Real Estate</title>
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

     <!-- jQuery cdn -->
     <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

</head>

<body>
    <main class="container-xxl bg-white p-0">


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
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
                <?php
                    if(isset($_SESSION['email'])){
                    ?>
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="#footer" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Announces</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="announces.php" class="dropdown-item">Announces List</a>
                                <a href="#Partners" class="dropdown-item">Our Partners</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <div class="nav-item dropdown d-flex m-1">
                    <a href="#" class="nav-item"><img class="rounded-circle" style="width:4rem; height:4rem;"
                    src="img/Review1.jpg">
                    <span class="fw-bold"><?php echo $statment['Full_Name'] ?></span>
                    </a>
                    <div class="dropdown-menu rounded-0 m-0">
                    <a href="profile.php" class="dropdown-item" id="my_announces">Profile</a>
                    <a href="logout.php" name="logout" class="dropdown-item">Log out</a>
         
                </div>
                </div>
                        
                       
                    </div>
                    <?php
                    }else{
                        ?>
                        <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="#footer" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Announces</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="announces.php" class="dropdown-item">Announces List</a>
                                <a href="#Partners" class="dropdown-item">Our Partners</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <div class="nav-item dropdown d-flex m-1">
                    <div class="nav-item nav-link user_sign">
                            <i class="fa-solid fa-right-to-bracket" data-bs-toggle="modal"
                                data-bs-target="#Login_modal"></i>
                        </div>
                        <div class="nav-item nav-link user_sign">
                            <i class="fa-solid fa-user-plus" data-bs-toggle="modal" data-bs-target="#signup_modal"></i>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <header class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Find A <span class="text-color">Perfect Home</span> To
                        Live With Your Family</h1>
                    <p class="animated fadeIn mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet
                        sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                    <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn"
                     data-bs-toggle="modal" data-bs-target="#signup_modal">Add An Announce</a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid size" src="img/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid size" src="img/carousel-2.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid size" src="img/carousel-3.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid size" src="img/carousel-4.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid size" src="img/carousel-5.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Search Start -->
        <section class="container-fluid bg-color mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
            <form method="POST" action="announces.php">
                 <div class="d-flex gap-2 flex-wrap">

                    <input type="number" name="min_price" class="border-0 rounded elect_property p-3"
                     placeholder="Min Price">
                    <input type="number" name="max_price" class="border-0 rounded select_property p-3" 
                    placeholder="Max Price">

                    <select class="border-0 rounded select_property p-3" name="city">
                        <option selected>City</option>
                        <option value="Tanger">Tanger</option>
                        <option value="Tetouan">Tetouan</option>
                        <option value="Casablanca">Casablanca</option>
                        <option value="Hociema">Hociema</option>
                        <option value="Rabat">Rabat</option>
                    </select>

                    <select class="border-0 rounded select_property p-3" name="category">
                        <option selected>Announce Category</option>
                        <option value="Sell">Sell</option>
                        <option value="Rent">Rent</option>
                    </select>

                    <select class="border-0 rounded select_property p-3" name="type">
                        <option selected>Type</option>
                        <option value="Appartment">Appartment</option>
                        <option value="House">House</option>
                        <option value="Villa">Villa</option>
                        <option value="Office">Office</option>
                        <option value="Land">Land</option>
                    </select>

                    <input type="submit" name="searchbtn" class="btn btn-dark border-0" value="Search">

                 </div>
                </form>
            </div>
        </section>
        <!-- Search End -->

        <!-- =========== Announces List Start =========== -->

        <section class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3">Announces List</h1>
                        <p>in our platform we provide you the best home for you
                            and for your family .</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <form action="announces.php" method="POST" class="mb-4 pb-4">
                    
                    <input type="submit" class="btn btn-outline-primary active" data-bs-toggle="pill"
                    name="featured" value="Featured">

                    <input type="submit" class="btn btn-outline-primary" data-bs-toggle="pill"
                    name="Sell" value="For Sell">

                    <input type="submit" class="btn btn-outline-primary" data-bs-toggle="pill"
                    name="rent" value="For Rent">

                    <div class="btn btn-outline-primary">
                        <input type="hidden" name="Sort_Date_A_OR_D">
                       <input type="submit" id="sort_date" class="btn btn-outline-primary" data-bs-toggle="pill"
                       name="published_date" value="Published date">
                        <i class="fa-solid fa-caret-up"></i>
                    </div>
                    <div class="btn btn-outline-primary">
                      <input type="submit" class="btn btn-outline-primary" data-bs-toggle="pill"
                      name="price" value="Price" >
                      <i class="fa-solid fa-caret-up"></i>  
                    </div>      
                </form>
                </div>
            </div>

            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                            <?php
                             if (isset($_POST['searchbtn'])){
                                 include 'search.php';     
                             }elseif(isset($_POST['Sell'])){
                                include 'sort.php';
                             }elseif(isset($_POST['rent'])){
                                include 'sort.php';
                             }elseif(isset($_POST['published_date'])){
                                include 'sort.php';
                             }elseif(isset($_POST['price'])){
                                include 'sort.php';
                             }elseif(isset($_POST['featured'])){
                                include 'sort.php';
                             }else{
                              $query = "SELECT announces.Announce_ID,Client_ID,Title,Area,Rooms,
                              Bathrooms,Price,Country,City,Code_Postal,House_Number,House_Floor,Type,Category,
                              Image_Path
                              FROM announces INNER JOIN images ON announces.Announce_ID = images.Image_ID";
                              $statment = $conn->prepare($query);
                              $statment->execute();
                              $announces_List = $statment->fetchAll();
                              foreach($announces_List as $values){
                             ?>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/<?php echo($values['Image_Path']) ?>" alt=""></a>
                                    <div
                                        class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For <?php echo($values['Category']) ?>
                                    </div>
                                    <div
                                        class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        <?php echo($values['Type']) ?>
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-color mb-3"><?php echo($values['Price']) ?></h5>
                                    <a class="d-block h5 mb-2" href=""><?php echo($values['Title']) ?></a>
                                    <p><i class="fa fa-map-marker-alt text-color me-2"></i><?php echo($values['Code_Postal']) ?> ,<?php echo($values['City']) ?>-
                                       <?php echo($values['Country']) ?></p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-color me-2"></i><?php echo($values['Area']) ?> m2</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-color me-2"></i><?php echo($values['Rooms']) ?> Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-color me-2"></i><?php echo($values['Bathrooms']) ?> Bath</small>
                                </div>
                                <button class="btn btn-primary w-100" data-bs-toggle="modal"
                                    data-bs-target="#more_details_modal">More Details</button>
                            </div>
                        </div>
                        <?php                         
                        }
                       }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- =========== Announces List End =========== -->


        <!-- Log in  modal start -->

        <section class="modal fade" id="Login_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog-centered modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Sign in into your account and
                                    enjoy
                                    exploring the planet</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body row gap-3">
                                <!-- ======== -->
                                <div class="col img-left d-none d-md-flex">
                                    <img src="img/login.jpg" alt="">
                                </div>
                                <form class="col form-box px-3" action="code.php" method="POST">

                                    <h4 class="title text-center mt-4">
                                        Login into account
                                    </h4>
                                    <div class="form-input">
                                        <span><i class="fa fa-envelope-o"></i></span>
                                        <input type="email" name="login_email" class="email_Validation" placeholder="Email Address"
                                            tabindex="10" required>
                                    </div>
                                    <div class="form-input">
                                        <span><i class="fa fa-key"></i></span>
                                        <input type="password" name="login_password" placeholder="Password" required>
                                    </div>

                                    <input type="submit" class="btn btn-primary w-100" name="login_into_account" value="Login">


                                    <div class="text-center mb-2">
                                        Don't have an account?
                                        <a href="" class="register-link" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signup_modal">
                                            Register here
                                        </a>
                                    </div>
                                </form>



                                <!-- ======== -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Log in modal end -->



 <!-- signUp  modal start -->

 <section class="modal fade" id="signup_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog-centered modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">signUp and start make money from
                                    your house
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- ======== -->
                                <h4 class="title text-center mt-4">
                                    Create an account
                                </h4>

                                <div class="d-flex flex-wrap gap-2">
                                    <figure class="img-left d-none d-md-flex">
                                        <img src="img/signup.jpg" alt="">
                                    </figure>
                                    <form class="px-3" action="code.php" method="POST">
                                        <input type="hidden" name="save_data" id="save_data" value="">
                                        <div class="d-flex justify-content-around">
                                            <p id="First_name_error" class="error"></p>
                                            <p id="Last_name_error" class="error"></p>
                                        </div>
                                        <div class="form-input">
                                            <span><i class="fa-solid fa-user"></i></span>
                                            <input type="text" name="fname" id="fname_validation" placeholder="First Name"
                                                tabindex="10" required>


                                            <span><i class="fa-solid fa-user"></i></span>
                                            <input type="text" name="lname" id="lname_validation" placeholder="Last Name"
                                                tabindex="10" required>
                                        </div>
                                        <div class="d-flex justify-content-around">
                                            <p id="email_error" class="error"></p>
                                            <p id="phone_error" class="error"></p>
                                        </div>
                                        <div class="form-input">
                                            <span><i class="fa fa-envelope-o"></i></span>
                                            <input type="email" name="email" id="email_Validation"
                                                placeholder="Email Address" tabindex="10" required>

                                            <span><i class="fa-solid fa-phone-volume"></i></span>
                                            <input type="number" name="phone" id="phone_Validation"
                                                placeholder="Phone Number" tabindex="10" required>
                                        </div>
                                        <div class="d-flex justify-content-around">
                                            <p id="CIN_error" class="error"></p>
                                            <p id="Country_error" class="error"></p>
                                        </div>
                                        <div class="form-input">
                                            <span><i class="fa-solid fa-address-card"></i></span>
                                            <input type="text" name="cin" id="cin_Validation" placeholder="CIN"
                                                tabindex="10" required>

                                            <span><i class="fa-solid fa-earth-americas"></i></span>
                                            <input type="text" name="country" id="country_Validation" placeholder="Country"
                                                tabindex="10" required>
                                        </div>
                                        <div class="d-flex justify-content-around">
                                            <p id="city_error" class="error"></p>
                                            <p id="address_error" class="error"></p>
                                        </div>
                                        <div class="form-input">
                                            <span><i class="fa-solid fa-city"></i></span>
                                            <input type="text" name="city" id="city_Validation" placeholder="City"
                                                tabindex="10" required>

                                            <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                            <input type="text" name="address" id="address_Validation" placeholder="Address"
                                                tabindex="10" required>
                                        </div>
                                        <div class="d-flex justify-content-around">
                                            <p id="password_error" class="error"></p>
                                            <p id="re_password_error" class="error"></p>
                                        </div>
                                        <p id="passwords_compare"></p>
                                        <div class="form-input">
                                            <span><i class="fa fa-key"></i></span>
                                            <input type="password" name="password" id="password_Validation"
                                                placeholder="Password" required>

                                            <span><i class="fa fa-key"></i></span>
                                            <input type="password" name="" id="re_password_Validation"
                                                placeholder="Rewrite Password" required>
                                        </div>
                                        <div class="d-flex justify-content-around">
                                            <p id="postal_error" class="error"></p>
                                            <p id="type_error" class="error"></p>
                                        </div>
                                        <div class="form-input">
                                            <span><i class="fa-solid fa-envelopes-bulk"></i></span>
                                            <input type="text" name="postal" id="postal_Validation" placeholder="Code Postal"
                                                required>
                                            <select class="type_Validation" name="type">
                                                <option class="type_Validation" value="Account Type" selected>Account
                                                    Type</option>
                                                <option class="type_Validation" value="Seller">Seller</option>
                                                <option class="type_Validation" value="Company">Company</option>
                                            </select>
                                        </div>
                                        <p id="signup_error" class="error"></p>
                                        <input type="submit" id="signUp" name="add_client" class="btn btn-primary w-100" value="Sign Up">


                                        <div class="text-center mb-2">
                                            Already have an account?
                                            <a href="" class="register-link" data-bs-dismiss="modal" data-bs-toggle="modal"
                                                data-bs-target="#Login_modal">
                                                Login
                                            </a>
                                        </div>
                                    </form>
                                </div>

                                <!-- ======== -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- sign up modal end -->



        <!-- More Details modal start -->

        <section class="modal fade" id="more_details_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog-centered modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- ======== -->

                        <h4 class="title text-center mt-4">Golden Urban House For Sell</h4>

                        <div class="row gap-3">
                            <form class="col">
                                <img src="img/carousel-2.jpg" alt="" style="width:100%;height:100%;">
                            </form>
                            <form class="col-lg-5 px-3">

                                <div>
                                    <h4 class="text-primary mb-4"> Category : <span class="text-dark">Sell</span>
                                    </h4>

                                    <h4 class="text-primary mb-4"> Type : <span class="text-dark">Appartment</span></h4>

                                    <h4 class="text-primary mb-4"> Area : <span class="text-dark">1000 m2</span>
                                    </h4>

                                    <h4 class="text-primary mb-4"> ped : <span class="text-dark">2 Bed</span>
                                    </h4>

                                    <h4 class="text-primary mb-4"> Bathrooms : <span class="text-dark">2
                                            Bath</span></h4>

                                    <h4 class="text-primary mb-4"> Address : <span class="text-dark">Tanger-Ahlan</span>
                                    </h4>

                                    <h4 class="text-primary mb-4"> Category : <span class="text-dark">Sell</span></h4>

                                    <h4 class="text-primary"> Type : <span class="text-dark">Appartment</span>
                                    </h4>
                                </div>

                            </form>
                        </div>

                        <!-- ======== -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary w-45" data-bs-dismiss="modal">Cancel</button>
                        <a href="messenger.html"><button type="button" class="btn btn-primary w-45">Contact
                                Announcer</button></a>
                    </div>
                </div>
            </div>
        </section>


        <!-- More detaials modal end -->

    </main>


    <!-- Footer Start -->
    <footer id="footer" class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Morocco,Tanger-Ahlan</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+212 567182560</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>support@homeland.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link text-white-50" href="">About Us</a>
                    <a class="btn btn-link text-white-50" href="">Contact Us</a>
                    <a class="btn btn-link text-white-50" href="">Our Services</a>
                    <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                    <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Subscribe to our Newsletter to get in touch with every new announce.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <img src="img/logo2.png" alt="" style="width: 15rem;height: 15rem;">
                </div>


            </div>
        </div>
        <div class="copyright d-flex justify-content-center">
            <p>&copy; <a class="border-bottom" href="#">HomeLand.com</a>,
                All Right
                Reserved.2023-2024
            </p>
        </div>
    </footer>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>


        //   $(document).ready(function(){ 
		//   $('#signUp').click(function(){ // prepare button inserts the JSON string in the hidden element 
		//     $('#str').val(JSON.stringify(jsarray)); 
		//    }); 
		//  }); 
        </script>
</body>

</html>