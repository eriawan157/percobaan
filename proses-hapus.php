<?php 
	include("koneksi.php");

	if (isset($_GET['no_atom'])) {
		$no_atom = $_GET['no_atom'];
		$sql = "DELETE FROM unsur WHERE no_atom=$no_atom";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			header('Location: index.php?');
		}else{
			die("Gagal Hapus. . .");
		} 
	}
	if (isset($_GET['id_senyawa'])) {
		$id_senyawa = $_GET['id_senyawa'];
		$sql = "DELETE FROM senyawa WHERE id_senyawa=$id_senyawa";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			header('Location: index_senyawa.php?');
		}else{
			die("Gagal Hapus. . .");
		} 
	}
	if (isset($_GET['id_elektrolit'])) {
		$id_elektrolit = $_GET['id_elektrolit'];
		$sql = "DELETE FROM elektrolit WHERE id_elektrolit=$id_elektrolit";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			header('Location: index_elektrolit.php?');
		}else{
			die("Gagal Hapus. . .");
		} 
	}
	else{
		die("Akses di larang ...");
	}
?>