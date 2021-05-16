<?php
	if(isset($_POST['submit_btn'])){
		
		session_start();
		include('dbconnect.php');
	
		$uname = mysqli_real_escape_string($dbconn, $_POST['username']);
		$pwd = mysqli_real_escape_string($dbconn, $_POST['password']);
	
		#$query = mysqli_query($dbconn, "SELECT * FROM  'user_list' WHERE username = '$uname' AND password = '$pwd' ");
        $getFromDB = "SELECT * FROM  user_list WHERE username = '$uname' AND password = '$pwd';";
        $query = $dbconn->query($getFromDB);
        $check = $query->num_rows;

		if ($check < 1) {
			$_SESSION['message'] = "Login Gagal, Cek kembali Username dan Password";
			header('location:index.php');
		}
		else{
			$rows = $query->fetch_array();
			setcookie("user", $rows['username'], time() + (600)); 
			setcookie("pw", $rows['password'], time() + (600)); 
			$_SESSION['user']=$rows['username'];
			header('location:success.php');
		}
	}
	else{
		header('location:index.php');
		$_SESSION['message']="silahkan login kembali!";
	}
?>
