<?php
include_once 'adminheader.php';
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_fname'])) {
?>

<div class="container">
  <h2 class="pt-5 mb-5">Hello, 
    <?php 
      echo $_SESSION['user_fname'];
    ?>
   </h2>
   <p class="mb-5">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam dolorem iste quo praesentium deleniti harum nisi. 
    Voluptas iusto accusantium natus quo porro. Ea laboriosam beatae facilis, facere rerum aut numquam.
   </p>  
</div>
  

<?php
  include_once 'footer.php';
?>

<?php
}else {
  header("Location: admin.php");
  exit();
}

?>
