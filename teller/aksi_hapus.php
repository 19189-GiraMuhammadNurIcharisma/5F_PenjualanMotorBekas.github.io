<?php
include '../koneksi.php';

$id_customer = $_GET['id_customer'];
$sql = mysqli_query($koneksi, "DELETE FROM customer WHERE id_customer='$id_customer'") or die($koneksi);
if ($sql) {
    echo "
		<script>
		alert('Data Berhasil dihapus!');
		document.location.href='transaksi.php';
		</script>
	";
} else {
    echo "
		<script>
		alert('Data gagal dihapus!');
		document.location.href='transaksi.php';
		</script>
	";
}
