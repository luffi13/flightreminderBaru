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
  
  <div id="pergi2">
    <h2>Detail Penerbangan Pergi</h2>
    <?php 
       foreach($penerbangan as $row) 
        { ?>
            <p>Kode Pesawat</p>
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
       
    <br><br>
  </div>
</body>
</html>