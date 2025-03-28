<?php include_once __DIR__ . "/../config.php"; ?>

<footer class="bg-dark text-light py-5">
  <div class="container">
    <div class="row">
      
      <!-- Thông tin thương hiệu -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">MED<span style="color:#FBAE3C">XTORE</span></h5>
        <p>Your health, physical and emotional well-being is important to us. We are always by your side and have made it even easier for you to find the necessary vitamins.</p>
        <div class="d-flex gap-2 fs-5">
          <a href="#" class="text-light">📘</a>
          <a href="#" class="text-light">🎵</a>
          <a href="#" class="text-light">📺</a>
          <a href="#" class="text-light">📷</a>
          <a href="#" class="text-light">💬</a>
        </div>
      </div>

      <!-- Liên hệ -->
      <div class="col-md-4 mb-4">
        <h6 class="fw-bold">Contact Us</h6>
        <p>📞 0123456789<br>📧 Medxtore123@gmail.com<br>📍 123 Streetnam, District, City</p>
      </div>

      <!-- Form liên hệ -->
      <div class="col-md-4 mb-4">
        <h6 class="fw-bold">Send us your information</h6>
        <form>
          <input type="text" class="form-control mb-2" placeholder="Name" required>
          <input type="email" class="form-control mb-2" placeholder="Email" required>
          <input type="text" class="form-control mb-2" placeholder="Phone">
          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
      </div>
    </div>
  </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.querySelectorAll('.faq-item').forEach(item => {
    item.addEventListener('click', () => {
      item.classList.toggle('active');
    });
  });
</script>
</body>
</html>
