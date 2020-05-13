<!DOCTYPE html>
<html>
<body>
<form method="post" action="index.php">			
	<input type="text" name="bil1" class="bil"  placeholder="Masukkan kata">
	<input type="submit" name="hitung" placeholder="hasil" class="tombol">									
</form>

<?php
if(isset($_POST['hitung'])){
	$str = $_POST['bil1'];

$str1 = crc32($_POST['bil1']);
printf("%u\n",$str1);
}
?>  

</body>
</html>
