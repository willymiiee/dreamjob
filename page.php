<?php
	require "system/connect.php";
	session_start();
	$_SESSION["nomor"]++;
	
	if (isset($_POST['hasil']))
		$_SESSION["jawaban"] = $_SESSION["jawaban"] . $_POST['answer'];
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
                <li <?php if($_SESSION["nomor"] == 1) { ?> class="active-page" <?php } ?>></li>
                <li <?php if($_SESSION["nomor"] == 2) { ?> class="active-page" <?php } ?>></li>
                <li <?php if($_SESSION["nomor"] == 3) { ?> class="active-page" <?php } ?>></li>
                <li <?php if($_SESSION["nomor"] == 4) { ?> class="active-page" <?php } ?>></li>
                <li <?php if($_SESSION["nomor"] == 5) { ?> class="active-page" <?php } ?>></li>
                <li <?php if($_SESSION["nomor"] == 6) { ?> class="active-page" <?php } ?>></li>
                <li <?php if($_SESSION["nomor"] == 7) { ?> class="active-page" <?php } ?>></li>
                <li <?php if($_SESSION["nomor"] == 8) { ?> class="active-page" <?php } ?>></li>
                <li <?php if($_SESSION["nomor"] == 9) { ?> class="active-page" <?php } ?>></li>
                <li <?php if($_SESSION["nomor"] == 10) { ?> class="active-page" <?php } ?>></li>
                <li <?php if($_SESSION["nomor"] == 11) { ?> class="active-page" <?php } ?>></li>
                <li <?php if($_SESSION["nomor"] == 12) { ?> class="active-page" <?php } ?>></li>
            </ul>
<?php if($_SESSION["nomor"] != 12) { ?>
			<form method="post">
<?php } else { ?>
			<form action="result.php" method="post">
<?php } ?>
            <div class="question">
<?php
	$query_question = mysql_query("SELECT id, question FROM question WHERE id = ".$_SESSION["nomor"]);
	while ($row_question = mysql_fetch_array($query_question)) {
		echo $row_question['question'];
	}
?>
				<br />
                    <div class="radio">
<?php
	$query_answer = mysql_query("SELECT id, id_question, answer, description FROM answer WHERE id_question = ".$_SESSION["nomor"]);
	while ($row_answer = mysql_fetch_array($query_answer)) {
?>
                        <input id="<?=$row_answer['id'];?>" type="radio" name="answer" value="<?=$row_answer['description'];?>" required>
                        <label for="<?=$row_answer['id'];?>"><?=$row_answer['answer'];?></label><br />
<?php
	}
?>
                    </div> 
            </div>
<?php
	if ($_SESSION['nomor'] < 12) {
?>
			<Input class="nxf" type="Submit" Name="hasil" Value="NEXT">
<!--            <div class="nxf"><a href="page.php">NEXT <i class="fa fa-chevron-circle-right"></i></a> </div> -->
<?php
	} else {
?>
			<Input class="nxf" type="Submit" Name="hasil" Value="FINISH">
<!--            <div class="nxf"><a href="#">FINISH <i class="fa fa-chevron-circle-right"></i></a> </div> -->
<?php
	}
?>
		</form>
        </div>
    </div>
</body>
</html>
