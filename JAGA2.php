<center>
	<?php $n = 0; for ($k=0; $k < $jumlah_Kelompok; $k++): ?>
	
	
		<h4 style="background-color: blue;">Kelompok <?=$k+1?></h4>

		
		<?php for ($l=0; $l < $jmlh_siskel[$k]; $l++): ?>

			<p>
				- <?= $nama2[$indexInputanRandom]; ?>
			</p>		
		
			<?php $indexInputanRandom++ ?>
		<?php endfor ?>

		
	<?php endfor ?>
</center>



<div class="card Select" >

	<div class="card-header chs">
		<p><b>
			Click/Touch Teks dibawah ini kemudian salin/copy
		</b></p>
	</div>

	<div class="selectAll" style="user-select: all">
	
	<h4>*Web Aplikasi Bagi kelompok*</h4>	
	<h5><a href="#">www.bagikelompok.com</a></h5>
	<br>

	<?php $a = 0; for ($b=0; $b < $jumlah_Kelompok; $b++): ?>

	<h6><b>
		*Kelompok <?=$b+1?>*
	</b></h6>

		
		<?php for ($c=0; $c < $jmlh_siskel[$b]; $c++): ?>
		
    		<div ><?= $nama2[$hasilRandom[$a]]; ?></div>

		<?php $a++ ?>
		<?php endfor ?>
		
    		<br>
		<?php endfor ?>

		</div>


</div>