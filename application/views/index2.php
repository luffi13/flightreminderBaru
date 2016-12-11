<!DOCTYPE html>

<head>
	<title>Form Email</title>
</head>
<body>
<form method="POST" action="<?php echo site_url('email'); ?>">
		<?php foreach ($notifikasi as $row) { ?>
		<input type="hidden" name="email" value="<?php echo $row->email; ?>" />
		<input type="hidden" name="nomornotifikasi" value="<?php echo $row->NomorNotifikasi; ?>" />
		<input type="hidden" name="kodepesawat" value="<?php echo $row->KodePesawat; ?>" />
		<input type="hidden" name="jamberangkat" value="<?php echo $row->JamBerangkat; ?>" />
		<input type="hidden" name="jamcheckin" value="<?php echo $row->JamCheckIn; ?>" />
		<?php } ?>
		<input type="submit" value="Kirim" />
</form>
</body>

