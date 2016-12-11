<!DOCTYPE html>
<html>
<head>
</head>

<body>
	<form id="tombol" action="<?php echo site_url('controlnotifikasi/pergi')?>" method="POST">
		<input type="hidden" name="nomornotifikasipergi" value="<?php echo $nomor; ?>">
		<button  class="button2" type="submit">Selanjutnya</button>
	</form>
</body>
</html>
