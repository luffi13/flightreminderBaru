<!DOCTYPE html>
<html lang="en">
<head>
<title>Flight Reminder</title>
<meta charset="utf-8">


  <div class="main">
  <section id="content">
    <article>
      <div id="notifpulang" class="pad_1">
        <h3>Pulang</h3>
        <br>
        <?php
          foreach ($notifikasi as $row) { ?>
            <h4>Kode Pesawat</h4>
            <?php echo $row->KodePesawat; ?><br><br>
            <h4>Nama Maskapai</h4>
            <?php echo $row->NamaMaskapai; ?><br><br>
            <h4>Asal</h4>
            <?php echo $row->Asal; ?><br><br>
            <h4>Tujuan</h4>
            <?php echo $row->Tujuan; ?><br><br>
            <h4>Jam Keberangkatan</h4>
            <?php echo $row->JamKeberangkatan; ?><br><br>
          <?php } ?>
      </div>
    </article>
    <article class="col2 pad_left1">
      <div id="jampulang">
        <h3>Jam Berangkat Pulang</h3>
        <br>
        <?php
          foreach ($notifikasi as $row) { ?>
            <div id="jam">
              <p><?php echo substr($row->JamBerangkat, 0, 5); ?></p>
            </div>
          <?php } ?>
        <form method="POST" action="<?php echo site_url('ubahjam/index_pp2'); ?>">
          <?php foreach ($notifikasi as $row) { ?>
            <input type="hidden" name="nomornotifikasi" value="<?php echo $row->NomorNotifikasi; ?>" />
            <input type="hidden" name="jamberangkat" value="<?php echo $row->JamBerangkat; ?>" />
          <?php } ?>
          <button type="submit" value="Kirim">Ubah</button>
        </form>
      </div> 
      <div id="jamcheckinpulang">
        <h3>Jam Check-In Pulang</h3>
        <br>
        <?php
          foreach ($notifikasi as $row) { ?>
            <div id="jam">
              <p><?php echo substr($row->JamCheckIn, 0, 5); ?></p>
            </div>
          <?php } ?>
      </div>  
      <br>
      <br>
      <form method="POST" action="<?php echo site_url('email'); ?>">
        <?php foreach ($notifikasi as $row) { ?>
          <input type="hidden" name="email" value="<?php echo $row->email; ?>" />
          <input type="hidden" name="nomornotifikasi" value="<?php echo $row->NomorNotifikasi; ?>" />
          <input type="hidden" name="kodepesawat" value="<?php echo $row->KodePesawat; ?>" />
          <input type="hidden" name="jamberangkat" value="<?php echo $row->JamBerangkat; ?>" />
          <input type="hidden" name="jamcheckin" value="<?php echo $row->JamCheckIn; ?>" />
        <?php } ?>
        <button id="ingat3" type="submit" value="Kirim" class="button2">Ingatkan</button>
      </form>
    </article>
  </section>
</div>
</div>       
</body>
</html>