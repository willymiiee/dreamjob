<?php
	require "system/connect.php";
	$_SESSION["nomor"]++;
	print_r($_SESSION);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet">
<link href="fs/css/font-awesome.css" rel="stylesheet">
<title>Tes Digital</title>

</head>
<body>
	<div class="container">
    	<div class="ctn">
			<div>Pilih Jawaban Yang Paling Sesuai Dengan Diri Kamu</div>
            <ul class="poin">
                <li class="active-page"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="question">
            	SAYA ADALAH ORANG YANG<br />
                    <div class="radio">
                        <input id="terencana" type="radio" name="yg" value="terencana">
                        <label for="terencana">Terencana</label><br />
                        <input id="spontan" type="radio" name="yg" value="spontan">
                        <label for="spontan">Spontan</label>
                    </div> 
            </div>
            <div class="nxf"><a href="page-akhir.html">NEXT <i class="fa fa-chevron-circle-right"></i></a> </div>
        </div>
    </div>
</body>
</html>
