<div class="row jumbotron" >
		
			<h3>Mahasiswa List</h3>
			<table class="table tabl-striped table-borderd table-hover">
				<thead>
					<tr>
						<th>No. </th>
						<th>Username</th>
						<th>Password</th>
						<th>Jurusan</th>
						<th>Keterangan</th>
					</tr>
				</thead>
				<tbody>
					<?php						
						$i = 1; //nantinya akan digunakan untuk pengisian Nomor
						foreach ($mahasiswa->result() as $row) {
					?>
					<tr>
						<td><?= $i++ ?></td>
						<td><?= $row->username ?></td> 
						<td><?= $row->password ?></td>
						<td><?= $row->jurusan ?></td>
						<td>
						<?php
							if($row->id_mahasiswa==NULL){
						?><button class="btn btn-small btn-danger" name="ket">Belum</button>
							<?php }else{ ?>
<button class="btn btn-small btn-success" name="ket">Sudah di Isi</button>
								<?php }?>
						</td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
	</div>