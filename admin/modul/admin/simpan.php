<?php
error_reporting(0);
include "sesi_admin.php";

if (isset($_POST['simpan'])) {
	include "../koneksi.php";

	$username = mysqli_real_escape_string($koneksi, $_POST['username']);
	$password = md5($_POST['password']);
	$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
	$telepon = mysqli_real_escape_string($koneksi, $_POST['telepon']);
	$lokasi = $_FILES['foto']['tmp_name'];
	$namafile = $_FILES['foto']['name'];
	$fotobaru = uniqid() . date('dmYHis') . "_" . $namafile;
	$tipefile = $_FILES['foto']['type'];
	$folder = "../images/admin/";
	$allowedTypes = ['image/jpeg', 'image/png'];

	// Validasi username
	$sql = "SELECT * FROM tb_admin WHERE username = '$username'";
	$tambah = mysqli_query($koneksi, $sql);
	$row = mysqli_fetch_row($tambah);

	if ($row) {
		echo "Username sudah ada.";
	} else {
		if (!empty($lokasi)) {
			// Validasi tipe file
			if (!in_array($tipefile, $allowedTypes)) {
				echo "Format file tidak didukung. Hanya JPEG dan PNG yang diperbolehkan.";
				exit;
			}

			// Pindahkan file ke folder tujuan
			if (!move_uploaded_file($lokasi, $folder . $fotobaru)) {
				echo "Gagal mengupload foto. Pastikan folder memiliki izin tulis.";
				exit;
			}

			// Simpan data dengan foto
			$sql = "INSERT INTO tb_admin SET 
                        username='$username', 
                        password='$password', 
                        nama='$nama', 
                        telepon='$telepon', 
                        foto='$fotobaru'";
		} else {
			// Simpan data tanpa foto
			$sql = "INSERT INTO tb_admin SET 
                        username='$username', 
                        password='$password', 
                        nama='$nama', 
                        telepon='$telepon'";
		}

		// Eksekusi query
		if (mysqli_query($koneksi, $sql)) {
			header("location: ?m=admin&s=awal");
		} else {
			echo "Gagal menyimpan data: " . mysqli_error($koneksi);
		}
	}
} else {
	echo "Gagal menyimpan data.";
}
?>