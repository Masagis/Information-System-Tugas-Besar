
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Hi, Welcome!</h1>
                  </div>
                  <?= $this->session->flashdata('message'); ?>
                  <form class="user" method='post' action=' <?= base_url('auth');?>'>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" 
                        id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                        <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>

                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" 
                        id="password" name="password" placeholder="Password" >
                        <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                    <div class="text-center">
                      <a class="small" href="<?= base_url('auth/forgotpassword');?>">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                      <a class="small" href="<?= base_url('auth/registration');?>">Create an Account!</a>
                    </div>
                </div>
              </div>
            </div>

            <li class="list-group-item list-group-item-danger">
              <font color="black">Peringatan: </font><font color="red"><b>JANGAN PERNAH</font><font color="black"></b> membagikan Email/Password Anda kepada orang lain</font></b></li>
            <ul class="list-group">
                <li class="list-group-item"><font color="blue">
                    <strong>
                      Berkaitan dengan Sistem Informasi Tugas Besar :
                    </strong>
                      <ul>
                        <li>
                          <a href="https://www.itera.ac.id/kalender-akademik/" target="_blank">
                            Kalender Akademik TA. 2018/2019
                          </a>
                        </li>
              </ul>

          </div>
        </div>

      </div>

    </div>

  </div>