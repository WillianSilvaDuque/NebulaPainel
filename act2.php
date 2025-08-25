<?php
include 'data.php';
$conn->query("DELETE FROM `$tabela` WHERE `Username` = '".$_GET['no']."'");   
$user = $_GET['no'];
?>

<script type="text/javascript">
	alert("<?php echo "$user Foi Eliminado!"?>")
	window.location.href='verusuarios.php';
</script>