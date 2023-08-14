<?php
include_once('header.php');
?>

    <section class="signup-form">

        <div class="container col-4 border rounded-3 p-4 my-5">
            <form action="includes/signup.inc.php" method="post">
                <div class="text-center mb-3">
                    <h2>Sign Up</h2>
                    <?php if (isset($_GET['error'])) { ?>
                        <p style="color: red"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                </div>
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name:</label>
                    <input type="text" class="form-control" id="fname" name="fname" aria-describedby="fname">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name:</label>
                    <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lname">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" aria-describedby="address">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contact Number:</label>
                    <input type="text" class="form-control" id="contactnum" name="contactnum" aria-describedby="contactnum">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address:</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="repeatpassword" class="form-label">Repeat Password:</label>
                    <input type="repeatpassword" class="form-control" id="repeatpassword" name="repeatpassword">
                </div>
                <div class="py-4 text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        
    </section>

<?php
  include_once('footer.php');
?>