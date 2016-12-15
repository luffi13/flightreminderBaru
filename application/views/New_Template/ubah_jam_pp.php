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
            <?php echo $jamberangkat ?>
            <br>

          </div>
          <div class="col-md-6  text-center">
            <h4>Jam Notifikasi Baru</h4>

            <form id="form_2" action="<?php echo site_url('ubahjam/ubah_pp2')?>" method="POST">
              <div class="form-control-wrapper">
                <input type="text" id="time" class="form-control floating-label" placeholder="Time">
                <input type="hidden" name="nomornotifikasi" value="<?php echo $pergi; ?>" />
              </div>
              <div>
                <button class="btn btn-default btn-warning btn-lg" type="submit" class="button2">Ubah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
</section>