<html>
<head>
<meta http-equiv="refresh" content="20">
<?PHP
$parent = $_GET['parent'];
$device = $_GET['device'];
$ip = $_GET['ip'];
?>
<title>
Smart Device Controls
</title>
<style>
body
{
font-family:courier,serif
}
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#status td.on_off:contains('false')").css('background-color','#ff0000');
	$("#status td.on_off:contains('true')").css('background-color','#00ff00');
});
</script>
</head>
<body>
<Center>

<table id="status" cellpadding="4" cellspacing="4" border="1">
<tr><td colspan="2"><center><b>Smart Controls for <?PHP echo $device; ?></td></tr>
<tr><td><b>POWER ON</td><td><b>POWEROFF</td></tr>
<?PHP
$db_handle = mysqli_connect('192.168.2.75', 'kodi', 'kodi');
$db_found = mysqli_select_db($db_handle, 'status');
if ($db_found) 
{
$SQL = "select * from smartcontrols where parent = '" . $parent . "'"	;
$result = mysqli_query($db_handle, $SQL);
while ($db_field = mysqli_fetch_assoc($result))
{
	$poweron = $db_field['poweron'];
	$poweroff = $db_field['poweroff'];
	
	print "<tr><td><a href='" . $poweron . "'>ON</a></td><td><a href='" . $poweroff . "'>OFF</a></td></tr>";
}
mysqli_close($db_handle);
	
}

?>