<?php
session_start();
require_once 'shortener.php';

$s = new Shortener;

if(isset($_POST['url'])) {
	$url = $_POST['url'];

	if ($code =$s->makeCode($url)) {
		$_SESSION['feedback'] = "Generated! Your URL is : <a href=\"http://localhost/url/{$code}\">http://localhost/url/{$code}</a>";
	} else {
		$_SESSION['feedback'] = "Oops! Invalid URL";
	}
}
header("Location: index.php")
?>