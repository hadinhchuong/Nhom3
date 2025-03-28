<?php 
  include('../includes/header.php'); 
  include('../includes/navbar.php'); 
?>

<!-- Hero Banner -->
<section class="py-5" style="background: url('../assets/images/product-images/banner-orange.jpg') no-repeat right center/cover; background-color: #f6f7fb;">
  <div class="container py-5">
    <h1 class="fw-bold text-dark">All Products</h1>
    <p class="text-muted col-md-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
  </div>
</section>

<!-- Product Categories -->
<div class="container py-5">
  <?php
    $categories = ["Category 1", "Category 2", "Category 3"];
    foreach ($categories as $cat) {
      echo "<h4 class='fw-bold mb-3'>$cat</h4>";
      echo '<div class="text-center my-4">
              <img src="<?php echo BASE_URL; ?>/assets/images/empty.png" alt="empty" style="width: 100px;">
              <p class="text-muted">Chưa có sản phẩm nào</p>
            </div>';
    }
  ?>
</div>

<?php include('../includes/footer.php'); ?>
