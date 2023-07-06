<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/elements/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Log on to codeastro.com for more projects -->
	<!-- Site Title -->
	<title><?php echo $title ?></title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/frontend/datepicker/dcalendar.picker.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<?php $this->load->view('frontend/include/base_css'); ?>
</head>

<body>


	<!-- navbar -->
	<?php $this->load->view('frontend/include/base_nav'); ?>
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/assets2/img/travel3.jpeg" class="h-50 w-100 " alt="...">
			</div>
			<div class="carousel-item">
				<img src="assets/assets2/img/travel.png" class=" w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="assets/assets2/img/travel.png" class=" w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<section class="service-area section-gap relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<!-- Default Card Example -->
					<div class="card mb-5">
						<div class="card-header">
							<i class="fas fa-search"></i> Search Tickets
						</div>
						<div class="card-body">
							<div class="alert alert-warning" role="alert">
								<p><b>PENTING !!</b></p>
								<P>Sebelum Membeli Tiket, Silahkan Lihat >> <b><i data-toggle="modal" data-target="#exampleModal">Bagaimana Cara Pemesanan?</i></b></P>
							</div>
							<form action="<?php echo base_url() ?>tiket/cekjadwal?>" method="get">
								<div class="form-group">
									<label for="exampleInputEmail1">Pilih Tanggal</label>
									<input placeholder="Masukan Tanggal" type="text" class="form-control datepicker" name="tanggal" required="">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Asal</label>
									<select name="asal" class="form-control js-example-basic-single" required>
										<option value="" selected disabled="">Pilih Asal</option>
										<?php foreach ($asal as $row) { ?>
											<option value="<?php echo $row['kd_tujuan'] ?>">
												<?php echo strtoupper($row['kota_tujuan']) ?>
												- <br><?php echo $row['terminal_tujuan']; ?> </option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Tujuan</label>
									<select name="tujuan" class="form-control js-example-basic-single">
										<option value="" selected disabled="">Pilih Tujuan</option>
										<?php foreach ($tujuan as $row) { ?>
											<option value="<?php echo $row['kota_tujuan'] ?>">
												<?php echo strtoupper($row['kota_tujuan']); ?></option>
										<?php } ?>
									</select>
								</div>
								<a href="<?php echo base_url() ?>tiket" class="btn btn-danger pull-left">Go Back </a>
								<button type="submit" class="btn btn-primary pull-right">Search </button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card mb-10">
						<div class="card-header">
							<i class="fas fa-info"></i> Terminal Info
						</div>
						<div class="card-body">
							<table class="table table-bordered table-condensed" style="font-size:12px;" id="mydata">
								<thead>
									<tr>
										<th style="text-align:center;">Kota</th>
										<th>Terminal</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($list as $value) { ?>
										<tr>
											<td style="text-align:center;vertical-align:middle">
												<?php echo strtoupper($value['kota_tujuan']) ?></td>
											<td style="vertical-align:middle;"><?php echo $value['terminal_tujuan'] ?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- End banner Area -->
	<!-- Log on to codeastro.com for more projects -->
	<!-- start footer Area -->
	<?php $this->load->view('frontend/include/base_footer'); ?>
	<!-- js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


	<?php $this->load->view('frontend/include/base_js'); ?>
	<script type="text/javascript">
		$(function() {
			var date = new Date();
			date.setDate(date.getDate());

			$(".datepicker").datepicker({
				startDate: date,
				format: 'yyyy-mm-dd',
				autoclose: true,
				todayHighlight: true,
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.js-example-basic-single').select2();
		});
	</script>
</body>

</html>
<!-- Modal -->
<!-- Log on to codeastro.com for more projects -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">How to book tickets?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<ol class="ordered-list" align="justify"><span class="center_content2">
							<li>Pilih tanggal dan pilih terminal/kota asal dan tujuan Anda untuk mencari jadwal yang tersedia.
							<li>Cari tiket lalu klik tombol <b>Pilih </b> pada tiket yang ingin dipesan.
							</li>
							<li>Sistem akan mengarahkan Anda ke halaman pemilihan kursi di mana Anda harus <b>memilih kursi mana pun</b> [Maks.4 kursi sekaligus]</li>
							<li>Setelah memilih kursi, klik tombol <b>Next </b>untuk melanjutkan. </li>
							<li>Isi detail tiket Anda dengan memberikan detail pelanggan seperti Nama Penumpang, Usia dan lainnya yang diperlukan <b>Identitas Pengguna</b>. Dengannya, pilih salah satu bank yang tersedia [sebagai Metode Pembayaran] untuk memesan tiket.</li>
							<li>Setelah mengirimkan formulir, pemesanan dilakukan <b>[sementara]</b>. Sistem akan memberi Anda <b>QR Code</b> dan Anda harus melakukan pembayaran.</li>
							<li>Semua instruksi pembayaran disediakan di halaman tiket.</li>
							<li>Setelah itu, klik tombol <b>Konfirmasi Pembayaran</b> untuk mengirimkan detail pembayaran Anda dengan lampiran <b>gambar bukti</b>.</li>
							<li>Akhirnya, permintaan pembayaran Anda akan dikirim untuk <b>verifikasi</b>. </li>
							<li>Anda juga akan menerima <b>E-Ticket</b> satu kali setelah pembayaran diverifikasi. </li>
							<li>Jika sudah melakukan pembayaran, bawalah bukti pembayaran pada saat keberangkatan dan tukarkan satu jam sebelum keberangkatan. </li>
						</span></ol>
					<w:worddocument></w:worddocument>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>