<?php include 'header.php';?>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 ftco-animate makereservation p-5 bg-light">
                    <form action="phpAddHotelChain.php" method="post">
                        <h2 class="mb-4">Hotel Chain Detail</h2>
                        <div class="row mb-5">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">HQ Address</label>
                                    <input required name="HQAddress" type="text" class="form-control" placeholder="HQAddress">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">HQ Email</label>
                                    <input required name="HQEmail" type="text" class="form-control" placeholder="HQEmail">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group mr-4">
                                        <label for="">Number Of Hotels</label>
                                        <input required name="NumberOfHotels" type="number" class="form-control" placeholder="NumberOfHotels">
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