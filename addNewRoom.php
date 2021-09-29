<?php include 'header.php';?>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 ftco-animate makereservation p-5 bg-light">
                    <form action="phpAddNewRoom.php" method="post">
                        <h2 class="mb-4">Room Detail</h2>
                        <div class="row mb-5">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group mr-4">
                                        <label for="">Capacity</label>
                                        <input required name="Capacity" type="number" class="form-control" placeholder="Capacity">
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Extended</label>
                                    <input required name="Extended" type="text" class="form-control" placeholder="Extended">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">View</label>
                                    <input required name="View" type="text" class="form-control" placeholder="View">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group mr-4">
                                        <label for="">Price</label>
                                        <input required name="Price" type="number" class="form-control" placeholder="Price/night">
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Damage (if any)</label>
                                    <input name="damage" type="text" class="form-control" placeholder="Damage (if any)">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Amenities</label>
                                    <input required name="amenities" type="text" class="form-control" placeholder="Amenities">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group mr-4">

                                        <?php
                                        if(isset($_GET['id']))
                                            {
                                                $id = $_GET['id'];
//                                                echo $id;
                                        echo "<input value='$id'  name='hotelAddress' type='hidden' class='form-control'>";
                                                };?>
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