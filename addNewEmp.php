<?php include 'header.php';?>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 ftco-animate makereservation p-5 bg-light">
                    <form action="phpAddNewEmp.php" method="post">
                        <h2 class="mb-4">Add New Employee</h2>
                        <div class="row mb-5">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Last name</label>
                                    <input required name="LName" type="text" class="form-control" placeholder="LName">
                                </div>
                            </div>
                          <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">First name</label>
                                    <input required name="FName" type="text" class="form-control" placeholder="FName">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Address</label>
                                    <input required name="Address" type="text" class="form-control" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">HQ Address</label>
                                    <input required name="HQAddress" type="text" class="form-control" placeholder="HQAddress">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group mr-4">
                                        <label for="">Hotel Address</label>
                                        <input required name="HotelAddress" type="text" class="form-control" placeholder="HotelAddress">
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group mr-4">
                                        <label for="">Is Manager</label>
                                        <input name="manager" value="Yes" type="checkbox" class="form-control" >
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