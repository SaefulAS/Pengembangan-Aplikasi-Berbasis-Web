<?php 
include_once '../inc/class.perpus.php';
$anggota = new anggota;

if (isset($_POST['btn-update'])) {
	$nis = $_GET['nis'];
	$nis1 = $_POST['nis1'];
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jk = $_POST['jk'];
	$jurusan = $_POST['jurusan'];
	$thn_masuk = $_POST['thn_masuk'];
	if ($anggota->update($nis,$nis1,$nama,$tempat_lahir,$tgl_lahir,$jk,$jurusan,$thn_masuk)) {
		$msg = "<div class='alert alert-info'>
			<strong>WOW!</strong> Record was updated successfully <a href='?page=anggota'>HOME</a>!
		</div>";
	}else{
		$msg = "<div class='alert alert-warning'>
		<strong>SORRY!</strong> ERROR while updating record !
		</div>";
	}
}

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
				<td><input class="form-control" type="text" name="nis1" value="<?=$nis;?>"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input class="form-control" type="text" name="nama" value="<?=$nama;?>"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input class="form-control" type="text" name="tempat_lahir" value="<?=$tempat_lahir;?>"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input class="form-control" type="date" name="tgl_lahir" value="<?=$tgl_lahir;?>" placeholder="hh/bb/tttt"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
				<?php if ($jk=="L"): ?>
					<input type="radio" value="L" name="jk" checked> Laki-laki
					<input type="radio" value="P" name="jk"> Perempuan					
				<?php else: ?>
					<input type="radio" value="L" name="jk"> Laki-laki
					<input type="radio" value="P" name="jk" checked> Perempuan
				<?php endif ?>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>
					<select class="form-control" name="jurusan" style="width: 200px">
						<option>Pillih Jurusan</option>
						<option value="Teknik Komputer Jaringan" <?php if ($jurusan=='Teknik Komputer Jaringan'){echo "selected";} ?>>Teknik Komputer Jaringan</option>
						<option value="Akuntansi" <?php if($jurusan=='Akuntansi'){echo "selected";} ?>>Akuntansi</option>
						<option value="Administrasi" <?php if($jurusan=='Administrasi'){echo "selected";} ?>>Administrasi</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tahun Masuk</td>
				<td><input class="form-control" type="text" name="thn_masuk" value="<?=$thn_masuk;?>"></td>
			</tr>

			<tr>
				<td colspan="2">
					<button type="submit" class="btn btn-primary" name="btn-update">
						<span class="glyphicon glyphicon-edit"></span> Update
					</button>
					<a href="?page=anggota" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp;Kembali</a>
				</td>
			</tr>
		</table>
	</form>

</div>