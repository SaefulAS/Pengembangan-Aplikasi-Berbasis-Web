<?php 
include_once '../inc/class.perpus.php';
$anggota = new anggota;

if (isset($_GET['nis'])) {
	$nis = $_GET['nis'];
	extract($anggota->getData($nis,'tbl_anggota','nis'));
}
?>

<div class="col-sm-9">
	<h4>Edit Data Anggota</h4>
	<hr>
</div>

<div class="col-md-9">
	
<?php 
if (isset($msg)) {
	echo $msg;
}
?>

	<form method="post">
		<table class="table table-bordered">
			<tr>
				<td>NIS</td>
				<td><input class="form-control" disabled type="text" name="nis1" value="<?=$nis;?>"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input class="form-control" disabled type="text" name="nama" value="<?=$nama;?>"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input class="form-control" disabled type="text" name="tempat_lahir" value="<?=$tempat_lahir;?>"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input class="form-control" disabled type="date" name="tgl_lahir" value="<?=$tgl_lahir;?>" placeholder="hh/bb/tttt"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
				<?php if ($jk=="L"): ?>
					<input type="radio" value="L" name="jk" checked> Laki-laki
					<input type="radio" disabled value="P" name="jk"> Perempuan					
				<?php else: ?>
					<input type="radio" disabled value="L" name="jk"> Laki-laki
					<input type="radio" value="P" name="jk" checked> Perempuan
				<?php endif ?>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>
					<select disabled class="form-control" name="jurusan" style="width: 200px">
						<option>Pillih Jurusan</option>
						<option value="Teknik Komputer Jaringan" <?php if ($jurusan=='Teknik Komputer Jaringan'){echo "selected";} ?>>Teknik Komputer Jaringan</option>
						<option value="Akuntansi" <?php if($jurusan=='Akuntansi'){echo "selected";} ?>>Akuntansi</option>
						<option value="Administrasi" <?php if($jurusan=='Administrasi'){echo "selected";} ?>>Administrasi</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tahun Masuk</td>
				<td><input class="form-control" disabled type="text" name="thn_masuk" value="<?=$thn_masuk;?>"></td>
			</tr>

			<tr>
				<td colspan="2">
					<a href="?page=anggota" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp;Kembali</a>
				</td>
			</tr>
		</table>
	</form>

</div>