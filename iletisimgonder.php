<?php

$adi = $_POST["ad"];
$soyadi = $_POST["soyad"];
$email = $_POST["mail"];
$mesaji = $_POST["mesaj"];



echo"
<table>
<tr>
	<td>AD</td>
	<td>:</td>
	<td>".$_POST["ad"]  ."</td>
</tr>
<tr>
	<td>SOYAD</td>
	<td>:</td>
	<td>".$_POST["soyad"]  ."</td>
</tr>
<tr>
	<td>EMAİL</td>
	<td>:</td>
	<td>".$_POST["mail"]  ."</td>
</tr>
<tr>
	<td>MESAJINIZ</td>
	<td>:</td>
	<td>".$_POST["mesaj"]  ."</td>
</tr>
</table>
";

?>