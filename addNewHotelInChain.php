<?php include 'header.php';?>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 ftco-animate makereservation p-5 bg-light">
                    <form action="phpAddNewHotelInChain.php" method="post">
                        <h2 class="mb-4">Hotel Detail</h2>
                        <div class="row mb-5">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Hotel Address</label>
                                    <input required name="Address" type="text" class="form-control" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input required name="Email" type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group mr-4">
                                        <label for="">Phone Number</label>
                                        <input required name="PhoneNumber" type="number" class="form-control" placeholder="PhoneNumber">
                                    </div>

                                </div>
                            </div>

                            <?php $hqid = $_GET['hqid']; ?>
                            <input type="hidden" name="hqid" value='<?php echo $hqid; ?>'>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group mr-4">
                                        <label for="">Rating out of 5</label>
                                        <input required name="rating" type="number" class="form-control" placeholder="Rating out of 5">
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group mr-4">
                                        <label for="">Number Of Rooms</label>
                                        <input required name="NumberOfRooms" type="number" class="form-control" placeholder="NumberOfRooms">
                                    </div>

                                </div>
                            </div>

                        </div>

                        <input type="submit" value="Add" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php';?>