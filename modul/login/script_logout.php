<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/saferental/config/Core.php');
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
session_destroy();
echo "<script>alert('Access denied! Please login ');
		window.location.href = '".BASEURL."';
	</script>";
?>