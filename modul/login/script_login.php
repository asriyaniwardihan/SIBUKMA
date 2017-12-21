<?php
session_start();
if(isset($_POST['user'])){
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$login = new Database();
	$rs = $login->psql("SHOW","login.username, login.password, login.role, user.nama_user","login,user","login.user_id = user.id_user and login.username = '$user' and login.password = '$pass'");

	if(count($rs) == 1){
		foreach($rs as $data){
			$_SESSION['prj']['role'] = $data['role'];
		}
	}
	return $_SESSION['prj']['role'];
}

if(isset($_SESSION['prj'])){
	echo "Sudah login sebagai ".$_SESSION['prj']['role'] .". Logout <a href='".BASEURL."modul/login/script_logout.php'>here</a>";
}
else {
	echo "<script>alert('Access denied! Please login ');
		window.location.href = '".BASEURL."';
	</script>";
}

?>