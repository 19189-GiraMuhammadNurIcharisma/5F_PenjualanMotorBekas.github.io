<?php
include '../koneksi.php';

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Transaksi</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
</head>

<body>
	<main class="content">
		<?php include 'menu-content.php'; ?>
		<section class="views">
			<div class="view-table">
				<div class="welcome">
					<h1>Daftar Motor</h1>
					<hr />
				</div>
				<div>
					<div class="galeri">
						<?php
						$data = mysqli_query($koneksi, "SELECT * FROM identitas_motor order by id_motor desc LIMIT 4");
						while ($row = mysqli_fetch_array($data)) {
						echo"
							<div class='item-galeri'>
								<div class='img-item'>
									<img src='../gambarMotor/$row[gambar_motor]'>
								</div>
								<div class='nama-item'>
									<h5>$row[Merk]</h5>
									<h4>$row[Model]</h4>
									<h5>Rp.$row[harga_jual]</h5>
									<h1 style='text-align: center;'>
										<a href='detail-motor.php?id_motor=$row[id_motor]'> <button type='button' class='btn btn-primary'>Detail</button></a>
										<a href='buat-transaksi.php?id_motor=$row[id_motor]'> <button type='button' class='btn btn-primary'>Beli</button></a>
									</h1>


								</div>
							</div>";
						 } 
					?>
					</div>
				</div>
			</div>
			</div>
		</section>
	</main>
	<footer>
		<div class="wrapper">
			<div class="copyright">
				<small></small>
			</div>
		</div>
	</footer>
	<script src="bootstrap.bundle.min.js"></script>
</body>

</html>