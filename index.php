 <?php
if(isset($_GET['door'])) {
echo "<h1>Deze website is gemaakt door Wisse Hes</h1>";
exit();
} 
if (isset($_GET['files'])) {
	if ($_GET['files'] == 'true') {
		echo "<html><head><title>files</title><style>html {min-width: 100%; min-height: 100%;}</style></head><body><iframe src='/files/filemanager.php' width='100%' height='100%'></body></html> ";
		exit();
	}
}

if (isset($_GET[happynewyear])) {
echo file_get_contents("happynewyear/form.html");
exit();
}

else {
	echo file_get_contents("home.html");
}

?>
