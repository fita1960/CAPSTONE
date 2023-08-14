<?php
  include_once 'header.php';
  include_once 'includes/connect.inc.php';
?>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col md-12">
                    <div class="card">
                        <div class="card-header">
                            Booking
                        </div>
                        <div class="card-body">
                            <form action="" method="GET">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Date Start:</label>
                                        <input type="date" class="form-control" name="date_start">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Date End:</label>
                                        <input type="date" class="form-control" name="date_end">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                     
                                        <button type="submit" class="btn btn-primary">Check</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                Rooms
                            </div>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Room Name</th>
                                    </tr>
                                </thead>    
                                <tbody>
                                    <?php
                                        if(isset($_GET['date_start']) && isset($_GET['date_end']))
                                        {
                                            $date_start = $_GET['date_start'];
                                            $date_end = $_GET['date_end'];

                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
<?php
  include_once('footer.php');
?>