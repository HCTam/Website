<?php
	//$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	//mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);
	$Connect = pg_connect("postgres://gckgrbnccibyan:07b9b2d065a4c392562d1980f91e41896f5d5e3db160f9374b33885ba53bac27@ec2-34-232-245-127.compute-1.amazonaws.com:5432/d74ve83617bgj3");
?>