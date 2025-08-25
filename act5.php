<?php
include 'data.php';
error_reporting(0);
unlink("logsite.txt");
unlink("logusers.txt");
unlink("logapk.txt");
?>
<script type="text/javascript">
	alert("Logs Limpos / não será possivel ve-los ate que alguem faça uma ação!");
	window.location.href='index.php';
</script>