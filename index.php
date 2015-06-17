<?php 
//error_reporting(0);
if (isset($_GET['page'])) { $currentPage = $_GET['page']; }else { $currentPage = "encrypt"; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Security 2</title>
	<link rel="stylesheet" href="styles/main.css">
	<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/aes.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="functions/main.js"></script>
</head>
<body>
	<div class="container">
		<a href="?page=encrypt" <?php if ($currentPage == "encrypt") { echo 'class="active"'; } ?>>Sla een bericht op</a>
		-
		<a href="?page=decrypt" <?php if ($currentPage == "decrypt") { echo 'class="active"'; } ?>>Bekijk een bericht</a>

		<?php 
			if (!isset($_GET['page']) || $_GET['page'] == "encrypt") { 
				include("encrypt.php");
			}else {
				include("decrypt.php");
			}
		?>
	</div>
</body>
</html>