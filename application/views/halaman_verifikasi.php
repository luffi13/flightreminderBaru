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
    <h2>Verifikasi</h2>
      <form id="form_2" action="<?php echo site_url('penerbangan')?>" method="POST">
      <?php
          foreach ($notifikasi as $row) { ?>
      <div class="wrapper">
        <p>Nomor Notifikasi: <?php echo $row->NomorNotifikasi ?></p> 
      </div>
      <div class="wrapper">
        <p>Kode Pesawat: <?php echo $row->KodePesawat ?></p> 
      </div>
      <div class="wrapper">
        <p>Jam Berangkat: <?php echo $row->JamBerangkat ?></p> 
      </div>
      <div class="wrapper">
        <p>Jam Check-In: <?php echo $row->JamCheckIn ?></p> 
      </div>
      <?php } ?>
      <br>
      <div class="wrapper">
        <p>Apakah Anda Sudah Melakukan Check-In ?</p> 
      </div>
      <div class="wrapper">
        <br>
        <button type="submit" class="button2">Sudah</button>
      </div>
    </form>
    <br><br>
  </div>      
</body>
</html>