<!DOCTYPE html>
<html lang="en">

<head>
  <title>Flight Reminder</title>
  <meta charset="utf-8">

  <script>
    $(document).ready(function(){
      $('#kodepesawat').typeahead({
                name: 'kodepesawat',
                remote: 'http://localhost/flightreminder/index.php/home/getJson?query=%QUERY'

            });
      $("#sj").click(function(){
        $("#form_sj").animate({ height: 'toggle'});
      });
      $("#pp").click(function(){
        $("#form_pp").animate({ height: 'toggle'});
      });
    });
  </script>
</head>


<body>
  
  
<section id="penerbangan">
<h1>Penerbangan</h1><br></br>

<div class="row">
      <div class="col-md-6">
        <div class="pad_1">
          <div id="sj">
            <h3>Sekali Jalan</h3>
          </div>

          <form id="form_1" action="<?php echo site_url('penerbangan/pergi')?>" method="POST">

            <div class="form-group" >
              <label for="exampleInputEmail1">Kode Pesawat:</label>
              <br>
              <input type="text" class="form-control" name="kodepergi"  id="kodepesawat" placeholder="Kode Pesawat"required>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal:</label>
              <input type="date" class="form-control" name="tanggalpergi" placeholder="YYYY/MM/DD"required>
            </div>

            <div>
              <input type="hidden" class="input input1" name="username" value="<?php echo $username; ?>">
            </div>
          <br>
          <button type="submit" class="btn btn-default btn-lg">Selanjutnya</button>

          </form>
        </div>
      </div>

      <div class="col-md-6">
        <div class="pad_1">
          <div id="pp">
            <h3>Pulang Pergi</h3>
          </div>

          <form id="form_2" action="<?php echo site_url('penerbangan/pulangpergi')?>" method="POST">
           <div class="form-group">
            <label >Kode Pesawat Pergi:</label>
            <input type="text" class="form-control" name="kodepergi"  id="kodepesawat" placeholder="Kode Pesawat Pergi" required>
          </div>

          <div class="form-group">
            <label  >Tanggal Pergi:</label>
            <input type="date" class="form-control" name="tanggalpergi" placeholder="YYYY/MM/DD" required>
          </div>

          <div class="form-group">
            <label >Kode Pesawat Pulang:</label>
            <input type="text"  class="form-control" name="kodepulang" id="kodepesawat" placeholder="Kode Pesawat Pulang" required>
          </div>

          <div class="form-group">
            <label  >Tanggal Pulang:</label>
            <input type="date" class="form-control" name="tanggalpulang" placeholder="YYYY/MM/DD"required>
          </div>

          
          <div>
            <input type="hidden" class="input input1" name="username" value="<?php echo $username; ?>"required>
          </div>
     
           <br>
           <button type="submit" class="btn btn-default btn-lg">Selanjutnya</button>

     
          </form>
        </div>  
      </div>

</div>


</section>
</body>
</html>