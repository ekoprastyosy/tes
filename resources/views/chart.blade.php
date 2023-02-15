<style>
	.float {
		position: fixed;
		width: 50px;
		height: 50px;
		bottom: 10px;
		left: 10px;
		background-color: #25d366;
		color: #FFF;
		border-radius: 50px;
		text-align: center;
		font-size: 50px;
		z-index: 100;
	}

	.resp-sharing-button__link,
	.resp-sharing-button__icon {
		display: inline-block
	}

	.resp-sharing-button__link {
		text-decoration: none;
		color: #fff;
		margin: 0.5em
	}

	.resp-sharing-button {
		border-radius: 5px;
		transition: 25ms ease-out;
		padding: 0.5em 0.75em;
		font-family: Helvetica Neue, Helvetica, Arial, sans-serif
	}

	.resp-sharing-button__icon svg {
		width: 1em;
		height: 1em;
		margin-right: 0.4em;
		vertical-align: top
	}

	.resp-sharing-button--small svg {
		margin: 0;
		vertical-align: middle
	}

	/* Non solid icons get a stroke */
	.resp-sharing-button__icon {
		stroke: #fff;
		fill: none
	}

	/* Solid icons get a fill */
	.resp-sharing-button__icon--solid,
	.resp-sharing-button__icon--solidcircle {
		fill: #fff;
		stroke: none
	}

	.resp-sharing-button--twitter {
		background-color: #55acee
	}

	.resp-sharing-button--twitter:hover {
		background-color: #2795e9
	}

	.resp-sharing-button--pinterest {
		background-color: #bd081c
	}

	.resp-sharing-button--pinterest:hover {
		background-color: #8c0615
	}

	.resp-sharing-button--facebook {
		background-color: #3b5998
	}

	.resp-sharing-button--facebook:hover {
		background-color: #2d4373
	}

	.resp-sharing-button--tumblr {
		background-color: #35465C
	}

	.resp-sharing-button--tumblr:hover {
		background-color: #222d3c
	}

	.resp-sharing-button--reddit {
		background-color: #5f99cf
	}

	.resp-sharing-button--reddit:hover {
		background-color: #3a80c1
	}

	.resp-sharing-button--google {
		background-color: #dd4b39
	}

	.resp-sharing-button--google:hover {
		background-color: #c23321
	}

	.resp-sharing-button--linkedin {
		background-color: #0077b5
	}

	.resp-sharing-button--linkedin:hover {
		background-color: #046293
	}

	.resp-sharing-button--email {
		background-color: #777
	}

	.resp-sharing-button--email:hover {
		background-color: #5e5e5e
	}

	.resp-sharing-button--xing {
		background-color: #1a7576
	}

	.resp-sharing-button--xing:hover {
		background-color: #114c4c
	}

	.resp-sharing-button--whatsapp {
		background-color: #25D366
	}

	.resp-sharing-button--whatsapp:hover {
		background-color: #1da851
	}

	.resp-sharing-button--hackernews {
		background-color: #FF6600
	}

	.resp-sharing-button--hackernews:hover,
	.resp-sharing-button--hackernews:focus {
		background-color: #FB6200
	}

	.resp-sharing-button--vk {
		background-color: #507299
	}

	.resp-sharing-button--vk:hover {
		background-color: #43648c
	}

	.resp-sharing-button--facebook {
		background-color: #3b5998;
		border-color: #3b5998;
	}

	.resp-sharing-button--facebook:hover,
	.resp-sharing-button--facebook:active {
		background-color: #2d4373;
		border-color: #2d4373;
	}

	.resp-sharing-button--whatsapp {
		background-color: #25D366;
		border-color: #25D366;
	}

	.resp-sharing-button--whatsapp:hover,
	.resp-sharing-button--whatsapp:active {
		background-color: #1DA851;
		border-color: #1DA851;
	}

	.resp-sharing-button--telegram {
		background-color: #54A9EB;
	}

	.resp-sharing-button--telegram:hover {
		background-color: #4B97D1;
	}
</style>

<div class="card-header" style="background-color:white;">
	<div>
		<a href="<?= base_url('assets/Lapor.go.id (Jawaban).xlsx') ?>" class="btn btn-success btn-sm">Download Lapor.go.id.xlsx</a>
		<a href="<?= base_url('assets/Kesimpulan.docx') ?>" class="btn btn-primary btn-sm">Download Kesimpulan.docx</a>

		<?php
		$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		?>

		<!-- Sharingbutton WhatsApp -->
		<a style="position:absolute; top:115px; right:120px;" class="resp-sharing-button__link btn-sm" href="whatsapp://send?text=<?= $link ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
			<div class="resp-sharing-button resp-sharing-button--whatsapp resp-sharing-button--medium">
				<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M20.1 3.9C17.9 1.7 15 .5 12 .5 5.8.5.7 5.6.7 11.9c0 2 .5 3.9 1.5 5.6L.6 23.4l6-1.6c1.6.9 3.5 1.3 5.4 1.3 6.3 0 11.4-5.1 11.4-11.4-.1-2.8-1.2-5.7-3.3-7.8zM12 21.4c-1.7 0-3.3-.5-4.8-1.3l-.4-.2-3.5 1 1-3.4L4 17c-1-1.5-1.4-3.2-1.4-5.1 0-5.2 4.2-9.4 9.4-9.4 2.5 0 4.9 1 6.7 2.8 1.8 1.8 2.8 4.2 2.8 6.7-.1 5.2-4.3 9.4-9.5 9.4zm5.1-7.1c-.3-.1-1.7-.9-1.9-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.1-.2.2-.3.2-.6.1s-1.2-.5-2.3-1.4c-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6s.3-.3.4-.5c.2-.1.3-.3.4-.5.1-.2 0-.4 0-.5C10 9 9.3 7.6 9 7c-.1-.4-.4-.3-.5-.3h-.6s-.4.1-.7.3c-.3.3-1 1-1 2.4s1 2.8 1.1 3c.1.2 2 3.1 4.9 4.3.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.7-.7 1.9-1.3.2-.7.2-1.2.2-1.3-.1-.3-.3-.4-.6-.5z" />
					</svg>
				</div>Share
			</div>
		</a>

		<a target="_blank" href="<?= base_url('admin/responden/print_hasil') ?>" class="btn btn-info btn-sm" style="position:absolute; right:40px; top:125px;"><i class="bx bx-printer"> Print </i></a>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card shadow-none  border border-primary mb-3">
			<div class="card-body">
				<canvas id="myChart"></canvas>
			</div>
			<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

			<script>
				const ctx = document.getElementById('myChart');

				new Chart(ctx, {
					type: 'bar',
					data: {
						labels: ['2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
						datasets: [{
							label: 'Jumlah Pengaduan Per Hari',
							data: [414681, 156420, 118030, 288332, 237960, 99229, 196437, 252000, 141253, 90628],
							borderWidth: 1
						}]
					},
					options: {
						scales: {
							y: {
								beginAtZero: true
							}
						}
					}
				});
			</script>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="card shadow-none  border border-primary mb-3">
			<div class="card-header text-center">
				<h6>Rata-Rata Pengaduan / Hari</h6>
			</div>
			<div class="card-body">
				<canvas id="myChart2"></canvas>
			</div>
			<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

			<script>
				const ctx2 = document.getElementById('myChart2');

				new Chart(ctx2, {
					type: 'pie',
					data: {
						labels: ['2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
						datasets: [{
							label: 'Rata-Rata Pengaduan / Hari',
							data: [1152, 435, 328, 801, 661, 397, 365, 564, 466, 316],
							borderWidth: 1
						}]
					},
					options: {
						scales: {
							y: {
								beginAtZero: true
							}
						}
					}
				});
			</script>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card shadow-none  border border-primary mb-3">
			<div class="card-header text-center">
				<h6>Rata-Rata Tindak Lanjut / Hari</h6>
			</div>
			<div class="card-body">
				<canvas id="myChart3"></canvas>
			</div>
			<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

			<script>
				const ctx3 = document.getElementById('myChart3');

				new Chart(ctx3, {
					type: 'pie',
					data: {
						labels: ['2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
						datasets: [{
							label: 'Rata-Rata Tindak Lanjut / Hari',
							data: [805, 302, 227, 600, 460, 276, 255, 394, 325, 220],
							borderWidth: 1
						}]
					},
					options: {
						scales: {
							y: {
								beginAtZero: true
							}
						}
					}
				});
			</script>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card shadow-none  border border-primary mb-3">
			<div class="card-header text-center">
				<div class="row">
					<div class="col-md-6">
						<div style="position:absolute; top:150px;">
							<img src="https://latex.codecogs.com/gif.latex?Efektivitas&space;=&space;\frac{Realisasi&space;Tindak&space;Lanjut}{&space;Target&space;Pengaduan}&space;*&space;100%" />
						</div>
					</div>
					<div class="col-md-6">
						<table border="1" class="table table-striped">
							<thead>
								<th>Persentase Efektivitas</th>
								<th>Keterangan</th>
							</thead>
							<tbody>
								<tr>
									<td>> 100%</td>
									<td>Sangat Efektif</td>
								</tr>
								<tr>
									<td>90% - 100%</td>
									<td>Efektif</td>
								</tr>
								<tr>
									<td>80% - 90%</td>
									<td>Cukup Efektif</td>
								</tr>
								<tr>
									<td>60% - 80%</td>
									<td>Kurang Efektif</td>
								</tr>
								<tr>
									<td>
										< 60% - 80% </td>
									<td>
										Tidak Efektif
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<hr>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6" style="border-style:solid;">
						<h6>1. Perhitungan Efektivitas Tindak Lanjut Per Hari Pada Tahun 2013</h6>
						<img src="https://latex.codecogs.com/gif.latex?Efektivitas&space;=&space;\frac{805}{&space;1152}&space;*&space;100%&space;=&space;69,90%" />
						<br><br>
						<h6>2. Perhitungan Efektivitas Tindak Lanjut Per Hari Pada Tahun 2014</h6>
						<img src="https://latex.codecogs.com/gif.latex?Efektivitas&space;=&space;\frac{302}{&space;435}&space;*&space;100%&space;=&space;69,50%" />
						<br><br>
						<h6>3. Perhitungan Efektivitas Tindak Lanjut Per Hari Pada Tahun 2015</h6>
						<img src="https://latex.codecogs.com/gif.latex?Efektivitas&space;=&space;\frac{227}{&space;328}&space;*&space;100%&space;=&space;69,21%" />
						<br><br>
						<h6>4. Perhitungan Efektivitas Tindak Lanjut Per Hari Pada Tahun 2016</h6>
						<img src="https://latex.codecogs.com/gif.latex?Efektivitas&space;=&space;\frac{600}{&space;801}&space;*&space;100%&space;=&space;75%" />
						<br><br>
						<h6>5. Perhitungan Efektivitas Tindak Lanjut Per Hari Pada Tahun 2017</h6>
						<img src="https://latex.codecogs.com/gif.latex?Efektivitas&space;=&space;\frac{460}{&space;661}&space;*&space;100%&space;=&space;69,60%" />
						<br><br>
					</div>
					<div class="col-md-6" style="border-style: solid;">
						<h6>6. Perhitungan Efektivitas Tindak Lanjut Per Hari Pada Tahun 2018</h6>
						<img src="https://latex.codecogs.com/gif.latex?Efektivitas&space;=&space;\frac{276}{&space;397}&space;*&space;100%&space;=&space;69,50%" />
						<br><br>
						<h6>7. Perhitungan Efektivitas Tindak Lanjut Per Hari Pada Tahun 2019</h6>
						<img src="https://latex.codecogs.com/gif.latex?Efektivitas&space;=&space;\frac{255}{&space;365}&space;*&space;100%&space;=&space;69,87%" />
						<br><br>
						<h6>8. Perhitungan Efektivitas Tindak Lanjut Per Hari Pada Tahun 2020</h6>
						<img src="https://latex.codecogs.com/gif.latex?Efektivitas&space;=&space;\frac{394}{&space;564}&space;*&space;100%&space;=&space;69,85%" />
						<br><br>
						<h6>9. Perhitungan Efektivitas Tindak Lanjut Per Hari Pada Tahun 2021</h6>
						<img src="https://latex.codecogs.com/gif.latex?Efektivitas&space;=&space;\frac{325}{&space;466}&space;*&space;100%&space;=&space;69,75%" />
						<br><br>
						<h6>10. Perhitungan Efektivitas Tindak Lanjut Per Hari Pada Tahun 2022</h6>
						<img src="https://latex.codecogs.com/gif.latex?Efektivitas&space;=&space;\frac{220}{&space;316}&space;*&space;100%&space;=&space;69,62%" />
						<br><br>
					</div>
					<div class="card-footer text-center">
						<h5>Kesimpulan :</h5>
						<p>“Efektivitas terhadap Tindak Lanjut di atas masuk dalam <br>
							kriteria Kurang Efektif karena hasilnya kurang dari 80 %.”</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="card shadow-none  border border-primary mb-3">
			<div class="card-body">
				<h5 class="card-title">JUMLAH RESPONDEN</h5>
				<hr>
				<p class="card-text">Masyarakat : <?= count($res_umum) ?> responden</p>
				<p class="card-text">Pegawai : <?= count($res_umum) ?> responden</p>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card shadow-none  border border-primary mb-3">
			<div class="card-body">
				<h5 class="card-title">KUESIONER</h5>
				<hr>
				<p class="card-text">Kriteria Soal : <?= count($kriteria) ?> Kriteria</p>
				<p class="card-text">Jumlah Soal : <?= count($soal_umum) ?> Soal Masyarakat, <?= count($soal_pegawai) ?> Soal Pegawai</p>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<div class="card shadow-none  border border-primary mb-3">
			<div class="card-body">
				<h5 class="card-title">RATA-RATA TINGKAT KEPENTINGAN (I)</h5>
				<hr>
				<table style="width: 100%;">
					<?php $a = [];
					$b = 0; ?>
					<?php foreach ($rata_umum as $r => $rr) : ?>
						<?php $a[] = $r ?>
						<tr>
							<td class="text-center">
								<?php $b++ ?>
								A<?= $b  ?>
							</td>
							<td class="text-center">=</td>
							<td class="text-center"><?= round($rr, 2) ?></td>
						</tr>
						<?php if (($r + 1) % 4 == 0) : ?>
							<tr>
								<td colspan="3">
									<hr>
								</td>
							</tr>
						<?php endif ?>
					<?php endforeach; ?>
				</table>
				<h6 style="text-align: center"><b>JUMLAH NILAI = <?= round($jml_umum, 2) ?></b> </h6>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card shadow-none  border border-primary mb-3">
			<div class="card-body">
				<h5 class="card-title">RATA-RATA TINGKAT KINERJA (P)</h5>
				<hr>
				<table style="width: 100%;">
					<?php $c = [];
					$d = 0; ?>
					<?php foreach ($rata_pegawai as $rp => $rrp) : ?>
						<?php $c[] = $rp ?>
						<tr>
							<td class="text-center">
								<?php $d++ ?>
								A<?= $d  ?>
							</td>
							<td class="text-center">=</td>
							<td class="text-center"><?= round($rrp, 2) ?></td>
						</tr>
						<?php if (($rp + 1) % 4 == 0) : ?>
							<tr>
								<td colspan="3">
									<hr>
								</td>
							</tr>
						<?php endif ?>
					<?php endforeach; ?>
				</table>
				<h6 style="text-align: center"><b>JUMLAH NILAI = <?= round($jml_pegawai, 2) ?></b> </h6>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card shadow-none  border border-primary mb-3">
			<div class="card-body">
				<h5 class="card-title">NILAI ( I x P )</h5>
				<hr>
				<table style="width: 100%;">
					<?php $e = [];
					$f = 0; ?>
					<?php foreach ($nilai_ixp as $n => $np) : ?>
						<?php $e[] = $n ?>
						<tr>
							<td class="text-center">
								<?php $f++ ?>
								A<?= $f  ?>
							</td>
							<td class="text-center">=</td>
							<td class="text-center"><?= round($np, 2) ?></td>
						</tr>
						<?php if (($n + 1) % 4 == 0) : ?>
							<tr>
								<td colspan="3">
									<hr>
								</td>
							</tr>
						<?php endif ?>
					<?php endforeach; ?>
				</table>
				<h6 style="text-align: center"><b>JUMLAH NILAI = <?= round($jml_ixp, 2) ?></b> </h6>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 text-center">
		<div class="card shadow-none  border border-primary mb-3">
			<div class="card-body">
				<h4 class="card-title">KESIMPULAN :</h4>
				<hr>
				<img src="https://latex.codecogs.com/gif.latex?CSI&space;=&space;\frac{<?= round($jml_ixp, 2)  ?>}{(5&space;*&space;<?= round($jml_umum, 2) ?>)}&space;*&space;100%" />
				<br><br>
				<img src="https://latex.codecogs.com/gif.latex?Hasil&space;Perhitungan&space;,CSI&space;=&space;<?= round($csi, 2) ?>%" />

				<hr>
				<h4 class="card-title">SARAN :</h4>
				<?php foreach ($saran as $sa => $saa) : ?>
					<?php if ($csi >= $saa->besar_nilai) : ?>
						<i style="font-size: 17px;">"" <?= $saa->ket_saran ?> ""</i>
						<?php exit(); ?>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>