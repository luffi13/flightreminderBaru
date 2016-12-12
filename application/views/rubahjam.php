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
      <form id="form_2" action="<?php echo site_url('ubahjam/ubah')?>" method="POST">
      <div class="wrapper">
        <p>Jam Berangkat Lama: <?php echo $jamberangkat ?></p> 
      </div>

      
      <div class="form-group">
            <p>Jam Berangkat Baru:</p>
            <input type="time" class="form-control"  name="jamberangkat" placeholder="HH:MM:SS"required>
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