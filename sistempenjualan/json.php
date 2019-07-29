<!DOCTYPE html>
<html>

<body>

<h4>tampilan format json data_barang  </h4>
<?php
include'koneksi.php';

$query = mysqli_query($koneksi1, 'select * from data_barang');

if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id'] = $row["id"];
		$data['tanggal'] = $row["tanggal"];
		$data['nama'] = $row["nama"];
		$data['harga_jual'] = $row["harga_jual"];
		$data['harga_beli'] = $row["harga_beli"];
		$data['jumlah'] = $row["jumlah"];
		array_push($responsistem["data"], $data);
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>

<h4>tampilan format json data_karyawan  </h4>
<?php
include'koneksi.php';

$query = mysqli_query($koneksi1, 'select * from data_karyawan');

if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id'] = $row["id"];
		$data['nama_karyawan'] = $row["nama_karyawan"];
		$data['jabatan'] = $row["jabatan"];
		$data['status'] = $row["status"];
		$data['gaji'] = $row["gaji"];
		$data['total_kredit'] = $row["total_kredit"];
		array_push($responsistem["data"], $data);
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>

<h4>tampilan format json data_penjualan  </h4>
<?php
include'koneksi.php';

$query = mysqli_query($koneksi1, 'select * from data_penjualan');

if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id'] = $row["id"];
		$data['tanggal'] = $row["tanggal"];
		$data['nama_barang'] = $row["nama_barang"];
		$data['jumlah'] = $row["jumlah"];
		$data['harga'] = $row["harga"];
		$data['total_harga'] = $row["total_harga"];
		$data['untung'] = $row["untung"];
		$data['id_karyawan'] = $row["id_karyawan"];
		$data['nama_pembeli'] = $row["nama_pembeli"];
		$data['payment_method '] = $row["payment_method "];
		array_push($responsistem["data"], $data);
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
<h4>tampilan format json data_penjualan  </h4>
<?php
include'koneksi.php';

$query = mysqli_query($koneksi1, 'select * from data_user');

if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id_user'] = $row["id_user"];
		$data['first_name'] = $row["first_name"];
		$data['last_name'] = $row["last_name"];
		$data['username'] = $row["username"];
		$data['password'] = $row["password"];
		$data['status'] = $row["status"];
		
		array_push($responsistem["data"], $data);
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>


</body>
</html>
