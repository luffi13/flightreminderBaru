<!DOCTYPE html>
<html lang="en">
<body>  
  <div id="pulang">
    <h2>Detail Penerbangan Pulang</h2>
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
    <br><br><br><br> 

  </div>
</body>
</html>