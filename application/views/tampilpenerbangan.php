<!DOCTYPE html>
<html lang="en">
<head>
<title>Flight Reminder</title>
<meta charset="utf-8">
<body>
<div class="main">
  <div class="main">
  <div id="banner">
  </div>
</div>
  
  <div >
    <h2 style="text-align: center;">Detail Penerbangan</h2>
    <div class="row">
    <div class="col-lg-4 col-centered " ></div>
    <div class="col-lg-4 col-centered " >
    <?php 
       foreach($penerbangan as $row) 
        { ?>
            <p >Kode Pesawat</p>
            <?php echo $row->KodePesawat; ?>
            <br><br>  
            <p>Nama Maskapai</p>
            <?php echo $row->NamaMaskapai; ?>
            <br><br>
            <p>Asal</p>
            <?php echo $row->Asal; ?>
            <br><br>
            <p>Tujuan</p>
            <?php echo $row->Tujuan; ?>
            <br><br>
            <p>Jam Keberangkatan</p>
            <?php echo $row->JamKeberangkatan; ?>            
  <?php 
      }
     
  ?>  
    </div>
  </div>
       
    <br><br>
  </div>


<div>
  
  <form  action="<?php echo site_url('controlnotifikasi/pergi')?>" method="POST">
    <input type="hidden" name="nomornotifikasipergi" value="<?php echo $nomor; ?>">
    <button  class="button2" type="submit">Selanjutnya</button>
  </form>
</div>
</body>
</html>
