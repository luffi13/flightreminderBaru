<!DOCTYPE html>
<html lang="en">
<head>
<title>Flight Reminder</title>
<meta charset="utf-8">
<div class="main">
  <div class="main">
  <div id="banner">
  </div>
</div>
  
  <div id="signup">
    <h2>Sign Up</h2>
      <form id="form_2" action="<?php echo site_url('web/signup_akun')?>" method="POST">
      <div class="wrapper">
        <p>Nama:</p> 
        <div class="bg">
          <input type="text" class="input input1" name="nama" placeholder="Masukkan Nama">
        </div>
      </div>
      <div class="wrapper">
        <p>Username:</p>
        <div class="bg">
          <input type="text" class="input input1" name="username" placeholder="Masukkan Username">
        </div>
      </div>
      <div class="wrapper">
        <p>Email:</p>
        <div class="bg">
          <input type="text" class="input input1" name="email" placeholder="Masukkan Email">
        </div>
      </div>
      <!--div class="wrapper"> Confirm Email:
        <div class="bg">
          <input type="text" class="input input1" placeholder="Masukkan Email">
        </div>
      </div-->
      <div class="wrapper">
        <p>Password:</p>
        <div class="bg">
          <input type="password" class="input input1" name="password" placeholder="Masukkan Password">
        </div>
      </div>
      <!--div class="wrapper"> Confirm Password:
        <div class="bg">
          <input type="password" class="input input1" placeholder="Masukkan Password">
        </div>
      </div-->
      <div class="wrapper">
        <br>
        <button type="submit" class="button2">Signup</button>
      </div>
    </form>
    <br><br>
  </div>
</body>
</html>