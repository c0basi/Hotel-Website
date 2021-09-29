<?php include 'header.php';?>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-12 ftco-animate makereservation p-5 bg-light">
            <form action="checkIn.php" method="post">
              <h2 class="mb-4">Customer Details</h2>
              <div class="row mb-5">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="name">First Name</label>
                    <input required name="FName" type="text" class="form-control" placeholder="First Name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="name">Last Name</label>
                    <input required name="LName" type="text" class="form-control" placeholder="Last Name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <div class="form-group mr-4">
                          <label for="">Date</label>
                          <input required name="date" type="text" class="form-control" id="arrival_date" placeholder="Date">
                      </div>

                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Address</label>
                    <input required name="address" type="text" class="form-control" placeholder="Phone">
                  </div>
                </div>


                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="">Selected Room</label>
                          <?php
                          require 'DB.php';
                          $id = $_GET['id'];
                          $value = array($id);
                          $room = DB::getRoomById($value);

                          echo "
                        <div class=\"select-wrap one-third\">
                      <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
                      <select name=\"room_id\" id=\"\" class=\"form-control\">
                        <option selected value=\"{$room['id']}\">Capacity: {$room['capacity']}. Price: {$room['price']}. View: {$room['view']}</option>
                       
                      </select>
                    </div>
                        ";
                          ?>
                      </div>
                  </div>

              </div>

              <div class="row mb-5">
                <div class="col-md-12">
                  <h2 class="mb-4">Payment Details</h2>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Card Type</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Visa</option>
                        <option value="">Master Card</option>
                        <option value="">Credit Card</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="name">Card No</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="name">Name on Card</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mr-4">
                    <label for="">Expiration Date</label>
                    <input type="text" class="form-control" id="expiration_date" placeholder="">
                  </div>
                </div>
              </div>
                <input type="submit" value="Submit" class="btn btn-primary">
            </form>
          </div>
        </div>
      </div>
    </section>

<?php include 'footer.php';?>