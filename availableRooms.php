<?php include 'header.php';?>


    <section class="ftco-section room-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Available Rooms</span>

                </div>
            </div>
            <div class="row">
                <?php
                require 'DB.php';
                $rooms = DB::getAvailableRooms();
                foreach ($rooms as $row)
                {
                    echo "

          <div class='col-md-4 ftco-animate'>
            <div class='room-wrap'>
              <a href='' class='room-img' style='background-image: url(images/room-3.jpg);'></a>
              <div class='text p-4'>
                <div class='d-flex mb-1'>
                  <div class='one-third'>
                    <h3><a href=>Luxury Room</a></h3>
                  </div>
                  <div class='one-forth text-center'>
                    <p class='price'>$ {$row['price']} <br><span>/night</span></p>
                  </div>
                </div>
                <p class='features'>
                  <span class='d-block mb-2'><i class='icon-check mr-2'></i> Capacity:{$row['capacity']}  </span>
                  <span class='d-block mb-2'><i class='icon-check mr-2'></i> Extended:{$row['extended']}  </span>
                  <span class='d-block mb-2'><i class='icon-check mr-2'></i> View:{$row['view']}  </span>
                  <span class='d-block mb-2'><i class='icon-check mr-2'></i> Hotel Address:{$row['hotelAddress']}  </span>
                 </p>
                <p><a href='reservation.php?id=$row[0]' class='btn btn-primary'>Reserve a room</a> <a href='phpDeleteRoom.php?id=$row[0]' class='btn btn-danger'>Delete</a></p>
              </div>
            </div>
          </div>
            ";
                }; ?>

            </div>
        </div>
    </section>





<?php include 'footer.php';?>