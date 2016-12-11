<!DOCTYPE html>
<html lang="en">


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">LOGIN</h4>
      </div>
      <div class="modal-body">
       
            <form id="form_1" action="<?php echo site_url('verifylogin')?>" method="POST">
             

            <div class="form-group">
              <label >Username:</label>
              <input type="text" class="form-control"   name="username" placeholder="Masukkan Username" required>
            </div>

            <div class="form-group">
              <label>Password:</label>
              <input type="password" class="form-control"  name="password" placeholder="Masukkan Password"required>
            </div>
     
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
            </form> 
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModalsign" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">SIGN UP</h4>
      </div>
      <div class="modal-body">
       
        <form id="form_2" action="<?php echo site_url('web/signup_akun')?>" method="POST">


          <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control"  name="nama" placeholder="Masukkan Nama"required>
          </div>

          <div class="form-group">
            <label>Username:</label>
            <input type="text" class="form-control"  name="username" placeholder="Masukkan Username"required>
          </div>

          <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control"  name="email" placeholder="Masukkan Email"required>
          </div>

          <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control"  name="password" placeholder="Masukkan Password"required>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Sign Up</button>
          </div>

          
        </form>
      </div>
    </div>
  </div>
</div>

<div class="main">
  <div id="banner">
    <br><br><br>
    <div class="text1"> Selamat<span>Datang</span></div>      
  </div>
</div>
</body>
</html>