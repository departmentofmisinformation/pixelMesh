<!DOCTYPE HTML>
<html>
<head>
<title>
<?php echo $title; ?>
</title>
<?php include "head.php"; ?>
</head>
<body>
<?php 
include "header.php";
?>
<div class='container main'>
<?php 
if(isset($type)){
	include $page.".".$type; 
}else{
	include "templates/".$page.".php"; 
}

?>
</div>
<?php
include "footer.php";
include "scripts.php";
?>
</body>
</html>