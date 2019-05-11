<!DOCTYPE html>
<html>
<head>
	<title>Password</title>
</head>
<body>
	
	<form method="post">
		<label>Username :</label>
		<input type="text" name="uname">
		<label>Email</label>
		<input type="email" name="email" minlength="4">

		<input type="submit" name="simpan" value="simpan">
	</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

class validation{
	function isuname($urname){
		$lower2 = preg_match('@[a-z]@', $urname);

		if (!$lower2 || strlen($urname) != 8){
		
			return false;
		}else{
			return true;
		}
	}


	function isemail($em){
		$upper = preg_match('@[A-Z]@', $em);
		$lower = preg_match('@[a-z]@', $em);
		
		$num = preg_match('@[0-9]@', $em);
		$spl = preg_match('@[\W]@',$em);
		$hting = strlen($em);
		$akhir = -1 * ($hting - 4);
		$akhir1 = -1 * ($hting - 3);
		$akhir2 = -1 * ($hting - 2);
		$akhir3 = -1 * ($hting - 1);
		$emil = substr($em,3,$akhir);
		$emil1 = substr($em,2,$akhir1);
		$emil2 = substr($em,1,$akhir2);
		$emil3 = substr($em,0,$akhir3);

		if (!$upper || !$lower || !$num || !$spl || $emil =="@" || $emil1=="@" || $emil2 == "@" || $emil3 == "@") {
			return false;
		}else{
			return true;
		}

	}
}

$valid = new validation();
		
	
		$uname = $_POST['uname'];
		$emaile = $_POST['email'];

		$username = $valid -> isuname($uname);
		$email = $valid -> isemail($emaile);

		if ($username == true && $email == true){
			echo "<script> alert('Selamat Datang') </script>";
		}else{
			echo "<script> alert('Username and Emial Invalid') </script>";
		}
		
		
		}
?>