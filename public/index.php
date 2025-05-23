<!-- public/index.php -->
<?php include('../includes/header.php'); ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4 col-12">
      <div class="card shadow">
        <div class="card-body">
          <h4 class="card-title text-center mb-4">Grand 7 Luxury Girls Hostel</h4>
          <form method="POST" action="dashboard.php">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            <div class="text-center mt-3">
              <a href="register.php">New user? Register here</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('../includes/footer.php'); ?>
