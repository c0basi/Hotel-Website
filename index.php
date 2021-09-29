<?php include 'header.php';?>

    <div class="ftco-section-reservation">
      <div class="container">
        <div class="row justify-content-end ftco-animate">
          <div class="col-lg-4 col-md-5 reservation p-md-5">
            <div class="block-17">
              <form action="availableRooms.php" method="post" class="d-block">
                <div class="fields d-block">

                  <div class="book-date one-third">
                    <label for="check-in">Check in:</label>
                    <input type="text" id="checkin_date" class="form-control" placeholder="M/D/YYYY">
                  </div>

                  <div class="book-date one-third">
                    <label for="check-out">Check out:</label>
                    <input type="text" id="checkout_date" class="form-control" placeholder="M/D/YYYY">
                  </div>

                  <div class="one-third">
                    <label for="Guest">Guest:</label>
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4+</option>
                      </select>
                    </div>
                  </div>
                </div>
                <input type="submit" class="search-submit btn btn-primary" value="Check Availability">  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="services bg-light">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate py-5 nav-link-wrap aside-stretch">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="mr-3 flaticon-bed"></span>Hotel Chains</a>

              <a class="nav-link px-4" id="v-pills-buffet-tab" data-toggle="pill" href="#v-pills-buffet" role="tab" aria-controls="v-pills-buffet" aria-selected="false"><span class="mr-3 flaticon-receptionist"></span>Customer area & Room Booking</a>

              <a class="nav-link px-4" id="v-pills-fitness-tab" data-toggle="pill" href="#v-pills-fitness" role="tab" aria-controls="v-pills-fitness" aria-selected="false"><span class="mr-3 flaticon-woman"></span>Employee</a>
<!-- 
              <a class="nav-link px-4" id="v-pills-reception-tab" data-toggle="pill" href="#v-pills-reception" role="tab" aria-controls="v-pills-reception" aria-selected="false"><span class="mr-3 flaticon-receptionist"></span> 24 Hour Reception</a>

              <a class="nav-link px-4" id="v-pills-sea-tab" data-toggle="pill" href="#v-pills-sea" role="tab" aria-controls="v-pills-sea" aria-selected="false"><span class="mr-3 flaticon-deck-chair"></span> Sea View Balcony</a>

              <a class="nav-link px-4" id="v-pills-spa-tab" data-toggle="pill" href="#v-pills-spa" role="tab" aria-controls="v-pills-spa" aria-selected="false"><span class="mr-3 flaticon-spa"></span> Pool &amp; Spa</a>

              <a class="nav-link px-4" id="v-pills-wifi-tab" data-toggle="pill" href="#v-pills-wifi" role="tab" aria-controls="v-pills-wifi" aria-selected="false"><span class="mr-3 flaticon-wifi-router"></span> Free wifi</a>

              <a class="nav-link px-4" id="v-pills-resto-tab" data-toggle="pill" href="#v-pills-resto" role="tab" aria-controls="v-pills-resto" aria-selected="false"><span class="mr-3 flaticon-disco-ball"></span> Resto bar</a> -->
            </div>
          </div>
          <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">
            
            <div class="tab-content pl-md-10" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-master" role="tabpanel" aria-labelledby="v-pills-master-tab">

                <span class="icon mb-3 d-block flaticon-bed"></span>
                <h2 class="mb-4">Hotel Chains</h2>
                <p class="lead">Five of the most well-known hotel chains, with hotels in more than 14 different locations in America</p>
                  <p><a href="addHotelChain.php" class="btn btn-primary">Add New Hotel Chain</a></p>
                  <table class="table table-bordered">
                      <thead>
                      <tr>
                          <th scope="col">HQ Address</th>
                          <th scope="col">HQ Email</th>
                          <th scope="col">Number Of Hotels</th>
                          <th scope="col">Actions</th>
                      </tr>
                      </thead>
                      <tbody>

<?php
require 'DB.php';
$hChains = DB::getHotelChains();
foreach($hChains as $row) {
    echo '<tr>';
    echo "<th scope='row'>{$row['HQAddress']}</th>";
    echo "<td>{$row['HQEmail']}</td>";
    echo "<td>{$row['NumberOfHotels']}</td>";
    echo "<td><a style='margin: 1px' href='hotelsInChain.php?id=$row[0]&hqaddress=$row[1]' class='btn btn-primary'>Explore</a><a href='phpDeleteHotelChain.php?id=$row[0]' style='margin-left: 2px' class='btn btn-primary'>Delete</a></td>";
    echo '</tr>';
}
    ?>

                      </tbody>
                  </table>

                </div>

               
              

              <div class="tab-pane fade" id="v-pills-buffet" role="tabpanel" aria-labelledby="v-pills-buffet-tab">
                <span class="icon mb-3 d-block flaticon-receptionist"></span>
                <h2 class="mb-4">Room Booking</h2>

                  <a href='bookedRooms.php' class='btn btn-primary'>Booked Rooms</a><br><br>
                  <a href='availableRooms.php' class='btn btn-primary'>Available Rooms</a>

                          
              </div>

              <div class="tab-pane fade" id="v-pills-fitness" role="tabpanel" aria-labelledby="v-pills-fitness-tab">
                <span class="icon mb-3 d-block flaticon-woman"></span>
                <h2 class="mb-12">Employee Menu</h2>
                <p><a href="addNewEmp.php" class="btn btn-primary">Add new Employee</a></p>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">SIN</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">First Name</th>
                          <th scope="col">Address</th>
                          <th scope="col">Hotel Address</th>
                          <th scope="col">HQ Address</th>
                          <th scope="col">Manager</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                    $emp = DB::getEmp();
                    foreach($emp as $row) {
                        echo "
                      <tr>
                        <th scope='row'>{$row['id']}</th>
                        <td>{$row['Lname']}</td>
                        <td>{$row['FName']}</td>
                          <td>{$row['Address']}</td>
                          <td>{$row['hotelAddress']}</td>
                          <td>{$row['HQAddress']}</td>
                          <td>{$row['Manager']}</td>
                        <td><a href='phpDeleteEmp.php?id=$row[0]' style='margin-top: 2px' class='btn btn-primary'>Delete</a></td>
                      </tr>
                      ";
                    };
                    ?>
                      </tbody>
                  </table>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

<?php include 'footer.php'; ?>