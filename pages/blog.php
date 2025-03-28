<?php 
  include('../includes/header.php'); 
  include('../includes/navbar.php'); 
?>

<!-- Blog Banner -->
<section class="py-5" style="background: url('../assets/images/product-images/banner-orange.jpg') no-repeat right center/cover; background-color: #f6f7fb;">
  <div class="container py-5">
    <h1 class="fw-bold text-dark">Blogs</h1>
    <p class="text-muted col-md-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
  </div>
</section>

<!-- Featured Image -->
<section class="container py-4 text-center">
  <img src="../assets/images/product-images/banner-orange.jpg" class="img-fluid rounded-4 mb-4" alt="Feature Blog Image">
</section>

<!-- Blog Cards -->
<section class="container py-4">
  <div class="row g-4">
    <?php for ($i = 0; $i < 3; $i++): ?>
    <div class="col-md-6">
      <div class="bg-white p-3 rounded-4 shadow-sm h-100">
        <img src="../assets/images/blog-thumb<?= $i+1 ?>.jpg" class="img-fluid rounded mb-3" alt="Blog <?= $i+1 ?>">
        <span class="badge bg-light text-dark px-3 py-1 mb-2">Covid</span>
        <h5 class="fw-bold">The Covid-19 Epidemic In 2022 Is Back</h5>
        <p class="text-muted">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar turpis nec commodo sodales...
        </p>
        <a href="#" class="text-info">Read more</a>
        <div class="mt-3">
          <a href="#" class="btn btn-info text-white fw-semibold px-4 py-2 rounded-pill">
            Read more →
          </a>
        </div>
      </div>
    </div>
    <?php endfor; ?>
  </div>
</section>

<?php include('../includes/footer.php'); ?>
