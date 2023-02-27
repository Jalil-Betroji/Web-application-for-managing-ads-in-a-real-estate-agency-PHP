<?php 
require 'connect.php';
 
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

/* ======== if the user clicked on search button we will apply this code and we will take 
            the search section inputs values and get those information from database 
            to display them on user interface passed on Ad_Type , min_Price and max_Price ======== */

if(isset($_POST['searchbtn'])){
  $min_Price = $_POST['min_price'];
  $max_Price = $_POST['max_price'];
  $city = $_POST['city'];
  $category = $_POST['category'];
  $type = $_POST['type'];

  $query = "SELECT announces.Announce_ID,Client_ID,Title,Area,Rooms,
  Bathrooms,Price,Country,City,Code_Postal,House_Number,House_Floor,Type,Category,
  Image_Path
  FROM announces INNER JOIN images ON announces.Announce_ID = images.Announce_ID WHERE Image_Type = 'Primary'";       
if (!empty($min_Price)) {            
  $query .= " AND price > $min_Price ";    
  }       
  if (!empty($max_Price)){ 
      $query .= " AND price < $max_Price";     
  }         
if ($type != "Type"){     
  $query .= " AND type LIKE '$type'";      
}         
if ($category != "Announce Category") {          
  $query .= " AND category LIKE '$category'";   
}         
if ($city != "City") {
   $query .= " AND city LIKE '$city'";    
} ;

               $statment = $conn->prepare($query);
               $statment->execute();
               $announces_List = $statment->fetchAll();
               if ($announces_List > 0){
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

                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary py-3 px-5" href="announces.php">Browse More Announces</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <?php
 }
 
 if(isset($_POST['profile_Searchbtn'])){
    $title = $_POST['filter_Title'];
    if($title !="get all announces" && $title !="Filter By Title"){

    $query = "SELECT announces.Announce_ID,Client_ID,Title,Area,Rooms,
               Bathrooms,Price,Country,City,Code_Postal,House_Number,House_Floor,Type,Category,
               Image_Path
               FROM announces INNER JOIN images ON announces.Announce_ID = images.Image_ID WHERE Title ='$title'";

               $statment = $conn->prepare($query);
               $statment->execute();
               $announces_List = $statment->fetchAll();
               if ($announces_List > 0){
               foreach($announces_List as $values){
               ?>
               <section>
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
                    }else{
                        foreach($defaultAnnounces_List as $values){
                            ?>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="img/property-6.jpg" alt=""></a>
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
                                            <button class="btn btn-warning" data-bs-toggle="modal"
                                             data-bs-target="#EditModal"
                                            >Update</button>
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
            </div>
        </div>
    </section>
    <?php
 }
?>