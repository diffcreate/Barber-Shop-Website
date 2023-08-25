<?php $this->load->view('./template/header_admin.php'); ?>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col-6">
      <div class="container">
        <h2>Login</h2>
        <form class="row g-3" action="" method="post" >
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control mb-4" id="username" placeholder="Masukkan username" name="username" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control mb-4" id="password" placeholder="Masukkan password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary mb-4">Submit</button>
        </form> 
      </div>
    </div>
    <div class="col-6 mb-4">
      <img src="../../public/img/login_admin.png" alt="error">
    </div>
  </div>
</div>
