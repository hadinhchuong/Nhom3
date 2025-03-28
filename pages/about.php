<?php 
  include('../includes/header.php'); 
  include('../includes/navbar.php'); 
?>

<!-- About Banner -->
<section class="py-5" style="background: url('../assets/images/product-images/banner-orange.jpg') no-repeat right center/cover; background-color: #f6f7fb;">
  <div class="container py-5">
    <h1 class="fw-bold text-dark">About Us</h1>
    <p class="text-muted col-md-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
  </div>
</section>

<!-- Info Section -->
<section class="container py-5">
  <div class="row align-items-center">
    <div class="col-md-6">
      <img src="../assets/images/pharmacy-store.jpg" alt="Pharmacy" class="img-fluid rounded-circle">
    </div>
    <div class="col-md-6">
      <h2 class="fw-bold">Biggest Network Of Pharmacies In The Whole Country</h2>
      <p class="text-muted">Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam...</p>
    </div>
  </div>
</section>

<!-- Reliability Section -->
<section class="container py-5">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-2">
      <img src="../assets/images/reliable-pharma.jpg" alt="Reliability" class="img-fluid rounded-circle">
    </div>
    <div class="col-md-6 order-md-1">
      <h3 class="fw-bold">#1 At Reliability In Terms Of Appointments</h3>
      <p class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...</p>
    </div>
  </div>
</section>

<!-- Embedded YouTube Video -->
<section class="container py-5 text-center">
  <div class="ratio ratio-16x9">
    <iframe width="100%" height="480" src="https://www.youtube.com/embed/DnJ3fSptlPo" 
      title="Pharmaceutical Science" frameborder="0" allowfullscreen></iframe>
  </div>
</section>

<!-- Statistics Section -->
<section class="container py-5 text-center">
  <div class="row g-4">
    <div class="col-md-3"><div class="bg-info text-white rounded py-4"><h2>283</h2><p>Retail Stores</p></div></div>
    <div class="col-md-3"><div class="bg-info text-white rounded py-4"><h2>3</h2><p>Countries</p></div></div>
    <div class="col-md-3"><div class="bg-info text-white rounded py-4"><h2>19M</h2><p>Customers</p></div></div>
    <div class="col-md-3"><div class="bg-info text-white rounded py-4"><h2>50</h2><p>Factories</p></div></div>
  </div>
</section>

<!-- Team Section -->
<section class="container py-5 text-center">
  <h2 class="fw-bold mb-4">Our team</h2>
  <div class="row g-4">
    <?php
      $team = [
        ['img' => 'team1.jpg', 'name' => 'Travis Kelce'],
        ['img' => 'team2.jpg', 'name' => 'Taylor Swift'],
        ['img' => 'team3.jpg', 'name' => 'Travis Kelce'],
      ];
      foreach ($team as $member): ?>
      <div class="col-md-4">
        <img src="../assets/images/<?= $member['img'] ?>" class="img-fluid rounded mb-2" alt="<?= $member['name'] ?>">
        <h6 class="fw-bold"><?= $member['name'] ?></h6>
        <p class="text-muted">Pharmacist</p>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include('../includes/footer.php'); ?>
