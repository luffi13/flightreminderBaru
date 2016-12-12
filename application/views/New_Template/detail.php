<section id="penerbangan">
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
       <?php
       foreach ($penerbangan as $row) { ?>
       <h4>Nama Maskapai</h4>
       <?php echo $row->NamaMaskapai; ?><br><br>
       <br>
       <h4>Kode Pesawat</h4>
       <?php echo $row->KodePesawat; ?><br>
       <br>

     </div>
     <div class="col-md-6">
      <h4>Asal</h4>
      <?php echo $row->Asal; ?><br><br>
      <br>
      <h4>Kota Tujuan</h4>
      <?php echo $row->Tujuan; ?><br><br>
      <br>
      <h4>Jam Keberangkatan</h4>
      <?php echo $row->JamKeberangkatan; ?><br><br>
      <br>
    </div>
    <?php } ?>
  </div>
</div>
</section>