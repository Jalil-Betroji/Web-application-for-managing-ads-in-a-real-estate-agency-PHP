<?php
require 'connect.php';
session_start();

if(isset($_SESSION['email'])){
    $clientEmail = $_SESSION['email'];
    $sql = "SELECT a.Client_ID , a.Last_Name, b.First_Name, a.Country ,a.Email , a.Phone , a.Account_Type,
     a.City , a.Code_Postal ,a.CIN , 'Full_Name' , concat(b.First_Name ,' ',a.Last_Name) as 'Full_Name'
    FROM client a,client b WHERE a.Email = '$clientEmail';";
    $statment = $conn->query($sql)->fetch();
    $clientID = $statment['Client_ID'];

    $selectUserAnnounce = "SELECT announces.Announce_ID,Client_ID,Title,Area,Rooms,Bathrooms,Price,Country,City,Code_Postal,House_Number,House_Floor,Type,Category,Image_Path
    FROM announces
    INNER JOIN images ON announces.Announce_ID = images.Image_ID
    WHERE Client_ID = '$clientID'";
     $announces = $conn->prepare($selectUserAnnounce);
     $announces->execute();
     $announces_List = $announces->fetchAll();

}
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
                <form class="navbar-nav ms-auto" method="POST">
                    <a href="index.php" class="nav-item nav-link active">Home</a>

                    <div class="nav-item dropdown d-flex m-1">
                        <a href="#" class="nav-item"><img class="rounded-circle" style="width:4rem; height:4rem;"
                                src="img/Review1.jpg">
                            <span class="fw-bold"><?php echo $statment['Full_Name'] ?></span>
                        </a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="myfullannouncelist.php" class="dropdown-item" id="my_announces">My Announces</a>
                            <a href="#add_announces" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#add_announces" id="add_announce">Add Announce</a>
                            <a href="#Profile" class="dropdown-item" id="setting">Setting</a>
                            <a href="logout.php" name="logout" class="dropdown-item">Log out</a>
                        </div>
                    </div>

                </form>
            </div>
        </nav>
    </header>
    <!-- ============ Header Navbar End ============ -->

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
                <form action="profile.php" method="POST" class="mb-4 pb-4">
                    
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
                        $i =0;
                         foreach($announces_List as $values){  
                            ++$i;                        
                             if($i<=6){
                        ?>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                    <div
                                        class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For <?php echo $values['Category'] ?>
                                    </div>
                                    <div
                                        class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        <?php echo $values['Type'] ?>
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-color mb-3"><?php echo $values['Price'] ?>$</h5>
                                    <a class="d-block h5 mb-2" href=""><?php echo $values['Title'] ?></a>
                                    <p><i class="fa fa-map-marker-alt text-color me-2"></i><?php echo $values['Code_Postal'] ?>, <?php echo $values['City'] ?>-<?php echo $values['Country'] ?></p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-color me-2"></i><?php echo $values['Area'] ?> m2</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-color me-2"></i><?php echo $values['Rooms'] ?> Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-color me-2"></i><?php echo $values['Bathrooms'] ?> Bath</small>
                                </div>
                                <div class="d-flex m-2 justify-content-between">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#more_details_modal"
                                    >Details</button>
                                    <button class="btn btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#EditModal"
                                     >Update</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        <?php
                             }
                          
                         }
                         ?>                  
                        </div>
                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary py-3 px-5" href="myfullannouncelist.php" id="browse_more">Browse
                                More Announces</a>
                        </div>
                    </div>
                </div>
    </section>

    <!-- ============ Announces List Home Page End ============ -->

    <!-- ============ Profile Setting Start ============ -->

    <section>
        <form  class="row justify-content-center mt-5 w-100 profile_hide" id="Profile">
            <div class="col-md-5 profile form-input">
                 <p id="First_name_error"></p>
                 <input type="text" name="first_Name" id="first_Name" value="<?php echo $statment['First_Name'] ?>" tabindex="10" required>

                 <p id="email_error"></p>
                 <input type="email" name="email" id="email" value="<?php echo $statment['Email'] ?>" tabindex="10" required>
            
                 <p id="Country_error"></p>
                 <input type="text" name="country" id="country" value="<?php echo $statment['Country'] ?>" required>
            
                 <p id="address_error"></p>
                 <input type="text" name="address" id="address" value="<?php echo $statment['Code_Postal'] ?>, <?php echo $statment['Country'] ?>-<?php echo $statment['City'] ?>" required>

                 <input type="text" name="cin" value="<?php echo $statment['CIN'] ?>" tabindex="10" required>
            </div>
            <div class="col-md-5 profile form-input">

                 <p id="Last_name_error"></p>
                 <input type="text" name="last_Name" id="last_Name" value="<?php echo $statment['Last_Name'] ?>" required>
            
                 <p id="phone_error"></p>
                 <input type="text" name="phone" id="phone" value="0<?php echo $statment['Phone'] ?>" required>

                 <p id="city_error"></p>
                 <input type="text" name="city" id="city" value="<?php echo $statment['City'] ?>" tabindex="10" required>

                 <p id="postal_error"></p>
                 <input type="text" name="code_Postal" id="code_Postal" value="<?php echo $statment['Code_Postal'] ?>" tabindex="10" required>

                 <p id="type_error"></p>
                 <input type="text" name="account_Type" id="account_Type" value="<?php echo $statment['Account_Type'] ?>" required>
            </div>
             <input type="submit" class="btn btn-warning col-md-6 container" value="Update">
       </form>
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
                    <form id="add_new_announce" enctype="multipart/form-data" class="form-input">
                        <div id="modal_flex">
                            <div class="form-box px-3">
                                <div>
                                    Select image to upload:
                                    <input type="file" name="image[]" class="border-0" multiple="multiple">
                                </div>

                                <div class="form-input">
                                    <p id="title_error"></p>
                                    <input type="text" name="Title" id="title" placeholder="Title">
      
                                    <p id="rooms_error"></p>
                                    <input type="text" name="Rooms" id="rooms" placeholder="Rooms">

                                    <p id="price_error"></p>
                                    <input type="number" name="Price" id="price" placeholder="Price">

                                    <p id="city_error"></p>
                                    <select name="City" id="city">
                                        <option selected>City</option>
                                        <option value="Tanger">Tanger</option>
                                        <option value="Tetouan">Tetouan</option>
                                        <option value="Casablanca">Casablanca</option>
                                        <option value="Hociema">Hociema</option>
                                        <option value="Rabat">Rabat</option>
                                    </select>

                                    <p id="houseNumber_error"></p>
                                    <input type="text" name="house_number" id="house_number" placeholder="House Number">

                                    <p id="category_error"></p>
                                    <select name="Category" id="category">
                                        <option value="- Select Category -" selected>
                                            - Select Category -
                                        </option>
                                        <option value="Rent" >Rental</option>
                                        <option value="Sell" >Sell</option>
                                    </select>

                                </div>

                                <div class="form-input">

                                    <p id="area_error"></p>
                                    <input type="number" name="Area" id="area" placeholder="Area">

                                    <p id="bathroom_error"></p>
                                    <input type="tex" name="Bathrooms" id="bathrooms" placeholder="Bathrooms">

                                    <p id="country_error"></p>
                                    <select name="Country" id="country">
                                        <option selected>Country</option>
                                        <option value="Morocco">Morocco</option>
                                    </select>

                                    <p id="codePostal_error"></p>
                                    <input type="tex" name="code_postal" id="code_postal" placeholder="Code Postal">

                                    <p id="houseFloor_error"></p>
                                    <input type="tex" name="house_floor" id="house_floor" placeholder="House Floor">

                                    <p id="type_error"></p>
                                    <select name="Type" id="type">
                                        <option selected>Type</option>
                                        <option value="Appartment">Appartment</option>
                                        <option value="House">House</option>
                                        <option value="Villa">Villa</option>
                                        <option value="Office">Office</option>
                                        <option value="Land">Land</option>
                                    </select>
                                </div>

                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <input type="submit" id="add_Announce" class="btn btn-warning" value="Add Announce">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- =========================================== -->
        <!-- The End of add announce Modal -->
        <!-- =========================================== -->

         <!-- =========================================== -->
              <!-- The Start Delete Modal -->
      <!-- =========================================== -->

      <div
        class="modal fade"
        id="DeleteModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Delete Announce
              </h1>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <form id="confirm_delete">
              <input type="hidden" name="delete_id" id="delete_id" >
              <div id="modal_flex">                
                  
                  <h3><i class="fa-sharp fa-solid fa-trash"></i>Are you sure you want to delete this announce ?</h3> 
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-warning"
                data-bs-dismiss="modal"
              >
                Cancel
              </button>
              <button
                type="button"
                class="btn btn-warning"
                data-bs-dismiss="modal"
              >
                Delete
              </button>
            </div>
            </form>
          </div>
        </div>
      </div>

      <!-- =========================================== -->
              <!-- The End Delete Modal -->
      <!-- =========================================== -->

      
                <!-- More Details modal start -->

                <section class="modal fade" id="more_details_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog-centered modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
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
                                            <h4 class="text-primary mb-4"> Category : <span
                                                    class="text-dark">Sell</span>
                                            </h4>

                                            <h4 class="text-primary mb-4"> Type : <span
                                                    class="text-dark">Appartment</span></h4>

                                            <h4 class="text-primary mb-4"> Area : <span class="text-dark">1000 m2</span>
                                            </h4>

                                            <h4 class="text-primary mb-4"> ped : <span class="text-dark">2 Bed</span>
                                            </h4>

                                            <h4 class="text-primary mb-4"> Bathrooms : <span class="text-dark">2
                                                    Bath</span></h4>

                                            <h4 class="text-primary mb-4"> Address : <span
                                                    class="text-dark">Tanger-Ahlan</span></h4>

                                            <h4 class="text-primary mb-4"> Category : <span
                                                    class="text-dark">Sell</span></h4>

                                            <h4 class="text-primary"> Type : <span class="text-dark">Appartment</span>
                                            </h4>
                                        </div>

                                    </form>
                                </div>

                                <!-- ======== -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary w-45"
                                    data-bs-dismiss="modal">Cancel</button>
                                <a href="messenger.php"><button type="button" class="btn btn-primary w-45">Contact
                                        Announcer</button></a>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- More detaials modal end -->

                 <!-- =========================================== -->
                         <!-- The Start of Edit Modal -->
                 <!-- =========================================== -->

      <div
        class="modal fade"
        id="EditModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
       >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Edit Announce
              </h1>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <form id="update_announce" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div id="modal_flex">
              <input type="hidden" name="announce_id" id="announce_id" >
                <div id="update_Image">
                  <img id="edit_Image" src="" alt="">
                  <input type="file" name="edit_Image">
                </div>
                <div>
                  <div>
                    <label>Title : </label>
                    <input type="text" class="container" name="Title" id="Title"/>
                  </div>
                  
                  <div>
                    <label>Description : </label>
                    <input type="text" class="container" name="Description" id="Description" />
                  </div>
                  <div>
                    <label>Area : </label>
                    <input type="text" class="container" name="Area" id="Area" />
                  </div>
                  <div>
                    <label>Adress : </label>
                    <input type="text" class="container" name="Address" id="Address" />
                  </div>
                  <div>
                    <label>Amount : </label>
                    <input type="number" class="container" name="Amount" id="Amount" />
                  </div>
                  <div>
                    <label>Announce Date : </label>
                    <input type="date" class="container" name="Announce_Date" id="Announce_Date" />
                  </div>
                  <div>
                    <label>Type : </label>
               
                    <select id="Type" name="Type" class="form-select" aria-label="Default select example">
                      <option selected value="Rental">Rental</option>
                      <option value="Sell">Sell</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-warning"
                data-bs-dismiss="modal"
              >
                Close
              </button>
              <button type="submit"
                type="button"
                class="btn btn-warning"
                data-bs-dismiss="modal"
              >
                Update
              </button>
            </div>
          </form>
          </div>
        </div>
      </div>

      <!-- =========================================== -->
                <!-- The End of Edit Modal -->
      <!-- =========================================== -->



        <!-- Template Javascript -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="js/profile.js"></script>
        <script src="js/updateProfile.js"></script>
        <script>
//           $(document).ready(function () {
//   $("#filter_My_Announce").submit(function (event) {
//     // Prevent the form from submitting the normal way and refreshing the page
//     event.preventDefault();

//       // Get the form data
//       var formData = $("#filter_My_Announce").serialize();

//       // Send the form data using ajax
//       $.ajax({
//         type: "POST",
//         url: "search.php",
//         data: formData,
//         success: function (response) {
//           // Display the response on the page
//           $("#result").html(response);
//           console.log("hello jalil im inside response");
//           $('#full_Announces_List').html(#full_Announces_List);
//         },
//       });
//   });
// });


        </script>
       
</body>

</html>