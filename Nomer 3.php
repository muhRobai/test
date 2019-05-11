<!DOCTYPE html>
<html>
<head>
	<title>random</title>
</head>
<body>
	<form method="post">
		<label>Jumlah random</label>
		<input type="text" name="jumlah">

		<input type="submit" name="kirim">
	</form>
</body>
</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$jml = $_POST['jumlah'];

	function acak(){
		$karakter = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

		$String = '';

			for($i = 0; $i < 32; $i++){
				$pos = rand(0, strlen($karakter)-1);
				$String .= $karakter{$pos};
			}
			return $String;
			
	}

	function ceksama($baris){
		$i = 0;
		$akhir = array();
		$stringsama = false;
		while($i < $baris){
			$akhir[$i] = acak();
			$i++;
		}
		for($j = 0; $j < count($akhir); $j++){
			for($k = $j+1; $k < count($akhir); $k++){
				if($akhir[$j] == $akhir[$k]){
					$stringsama = true;
				}
			}

				if ($stringsama == false) {
					echo "<br>";
					echo $akhir[$j];
					echo "<br>";
				}
		}
		
	}

	$oke = ceksama($jml);
}
?>