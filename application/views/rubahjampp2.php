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
    <h2>Ubah Jam Berangkat</h2>
      <form id="form_2" action="<?php echo site_url('ubahjam/ubah_pp2')?>" method="POST">
      <div class="wrapper">
        <p>Jam Berangkat Lama: <?php echo $jamberangkat ?></p> 
      </div>
      <div class="wrapper">
        <p>Jam Berangkat Baru:</p> 
        <div class="bg">
          <input type="text" class="input input1" name="jamberangkat" placeholder="HH:MM:SS">
        </div>
      </div>
      <input type="hidden" name="nomornotifikasi" value="<?php echo $pergi; ?>" />
      <div class="wrapper">
        <br>
        <button type="submit" class="button2">Ubah</button>
      </div>
    </form>
    <br><br>
  </div>      
</body>
</html>