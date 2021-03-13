<?php require 'forbidden/functions.php';

$inputannama = '';
$inputanNamaKelompok = '';
$inputanJumlahKelompok;

$JumlahInputan = 0;

if (isset($_POST['submit'])) {
	
	$inputannama = $_POST['tArea'];
	$inputanNamaKelompok = $_POST['nama_kelompok'];
	$jumlah_Kelompok = $_POST['jumlah_kelompok'];

	if ($jumlah_Kelompok == '') {
		$jumlah_Kelompok = 0;
	}

	if ($jumlah_Kelompok > 0) {
		

	$nama2 = nama2($_POST['tArea']);
	$JumlahInputan =  count($nama2);

	$sisa_pembagian = $JumlahInputan % $jumlah_Kelompok;
	$jumlah_siswa_pekelompok = floor($JumlahInputan / $jumlah_Kelompok);
	$jmlh_siskel = JumlahSiskel($jumlah_Kelompok, $jumlah_siswa_pekelompok, $sisa_pembagian);
	$nama = 'ogi';
	$indexInputanRandom = 0;
	$hasilRandom = random($JumlahInputan);

	}


}

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta name="google-site-verification" content="cOuwjJVyr5bq8X23dHmidT5uZtadlYBUzAnNCiU9afQ" />
	<meta charset="utf-8">
	<meta name="keyword" content="Aplikasi Pembagian Kelompok Secara Acak dan Mudah untuk dipakai saat ada pembagian kelompok atau pembagian grup">
	<meta name="description" content="Aplikasi Pembagian Kelompok Secara Acak dan Mudah untuk dipakai saat ada pembagian kelompok atau pembagian grup">
 	<meta name="viewport"
	content="width=device-width, initial-scale=1.0"> 
 	<title>Bagi Kelompok - Aplikasi Pembagian Kelompok atau Grup Secara Acak</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css?v=	<?= time() ?>">
 	<link rel="stylesheet" type="text/css" href="css/style.css?v=	<?= time() ?>">

 	<!--Tambahkan Libraries - JQuery and jspdf-->
	
 </head>
 <body>


 <div class="containerr mt-2">


 	<div class="row">
 		
 		<div class="col-12 col-md-1">

 			<center>
 			<img src="img/logo4.png" class="logo">
 			</center>
 			

 		</div>

 		<div class="col-12 col-md-11">
 			

	 	<div class="judul">

		 	<h1 id="" class="text-center"><b>BAGI KELOMPOK</b></h1>
		 	<h4 class="text-center"><b>Aplikasi Keadilan Sosial saat Pembagian Kelompok</b></h4	>

	 	</div>

 		</div>

 	</div>


 	<hr>

<div class="content mt-5">


<!-- <center> -->

	<form action="" method="post">	

	<div class="row">	

		<div class="col-12 col-md-8 textArea">	
		<span>Masukan Seluruh Nama dan pisah dengan baris</span>	
			<textarea name="tArea" class="tArea" autocomplete="" placeholder="*Contoh : &#10; Syaugi &#10; Syarif &#10; Shavira &#10; Adib"><?= $inputannama ?></textarea>
		</div>

		<div class="col-12 col-md-4">

		<span>*Masukan Judul Kelompok</span>	
		<input type="text"  name="nama_kelompok" class="inpt" value="<?= $inputanNamaKelompok ?>" placeholder="*cth : Kelompok Matematika"><br>


		<span>*Masukan Jumlah Kelompok</span>
		<br>
		<input type="number" name="jumlah_kelompok" class=" inpt2" value="<?= $jumlah_Kelompok ?>" placeholder="*Cth : 5"><br>
		<span class="war">*Harus Angka dan tidak boleh lebih besar dari total anggota kelompok</span>
		<br>
		<button type="submit" name="submit"><b>Generate</b></button>

		<?php if (isset($_POST['submit'])): ?>
			<button type="button" id="cmd">
				<b>Report to PDF</b>
			</button>
		<?php endif ?>
			

		</div>
	</div>	

	<br>


	</form>


	
</center>

</div>
	
<!-- penjelasan tentang aplikasi -->

<?php if (!isset($_POST['submit'])): ?>

<div class="about">
	
 <div class="row">
 	
 	<div class="col-12 col-md-6">
 		<center>	
 		<img src="img/poster.jpg">
 		</center>
 	</div>

 	<div class="col-12 col-md-6 penj">
 			
 			<br>
 			<h5><b><u>
 			Apa kegunaan aplikasi bagi kelompok?
 			</u></b></h5>

 			<p> <b>	Web Aplikasi Bagi Kelompok ini merupakan jalan yang paling bijak bagi kalian pelajar atau lainnya yang ingin membuat kelompok tanpa adanya pilih-pilih sesuai keinginan segelintir orang. aplikasi ini me - random nama-nama secara acak dan hasilnya bisa di screenshoot ataupun download ke pdf.</b></p>

 			<br>

 			<h5><b><u>
 			Bagaimana cara menggunakan aplikasi bagi kelompok?
 			</u></b></h5>

 			<ul>

 				<li><b>
 					Masukan nama-nama kemudian pisah dengan baris	
 				</b></li>

 				<li><b>
 					Masukan Judul Kelompok	
 				</b></li>

 				<li><b>
 					Masukan jumlah kelompok yang nilainya tidak boleh lebih besar dari total nama-nama yang di-inputkan	
 				</b></li>

 				<li><b>
 					Klik tombol Generate untuk mengacak kelompok	
 				</b></li>

 				<li><b>
 					Kemudian hasilnya bisa di screenshoot atau download ke pdf 	
 				</b></li>


 			</ul>
 	</div>

 </div>


</div>

<?php endif ?>

<!--Akhir penjelasan tentang aplikasi -->


<?php 

// Jika angka yang dimasukan kosong maka tampilkan ini 

	if (isset($_POST['submit'])) {
	
	if ($jumlah_Kelompok == 0) {
		echo "<script>
				alert('Anda belum memasukan jumlah kelompok!!!');
		</script>";
		die;

	}

	}		
	


// jika inputan jumlah kelompok lebih besar dari total anggota kelompok maka batalkan

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	if ($jumlah_Kelompok > $JumlahInputan) {
		echo "<script>
				alert('Jumlah Kelompok Yang dimasukan lebih besar dari total semua anggota Kelompok');
		</script>";
		die;

}



 ?>
 <hr>

<div id="conten" class="conten">

	<?php $n = 0; for ($k=0; $k < $jumlah_Kelompok; $k++): ?>


	<div class="card" style="width: 18rem;">

  	<div class="card-header">
		<h4><b>Kelompok <?=$k+1?></b></h4>
  	</div>
    	
  <ul class="list-group list-group-flush">

		
		<?php for ($l=0; $l < $jmlh_siskel[$k]; $l++): ?>
		
    		<li class="list-group-item"><b><?= $nama2[$hasilRandom[$indexInputanRandom]]; ?></b></li>
		
			<?php $indexInputanRandom++ ?>
		<?php endfor ?>
  </ul>

	</div>

	<?php endfor ?>
	

<br>
</div>


<!-- untuk text select all -->
<hr>

<?php if (isset($_POST['submit'])): ?>
<div class="contentt">

<center>
<button onclick="select()">Click here for copy this text</button>

<textarea id="myInput">
*Web Aplikasi Bagi kelompok*
www.bagikelompok.rf.gd

<?php $a = 0; for ($b=0; $b < $jumlah_Kelompok; $b++): ?>
*Kelompok <?=$b+1?>*
<?php for ($c=0; $c < $jmlh_siskel[$b]; $c++): ?>
<?= $nama2[$hasilRandom[$a]]; ?>

<?php $a++ ?>
<?php endfor ?>

<?php endfor ?>

</textarea>

</center>
</div>

<?php endif ?>



</div>

<!-- akhir untuk text select all -->






<div id="conten2" class="conten2">

<center>


	<h1>APLIKASI BAGI KELOMPOK </h1>
	<a href=><h3>www.google.com</h3></a>
	<p>.</p>

	<?php if (isset($_POST['nama_kelompok'])): ?>

		<h2>Nama Kelompok : <?= $_POST['nama_kelompok'] ?></h2>
		
	<?php endif ?>

	<p>.</p>

	<?php $n = 0; 



	for ($u=0; $u < $jumlah_Kelompok; $u++): ?>
	
	
		<h3 >Kelompok <?=$u+1?></h3>

		
		<?php for ($v=0; $v < $jmlh_siskel[$u]; $v++): ?>

			<p>
				<b>- <?= $nama2[$hasilRandom[$n]]; ?></b>
			</p>		
		
			<?php $n++ ?>
		<?php endfor ?>
		<br><br>

<div>-----------------------------------</div>

	<?php endfor ?>
</center>

</div>







	<!--Tambahkan Libraries - JQuery and jspdf-->
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script> -->
	<script src="forbidden/pdf.js"></script>
	<!-- <script type="text/javascript" src="forbidden/expdf.js"> -->
	<script type="text/javascript" src="forbidden/report.js"></script>
	<script type="text/javascript" src="forbidden/select.js"></script>	



	</script>


<footer class="bg-dark text-white">
	
	<div class="container">
		
		<div class="row">
			<div class="col text-center">
				&copy Copyright <a href="https://www.instagram.com/mo_syq/" target="_blank">@mosyq</a>
			</div>
		</div>

	</div>

</footer>
 </body>
 </html>
