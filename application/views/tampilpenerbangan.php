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
  
  <section id="penerbangan">
  <div class="" >
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


<div class="text-center">
  
  <form  action="<?php echo site_url('controlnotifikasi/pergi')?>" method="POST">
    <input type="hidden" name="nomornotifikasipergi" value="<?php echo $nomor; ?>">
    <button  class="btn btn-default btn-lg btn-primary " type="submit">Selanjutnya</button>
  </form>
</div>    
  </section>

</body>
</html>
