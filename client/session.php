<?php
include '../include/inc.db.php';
if (empty($_SESSION['access']) OR $_SESSION['access'] != '3') {
	session_destroy();
	session_unset();
	header('location:../');
}
if (isset($_GET['logout'])) {
	session_destroy();
	session_unset();
	header('location:../');
}
 ?>