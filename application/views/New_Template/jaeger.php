
<div class="" >
  <div class="carousel-inner">
    <div class="item active">
      <img class="img-responsive img-center my-img" id="my-img" src="<?php echo base_url('includes/images/bg_img.jpg'); ?>">
      <div class="carousel-caption">
        <h1 class="text-danger">Important Notifiction Sent to Remind You in Your Phone</h1>
      </div>
    </div>
  </div>
</div>
<!-- <section id="penerbangan">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>PENERBANGAN ANDA</h2>
        <br>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">

        <h4>Nama Maskapai</h4>
        <br>
        <h4>Kode Pesawat</h4>
        <br>

      </div>
      <div class="col-md-6">
        <h4>Asal</h4>
        <br>
        <h4>Kota Tujuan</h4>
        <br>
        <h4>Jam Keberangkatan</h4>
        <br>
      </div>
    </div>
  </div>
</section> -->
<!-- <section id="setting">
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
          <div class="">
            00:00
          </div>
        </div>
        <div class="row text-center">
          <form method="POST">
            <input type="hidden" name="nomornotifikasi" value="" />
            <input type="hidden" name="jamberangkat" value="" />
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
          <div class="">
            00:00
          </div>
        </div>
      </div>
    </div>
  </section> -->

<!--   <section id="setting">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Setting Notifikasi Pulang </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-lg-12">
              <h3 class="text-center">Notifikasi Jam Berangkat Pulang</h3>
              <hr>
            </div>
          </div>
          <div class="row text-center" style="font-size: 148.997px;">
            <div class="">
              00:00
            </div>
          </div>
          <div class="row text-center">
            <form method="POST">
              <input type="hidden" name="nomornotifikasi" value="" />
              <input type="hidden" name="jamberangkat" value="" />
              <button class="btn btn-default btn-warning btn-lg" type="submit" value="Kirim">UBAH</button>
            </form>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row">
            <div class="col-lg-12">
              <h3 class="text-center">Notifikasi Jam Check-IN Pulang</h3>

              <div class="divider"></div>
              <hr>
            </div>
          </div>
          <div class="row text-center" style="font-size: 148.997px;">
            <div class="">
              00:00
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <section id="ubahjam">
      <div class="container well">
        <div class="row">
          <div class="col-md-6">
            <h2>Ubah Jam Notifikasi Anda</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
          <h4>Jam Notifikasi Lama:</h4>
            
            <br>

          </div>
          <div class="col-md-6  text-center">
            <h4>Jam Notifikasi Baru</h4>

            <form id="form_2" action="<?php echo site_url('ubahjam/ubah_pp2')?>" method="POST">
              <div class="form-control-wrapper">
                <input type="text" id="time" class="form-control floating-label" placeholder="Time">
                <input type="hidden" name="nomornotifikasi" value="" />
              </div>
              <div>
                <button class="btn btn-default btn-warning btn-lg" type="submit" class="button2">Ubah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <!-- <div id="signup">
    <h2>Ubah Jam Berangkat</h2>
      <form id="form_2" action="<?php echo site_url('ubahjam/ubah_pp2')?>" method="POST">
      <div class="wrapper">
        <p>Jam Berangkat Lama:</p> 
      </div>
      <div class="wrapper">
        <p>Jam Berangkat Baru:</p> 
        <div class="bg">
          <input type="text" class="input input1" name="jamberangkat" placeholder="HH:MM:SS">
        </div>
      </div>
      <input type="hidden" name="nomornotifikasi" value="" />
      <div class="wrapper">
        <br>
        <button type="submit" class="button2">Ubah</button>
      </div>
    </form>
    <br><br>
  </div> -->
</section>
<!-- <script type="text/javascript">
  $(document).ready(function(){
    $('#time').bootstrapMaterialDatePicker
    ({
      date: false,
      shortTime: false,
      format: 'HH:mm'
    });
  });

</script>

 -->


<!-- <div class="main">
  <div class="main">
    <div id="banner">
    </div>
  </div>

  <div class="main">
  <section id="content">
    <article class="col1pergi">
      <div id="notifpergi"class="pad_1">
        <h2>Penerbangan Anda</h2>
        <h3>Pergi</h3>
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
      <h2>Notifikasi Anda</h2>
      <div id="jampergi">
        <h3>Jam Berangkat Pergi</h3>
        <br>
        <?php
          foreach ($notifikasi as $row) { ?>
            <div id="jam">
              <p><?php echo substr($row->JamBerangkat, 0, 5); ?></p>
            </div>
          <?php } ?>
        <form method="POST" action="<?php echo site_url('ubahjam'); ?>">
          <?php foreach ($notifikasi as $row) { ?>
            <input type="hidden" name="nomornotifikasi" value="<?php echo $row->NomorNotifikasi; ?>" />
            <input type="hidden" name="jamberangkat" value="<?php echo $row->JamBerangkat; ?>" />
          <?php } ?>
          <button type="submit" value="Kirim">Ubah</button>
        </form>
      </div> 
      <div id="jamcheckinpergi">
        <h3>Jam Check-In Pergi</h3>
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
        <button id="ingat" type="submit" value="Kirim" class="button2">Ingatkan</button>
      </form>
    </article>
  </section>
</div>
</div>       
</body>
</html> -->