<!DOCTYPE html>
<html lang="en">

<title>Flight Reminder</title>
<meta charset="utf-8">
<div class="main">
  <div class="main">
  <div id="banner">
  </div>
</div>
  
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
              <input type="text" class="form-control" style="text-transform:uppercase"  name="username" placeholder="Masukkan Username" required>
            </div>

            <div class="form-group">
              <label>Password:</label>
              <input type="password" class="form-control" style="text-transform:uppercase"  name="password" placeholder="Masukkan Password"required>
            </div>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
       </form>
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