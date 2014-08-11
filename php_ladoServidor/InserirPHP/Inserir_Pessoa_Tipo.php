
<?php
include 'conexao.php';
?>


<?php 

$pes_tipo_designacao=$_POST['pes_tipo_designacao'];



$sql = mysql_query("INSERT INTO pessoa_tipo (pes_tipo_designacao) VALUES('$pes_tipo_designacao')");
											

	
?>
