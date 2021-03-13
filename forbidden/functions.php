<!-- test Explode Dengan delimiter enter -->
<?php  

function nama2($data){
	// ambil nama2 dari data yang di input di text area kemudian pecah menjadi array dengan enter
	$nama2 = explode(PHP_EOL, $data);

	// jika ada array yg nilainya kosong maka hapus array
	$ada = true;

	// ulangi jika masih ada yang array yang nilainya kosong 
	while ($ada === true) {

		
	$Cariarray = array_search('', $nama2); //cari array yang nilainya kosong

	if ($Cariarray === false) //jika tidak ada array yang nilainya kosong maka var ada diubah menjadi false 
	{ 
		$ada = false;
	}else // jika ada array yang nilainya kosong hapus array tersebut dengan splice
	{
		$ada = true;
		array_splice($nama2, $Cariarray,1);
	}


}

	return $nama2;
}
	

function random($max){

	$arr = [];


	while (count($arr) < $max) {
		$max2 = $max-1;
		$rand = rand(0,$max2); //Random nilai dari 0 sampe ke angka yg dimasukin di parameter 

		if (!in_array($rand, $arr)) { // cek apakah nilai $rand (random) apakah udah ada di dalam array
		$arr[] = $rand; //kalau nggak ada nilainya dimasukin di dalam array, kalau ada ulangi random
		}
	}	

	return $arr;
}
	

function JumlahSiskel($data1,$data2,$data3)
{
	$jmlh_siskel = [];

	// Bagi jumlah orang perkelompok
	for ($i=0; $i < $data1; $i++) { 
		$jmlh_siskel[] = $data2;
	}


	// ambil sisa orang yang tdk kebagian kelompok kemudian bagi satu2 dari kelopok yang depan
	for ($j=0; $j < $data3; $j++) { 
		$jmlh_siskel[$j] = $jmlh_siskel[$j] + 1;
	}

	return $jmlh_siskel;

}


