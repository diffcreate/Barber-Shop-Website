<?php $this->load->view('./template/header_admin.php'); ?>

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../img/HERITAGE.jpeg" class="d-block w-100 h-50" alt="error">
    </div>
    <div class="carousel-item">
      <img src="../../img/asset barbershop1.jpg" class="d-block w-100 h-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../img/asset barbershop2.jpg" class="d-block w-100 h-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../img/asset barbershop3.jpg" class="d-block w-100 h-50" alt="...">
    </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

	<?php $this->load->view('./template/footer.php'); ?>
