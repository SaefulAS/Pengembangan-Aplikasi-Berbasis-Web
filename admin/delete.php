<?php 
include "../inc/class.perpus.php";
$obj = new perpus;
if (!empty($_GET['buku_id'])) {
	$obj->delete($_GET['buku_id'],'tbl_buku','id');
	header('location:?page=buku&msg=delete');
}elseif (!empty($_GET['nis'])) {
	$obj->delete($_GET['nis'],'tbl_anggota','nis');
	header('location:?page=anggota&msg=delete');
}elseif (!empty($_GET['user_id'])) {
	$obj->delete($_GET['user_id'],'tbl_user','id');
	header('location:?page=user&msg=delete');
}
?>