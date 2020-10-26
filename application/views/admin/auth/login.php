<div class="card">
  <div class="card-body login-card-body">
    <div class="login-logo">
      <a href="<?= base_url('admin/auth') ?>">
        <img src="<?= base_url(); ?>assets/dist/img/PA-white.svg" alt="PA Logo" class="brand-image" width="150px" style="opacity: .8">
      </a>
    </div>
    <!-- /.login-logo -->
    <p class="login-box-msg">Halaman <b>Log</b>-in</p>
    <?= $this->session->flashdata('message'); ?>

    <form action="<?= base_url('admin/auth'); ?>" method="post">
      <div class="input-group mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope logos"></span>
          </div>
        </div>
      </div>
      <?= form_error('email', '<small class="text-danger">', '</small>'); ?>  

      <div class="input-group mb-3">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock logos"></span>
          </div>
        </div>
      </div>
      <?= form_error('password', '<small class="text-dange">', '</small>'); ?>
      <div class="row">
        <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
        <!-- /.col -->
        <div class="col-12 btn-login">
          <button type="submit" class="btn btn-light btn-block">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
    <!-- /.social-auth-links -->

    <p class="mb-1">
      <a href="<?= base_url('admin/auth/forgotpsw'); ?>">Lupa password?</a>
    </p>
  </div>
  <!-- /.login-card-body -->
</div>
</div>
<!-- /.login-box -->