
<section id="setting">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Setting Notifikasi Pergi</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="text-center">Notifikasi Jam Berangkat</h3>
            <hr>
          </div>
        </div>
        <div class="row text-center" style="font-size: 148.997px;">
          <?php
          foreach ($notifikasi as $row) { ?>
          
          <div class="">
            <?php echo substr($row->JamBerangkat, 0, 5); ?>
          </div>
          <?php } ?>
          
        </div>
        <div class="row text-center">
          <form method="POST">
            <?php foreach ($notifikasi as $row) { ?>
            <input type="hidden" name="nomornotifikasi" value="<?php echo $row->NomorNotifikasi; ?>" />
            <input type="hidden" name="jamberangkat" value="<?php echo $row->JamBerangkat; ?>" />
            <?php } ?>
            <button class="btn btn-default btn-warning btn-lg" type="submit" value="Kirim">UBAH</button>
          </form>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="text-center">Notifikasi Jam Check-IN</h3>
            
            <div class="divider"></div>
            <hr>
          </div>
        </div>
        <div class="row text-center" style="font-size: 148.997px;">
         <?php
         foreach ($notifikasi as $row) { ?>
         
         <div class="">
          <?php echo substr($row->JamCheckIn, 0, 5); ?>
        </div>
        <?php } ?>
        
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 text-center">
      <form method="POST" action="<?php echo site_url('email'); ?>">
        <?php foreach ($notifikasi as $row) { ?>
          <input type="hidden" name="email" value="<?php echo $row->email; ?>" />
          <input type="hidden" name="nomornotifikasi" value="<?php echo $row->NomorNotifikasi; ?>" />
          <input type="hidden" name="kodepesawat" value="<?php echo $row->KodePesawat; ?>" />
          <input type="hidden" name="jamberangkat" value="<?php echo $row->JamBerangkat; ?>" />
          <input type="hidden" name="jamcheckin" value="<?php echo $row->JamCheckIn; ?>" />
        <?php } ?>
        <button id="ingat" type="submit" value="Kirim" class="btn btn-default btn-lg">Ingatkan</button>
      </form>    
    </div>
    
  </div>
  
</section>