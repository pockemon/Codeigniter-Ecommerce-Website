<?php include_once("header.php") ?>
<div class="login-form">
  <div class="main-div">
      <div class="panel panel-default" style="padding-top: 30px;padding-left:20px;padding-right:20px;padding-bottom:30px">
     <h2 style="margin-bottom: 50px">User Login</h2>
      <!-- <?php echo form_open('login_controller/login_pro', 'id="Login" method="post" ')?> -->
      <?php echo validation_errors(); ?>

       <form id="Login" method="post" action="<?php echo base_url('login_controller/login_pro'); ?>" >
          <!--
         <?php if($login_error == $this->session->flashdata('login_error')) { ?>

               <div class="alert alert-danger">
                 <?php echo $login_error; ?>
              </div>

          <?php } ?>
        -->

          <div class="form-group">
              <!-- <?php echo form_input(['type' => 'text','class' => 'form-control','id' => 'inputname','placeholder' => 'Name','name' => 'name']); ?> -->
               <input type="Email" class="form-control" id="inputEmail" placeholder="Email" name="Email" >
          </div>

          <div class="form-group">
            <!-- <?php echo form_input(['type' => 'password','class' => 'form-control','id' => 'inputPassword','placeholder' => 'Password','name' => 'password']); ?> -->
             <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="Password" >

          </div>

          <button type="submit" class="btn btn-primary">Login</button>

      </form>
      </div>

  </div>
  </div>
<?php include_once("footer.php") ?>
