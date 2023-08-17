<?php 

	require "../app/functions/authFunctions.php";

	ifSession();
	isLoged($_SESSION['id']);

	require "../app/vars.php";
	require "../app/cdn.php";

	$page_name = 'Configurações';

	require "../app/leftbar.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $page_name . ' | ' . $app_name; ?></title>
</head>
<body>

</body>
</html>