<?php
  include_once 'header.php';
  include_once 'includes/connect.inc.php';
?>

    <div class="container col-3 border rounded-3 p-5 my-5">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            <div class="mb-4">
                <label for="date_start" class="form-label fw-bold">From:</label>
                <input type="date" class="form-control" id="date_start" name="date_start" aria-describedby="date_start">
            </div>
            <div class="mb-4">
                <label for="date_end" class="form-label fw-bold">To:</label>
                <input type="date" class="form-control" id="date_end" name="date_end">
            </div>
            <div class="mb-1 text-center">
                <button type="submit" name="submit" class="btn btn-primary">Check Availability</button>
            </div>
        </form>
    </div>

    <div class="container py-5">

        <div class="row row-cols-1 row-cols-md-2 g-4 pt-2">
            <?php 
           
            if(isset($_GET['date_start']) && isset($_GET['date_end'])) {
              
              $date_start = $_GET['date_start'];
              $date_end = $_GET['date_end'];

            $sql = "SELECT *
            FROM room
            WHERE room_id NOT IN (
                SELECT DISTINCT room_id
                FROM reservation
                WHERE (date_start <= '$date_end') AND (date_end >= '$date_start')
            )";
          

            $available_room_list = mysqli_query($conn, $sql);
            $available_room_list_check = mysqli_num_rows($available_room_list);

            if ($available_room_list_check > 0) {
              while ($row = mysqli_fetch_assoc($available_room_list)) {
              $availableRoomsURL = 'img/room/'.$row["room_image"];

            ?>
            <div class="col">
              <div class="card p-3">
                <img src="<?php echo $availableRoomsURL; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['room_name']; ?></h5>
                    <p><span class="fw-bold">Amenities:</span> <?php echo $row['room_amenities']; ?></p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" id="<?php echo $rows['room_id'] ?>">Book Room</button>
                </div>
              </div>
            </div>
            <?php 
                }
              }
            }
            ?>
        </div>
    </div>

   
<?php
  include_once('footer.php');
?>