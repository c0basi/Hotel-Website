<?php include 'header.php';?>


    <section class="ftco-section room-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Our Hotels</span>
                    <h2>Explore our Hotels</h2>
                </div>
            </div>
            <div>
              <?php
              if(isset($_GET['id']))
              {
                  $id = $_GET['id'];

                  $hqaddress = $_GET['hqaddress'];
                  echo "
            <p><a href='addNewHotelInChain.php?hqid=$id' class='btn btn-primary'>Add New Hotel in this Hotel Chain($hqaddress )</a></p>";

              }
              else
                  {
                   echo   "<p><a href='index.php' class='btn btn-primary'>Please Select Hotel Chain to add new hotel in that Chain</a></p>";
                  }

                ?>
            </div>
            <div class="row">

                <?php
                require 'DB.php';
               $hotels = DB::getHotel();
               foreach ($hotels as $row)
               {
                echo "
                  
                <div class='col-md-4 ftco-animate'>
                    <div class='room-wrap'>
                        <a href='' class='room-img' style='background-image: url(images/room-1.jpg);'></a>
                        <div class='text p-4'>
                            <div class='d-flex mb-1'>
                                <div class='one-third'>
                                    <h3><a href=''>{$row['hotelAddress']}</a></h3>
                                </div>
                                 <div class='one-forth text-center'>
                    <p class='price'>Rating {$row['rating']} <br><span>out of 5</span></p>
                    </div>
                                <div class='one-forth text-center'>
                                    <p></p>
                                </div>
                            </div>
                            <p class='features'>
                                <span class='d-block mb-2'><i class='icon-check mr-2'></i>Number of Rooms {$row['numberOfRooms']}</span>
                                <span class='d-block mb-2'><i class='icon-check mr-2'></i>Phone number {$row['phonenumber']}</span>
                                <span class='d-block mb-2'><i class='icon-check mr-2'></i>Email {$row['email']}</span>
                                <span class='d-block mb-2'><i class='icon-check mr-2'></i>HQAddress {$row['HQid']}</span>
                                </p>
                            <p><a href='room.php?id={$row['id']}' class='btn btn-primary'>Explore Rooms</a> <a href='phpDeleteHotel.php?id=$row[0]' class='btn btn-danger'>Delete</a></p>
                        </div>
                    </div>
                </div>
                
                ";
               }?>


            </div>
        </div>
    </section>





<?php include 'footer.php';?>