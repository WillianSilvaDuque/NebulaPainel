<?php

include 'data.php';
$conn->query("UPDATE $tabela SET `UID` = NULL WHERE `Username` = '".$_GET['no']."'");
$conn->query("UPDATE $tabela SET `UID2` = NULL WHERE `Username` = '".$_GET['no']."'");$user = $_GET['no'];   

?>

<script type="text/javascript">
	alert("<?php echo "$user Foi Resetado!"?>")
	window.location.href='verusuarios.php';
</script>