
<div class="container">
	<div class="col-md-12">
		<div class="row" id="notif">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>Nomor Notifikasi</th>
						<th>Kode Pesawat</th>
						<th>Username</th>
						<th>Tanggal</th>
						<th>Jam Berangkat</th>
						<th>Jam Check-In</th>
						<th>UBAH</th>
						<th>HAPUS</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach($notifikasi as $row) 
						{ ?>
						<tr>
						<td><?php echo $row->NomorNotifikasi; ?></td>
						<td><?php echo $row->KodePesawat; ?></td>
						<td><?php echo $row->Username; ?></td>
						<td><?php echo $row->Tanggal; ?></td>
						<td><?php echo $row->JamBerangkat; ?></td>
						<td><?php echo $row->JamCheckIn; ?></td>                                               
						<td>
							<form action="<?php echo site_url('ubahjam')?>" method="POST">
								<input type="hidden" name="nomornotifikasi" value="<?php echo $row->NomorNotifikasi; ?>">
								<input type="hidden" name="jamberangkat" value="<?php echo $row->JamBerangkat; ?>">
								<button type="submit" class="btn btn-warning">UBAH</button>
							</form>
						</td>
						<td>
							<form action="<?php echo site_url('mengelolanotifikasi/hapus')?>" method="POST">
								<input type="hidden" name="nomornotifikasi" value="<?php echo $row->NomorNotifikasi; ?>">
								<input type="hidden" name="jamberangkat" value="<?php echo $row->JamBerangkat; ?>">
								<button type="submit" class="btn btn-danger">HAPUS</button>
							</form>
						</td>   
					</tr>
					<?php } ?>    
				</tbody>
			</table>
			
		</div>
	</div>
	
</div>
	
</section>
