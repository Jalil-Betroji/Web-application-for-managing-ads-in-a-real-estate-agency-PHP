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
     $defaultAnnounces = $conn->prepare($selectUserAnnounce);
     $defaultAnnounces->execute();
     $defaultAnnounces_List = $defaultAnnounces->fetchAll();

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
                    <a href="profile.php" class="nav-item nav-link active">Home</a>

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

     <!-- =========== My Full Announces List Start ============= -->

     <section class="container-xxl py-5" id="full_Announces_List">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3 container">Your Announces List</h1>

                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <form method="POST" action="myfullannouncelist.php">
                 <div class="d-flex gap-2 flex-wrap">
                    
                    <select class="border-1 rounded select_property p-3 mb-4" name="filter_Title"> 
                        <option selected>Filter By Title</option>
                        <option value="get all announces">get all announces</option>
                        <?php
                     foreach($defaultAnnounces_List as $values){
                        ?>
                        <option value="<?php echo $values['Title'] ?>"><?php echo $values['Title'] ?></option>
                        
                        <?php
                     }
                    ?>
                    </select>

                    <input type="submit" name="profile_Searchbtn" class="btn btn-dark border-0 mb-4" value="Search">

                 </div>
                </form>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php
                              if (isset($_POST['profile_Searchbtn'])){
                                // ====== showing the announcements cards using while loop from search.php
                                  include 'search.php';
                              }else{
                                 foreach($defaultAnnounces_List as $values){
                        ?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/<?php echo $values['Image_Path'] ?>" alt=""></a>
                                        <div
                                            class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For <?php echo $values['Category'] ?></div>
                                        <div
                                            class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            <?php echo $values['Type'] ?>
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-color mb-3"><?php echo $values['Price'] ?>$</h5>
                                        <a class="d-block h5 mb-2" href=""><?php echo $values['Title'] ?></a>
                                        <p><i class="fa fa-map-marker-alt text-color me-2"></i><?php echo $values['Code_Postal'] ?> ,<?php echo $values['City'] ?>-<?php echo $values['Country'] ?></p>
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
                                          data-bs-target="#more_details_modal">
                                          Details</button>
                                        <button class="edit_info btn btn-warning" data-bs-toggle="modal"
                                         data-bs-target="#update_announce_modal"
                                         value="<?php echo $values['Announce_ID'] ?>">Update</button>
                                        <button type="button" class="btn btn-danger"
                                            data-bs-toggle="modal"
                                            data-bs-target="#DeleteModal" >Delete</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                        ?>
                    </div>
                </div>
    </section>

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
   </div>

        <!-- =========================================== -->
        <!-- The End of add announce Modal -->
        <!-- =========================================== -->




          <!-- =========================================== -->
                         <!-- The Start of Edit Modal -->
                 <!-- =========================================== -->

    <div class="modal fade" id="update_announce_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Add New Announce
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form id="update_announce" enctype="multipart/form-data" class="form-input">
                        <div id="modal_flex">
                            <div class="form-box px-3">
                                <div>
                                    <img src="img/" id="announces_Images" alt="announce images">
                                    Select image to upload:
                                    <input type="file" name="image[]" class="border-0" multiple="multiple">
                                </div>

                                <div class="form-input">
                                    <input type="hidden" name="announce_id" id="announce_id">
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
                <!-- The End of Edit Modal -->
      <!-- =========================================== -->

    <!-- =========== My Full Announces List End ============= -->


        <!-- Template Javascript -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="js/profile.js"></script>
        <script>

$(document).ready(function() {
    // When the update button is clicked
    $('.edit_info').click(function() {
    var announce_id = $(this).val();
    console.log(announce_id);
          $.ajax({
            type: "GET",
            url: "code.php?announce_id=" + announce_id,
            dataType: 'json',
             success: function (response) {
              console.log(response);
            
                console.log("jalil betroji");
                $('#announce_id').val(announce_id);
              
            }
        
    });
});
});


           $(document).ready(function () {
           $("#update_announce").submit(function (event) {
           // Prevent the form from submitting the normal way and refreshing the page
           event.preventDefault();

          // Get the form data
          var formData = $("#update_announce").serialize();

           // Send the form data using ajax
          $.ajax({
            type: "POST",
            url: "code.php",
            data: formData,
            success: function (response) {
                  // Display the response on the page
                  $("#result").html(response);
                  console.log("hello jalil im inside response");
                $('#EditModal').load(location.href + " #EditModal");
            },
          });
        });
    });

        </script>
       
</body>

</html>
