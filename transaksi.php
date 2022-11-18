<?php

// Koneksi Function
require 'function.php';

// Kode Auto
$select_kode = mysqli_query($c, "SELECT MAX(kode_transaksi) as MAXkode FROM tbl_transaksi");
$kode_data = mysqli_fetch_array($select_kode);
$kode = $kode_data['MAXkode'];
$nourut = (int) substr($kode, 10, 4);
$nourut++;
$char = "TR";
$tgl = date('Ymd');
$kode_auto = $char . $tgl . sprintf("%04s", $nourut);

?>

<!doctype html>
<html lang="en">

<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--favicon-->
		<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
		<!--plugins-->
		<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
		<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
		<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
		<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
		<link href="assets/plugins/datetimepicker/css/classic.css" rel="stylesheet" />
		<link href="assets/plugins/datetimepicker/css/classic.time.css" rel="stylesheet" />
		<link href="assets/plugins/datetimepicker/css/classic.date.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
		<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
		<link href="assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
		<!-- loader-->
		<link href="assets/css/pace.min.css" rel="stylesheet" />
		<script src="assets/js/pace.min.js"></script>
		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/app.css" rel="stylesheet">
		<link href="assets/css/icons.css" rel="stylesheet">
		<!-- Theme Style CSS -->
		<link rel="stylesheet" href="assets/css/dark-theme.css" />
		<link rel="stylesheet" href="assets/css/semi-dark.css" />
		<link rel="stylesheet" href="assets/css/header-colors.css" />
		<title>RS Kita - Admin Dashboard</title>
</head>

<body class="bg-theme bg-theme1">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">RS Kita</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="index.php">
						<div class="parent-icon"><i class='bx bx-home-smile'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<li class="menu-label">Pasien</li>
				<li>
					<a href="rekam_medis.php">
						<div class="parent-icon"><i class='bx bx-health'></i>
						</div>
						<div class="menu-title">Rekam Medis</div>
					</a>
				</li>
				<li>
					<a href="pasien.php">
						<div class="parent-icon"><i class='bx bx-user'></i>
						</div>
						<div class="menu-title">Data Pasien</div>
					</a>
				</li>
				<li class="menu-label">Dokter</li>
				<li>
					<a href="jadwal.php">
						<div class="parent-icon"><i class='bx bx-calendar'></i>
						</div>
						<div class="menu-title">Jadwal</div>
					</a>
				</li>
				<li>
					<a href="dokter.php">
						<div class="parent-icon"><i class='bx bx-user-voice'></i>
						</div>
						<div class="menu-title">Data Dokter</div>
					</a>
				</li>
				<li class="menu-label">Apotek</li>
				<li>
					<a href="transaksi.php">
						<div class="parent-icon"><i class='bx bx-basket'></i>
						</div>
						<div class="menu-title">Transaksi</div>
					</a>
				</li>
				<li>
					<a href="obat.php">
						<div class="parent-icon"><i class='bx bx-data'></i>
						</div>
						<div class="menu-title">Data Obat</div>
					</a>
				</li>
				<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReiyHYtDJQ0t5jCs4j_PiD5ESMvPwnvHVa3w&usqp=CAU" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">Selamat Datang</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="card">
					<div class="card-body">
						<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="assets/images/caro/transaksi.png" class="d-block w-100" alt="...">
									<div class="carousel-caption d-none d-md-block">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<!-- Button trigger modal -->
					<button type="button" class="d-block w-100 btn btn-light px-5" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal"><i class='bx bx-message-square-add mr-1'></i>Tambah Data</button>
					<!-- Modal -->
					<div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content bg-dark">
								<div class="modal-header">
									<h5 class="modal-title">Tambah Transaksi Baru</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form class="row g-3" method = "post">
										<div class="col-md-12">
											<label class="form-label">Kode Transaksi</label>
											<input type="text" class="form-control" name="kode_transaksi" value="<?=$kode_auto;?>" readonly>
										</div>
										<div class="col-md-6">
											<label for="exampleDataList" class="form-label">Kode Pasien</label>
											<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." name="kode_pasien" required>
												<datalist id="datalistOptions">
												<?php 
													$select_data = mysqli_query($c,"SELECT * FROM tbl_pasien");
													while($data = mysqli_fetch_array($select_data)){
														$kode_pasien = $data['kode_pasien'];
														$nama_pasien = $data['nama_pasien'];
												?>
													<option value="<?=$kode_pasien;?>"><?=$nama_pasien;?></option>
												<?php 
													}
												?>
												</datalist>
										</div>
										<div class="col-md-6">
											<label class="form-label">Tanggal Transaksi</label>
											<input class="result form-control" type="text" id="date" placeholder="Date Picker..." name="tgl_transaksi" required>
										</div>
									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
									<a href="transaksi_detail.php<?=$idt;?>"><button type="submit" class="btn btn-primary" name="tambahtransaksi">Selanjutnya</button></a>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Kode</th>
										<th>Tanggal</th>
										<th>Kode Pasien</th>
										<th>Banyak</th>
										<th>Total Bayar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
								<?php
									$select_obat = mysqli_query($c, "SELECT * FROM tbl_transaksi");
									while($data = mysqli_fetch_array($select_obat)){
										$idt = $data ['kode_transaksi'];
										$tgl_transaksi = $data ['tgl_transaksi'];
										$kode_pasien = $data ['kode_pasien'];

										$hitungjml = mysqli_query($c, "SELECT * FROM tbl_detail_transaksi WHERE kode_transaksi = '$idt'");
										$jumlah = mysqli_num_rows($hitungjml);
									?>
									<tr>
										<td><?=$idt;?></td>
										<td><?=$tgl_transaksi;?></td>
										<td><?=$kode_pasien;?></td>
										<td><?=$jumlah;?></td>
										<td>
											<?php
											// Hitung Total Bayar
											$select_detail = mysqli_query($c, "SELECT * FROM tbl_detail_transaksi t, tbl_obat o WHERE t.kode_obat = o.kode_obat AND t.kode_transaksi = '$idt'");

											$total = 0;

											while($data = mysqli_fetch_array($select_detail)){
												$jumlah_obat = $data ['jumlah_obat'];	// QUANTITY
												$harga_obat = $data ['harga_obat'];		// PRICE
												$subtotal = $jumlah_obat * $harga_obat; // SUBTOTAL
												$total += $subtotal;					// PAY AMOUNT
											}

											?>
											Rp <?=number_format($total);?>
										</td>
										<td>
											<div class="col">
												<div class="btn-group" role="group" aria-label="Basic example">
													<a href="transaksi_detail.php?idt=<?=$idt;?>"><button type="button" class="btn btn-light btn-sm" title="Detail"><i class='bx bx-show me-0'></i></button></a>
													<input type="hidden" name="kode_detail" value="<?=$kode_detail;?>">
													<button type="button" class="btn btn-light btn-sm" title="Delete" data-bs-toggle="modal" data-bs-target="#deletemodal<?=$idt;?>"><i class='bx bx-trash me-0'></i>
													</button>
												</div>
											</div>
										</td>
									</tr>
									<!-- Modal Delete-->
									<div class="modal fade" id="deletemodal<?=$idt;?>" tabindex="-1" aria-hidden="true">
										<div class="modal-dialog modal-sm">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Peringatan</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<form method = "post">
												<div class="modal-body">Yakin ingin menghapus data <?=$idt;?>?</div>
												<input type="hidden" name="idt" value="<?=$idt;?>">
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
													<button type="submit" class="btn btn-primary" name="hapustransaksi">Hapus</button>
												</div>
												</form>
											</div>
										</div>
									</div>
									<?php
										};
									?>
								</tbody>
							</table>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script src="assets/plugins/datetimepicker/js/legacy.js"></script>
	<script src="assets/plugins/datetimepicker/js/picker.js"></script>
	<script src="assets/plugins/datetimepicker/js/picker.time.js"></script>
	<script src="assets/plugins/datetimepicker/js/picker.date.js"></script>
	<script src="assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js"></script>
	<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js"></script>
	<script src="assets/plugins/select2/js/select2.min.js"></script>
	<script>
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
		$('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
	</script>
	<script>
		$('.datepicker').pickadate({
			selectMonths: true,
	        selectYears: true
		}),
		$('.timepicker').pickatime()
	</script>
	<script>
		$(function () {
			$('#date-time').bootstrapMaterialDatePicker({
				format: 'YYYY-MM-DD HH:mm'
			});
			$('#date').bootstrapMaterialDatePicker({
				time: false
			});
			$('#time').bootstrapMaterialDatePicker({
				date: false,
				format: 'HH:mm'
			});
		});
	</script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>