<!DOCTYPE html>
<html>
<head>
</head>

<body>
	<form id="tombol" action="<?php echo site_url('controlnotifikasi/pergipulang')?>" method="POST">
		<input type="hidden" name="nomornotifikasipergi" value="<?php echo $nomorpergi; ?>">
		<input type="hidden" name="nomornotifikasipulang" value="<?php echo $nomorpulang; ?>">
		<button  class="button2" type="submit">Selanjutnya</button>
	</form>
    <br><br><br>
</body>
</html>
