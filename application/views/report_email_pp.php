<!DOCTYPE html>
<html lang="en">
<head>
<title>Flight Reminder</title>
<meta charset="utf-8">

<div class="main">
  <div class="main">
    <div id="banner">
    </div>
  </div> 

  <div id="terimakasih">
  	<h2>Notifikasi Anda telah dikirim melalui <i>e-mail</i>.</h2> 
  	<p>Anda akan mendapatkan notifikasi lagi pada saat hari H penerbangan.</p>
  	<p>Terima Kasih telah menggunakan aplikasi ini.</p>
  	<br><br>
  	
    <div id="tombol4">
  		<a href="<?php echo site_url('penerbangan')?>"><button class="button2">Penerbangan</button></a>
  		<br><br>
  	</div>
    <div id="tombol5">
      <form id="tombol" action="<?php echo site_url('controlnotifikasi/pergipulang')?>" method="POST">
        <input type="hidden" name="nomornotifikasipergi" value="<?php echo $nomorpergi; ?>">
        <input type="hidden" name="nomornotifikasipulang" value="<?php echo $nomorpulang; ?>">
        <button  class="button2" type="submit">Ingatkan Penerbangan Pulang</button>
      </form>
      <br><br>
    </div>
  </div> 
</div>       
</body>
</html>