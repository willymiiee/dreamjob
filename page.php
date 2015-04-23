<?php
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
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<title>Tes Kepribadian Kompas Kareir Fair</title>

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
			<form id="kuis" action="result.php" method="post">
<?php } ?>
            <div class="question">
			<?php
				if($_SESSION["nomor"] == 1) echo "SAYA ADALAH ORANG YANG";
				else if($_SESSION["nomor"] == 2) echo "SAYA TERBIASA";
				else if($_SESSION["nomor"] == 3) echo "SAYA SUKA";
				else if($_SESSION["nomor"] == 4) echo "SAYA ADALAH ORANG YANG MENYUKAI";
				else if($_SESSION["nomor"] == 5) echo "SAYA BERORIENTASI PADA";
				else if($_SESSION["nomor"] == 6) echo "SAYA ADALAH ORANG YANG";
				else if($_SESSION["nomor"] == 7) echo "SAYA ADALAH ORANG YANG";
				else if($_SESSION["nomor"] == 8) echo "SAYA ADALAH ORANG YANG";
				else if($_SESSION["nomor"] == 9) echo "SAYA ADALAH ORANG YANG";
				else if($_SESSION["nomor"] == 10) echo "SAYA ADALAH ORANG YANG";
				else if($_SESSION["nomor"] == 11) echo "SAYA ADALAH ORANG YANG";
				else if($_SESSION["nomor"] == 12) echo "SAYA ADALAH ORANG YANG";
			?>
				<br />
                    <div class="radio">
					<?php if($_SESSION["nomor"] == 1){ ?>
                        <input id="1" type="radio" name="answer" value="E" required>
                        <label for="1">Mempunyai banyak teman</label><br />
                        <input id="2" type="radio" name="answer" value="I" required>
                        <label for="2">Hanya berteman dengan orang-orang tertentu</label><br />
					<?php
						}else if($_SESSION["nomor"] == 2){ ?>
                        <input id="3" type="radio" name="answer" value="E" required>
                        <label for="3">Mengemukakan pendapat</label><br />
                        <input id="4" type="radio" name="answer" value="I" required>
                        <label for="4">Menyimpan pemikiran saya</label><br />
					<?php
						}else if($_SESSION["nomor"] == 3){ ?>
                        <input id="5" type="radio" name="answer" value="E" required>
                        <label for="5">Mencari kegiatan</label><br />
                        <input id="6" type="radio" name="answer" value="I" required>
                        <label for="6">Mencari waktu yang tenang</label><br />
					<?php
						}else if($_SESSION["nomor"] == 4){ ?>
                        <input id="7" type="radio" name="answer" value="S" required>
                        <label for="7">Rutinitas</label><br />
                        <input id="8" type="radio" name="answer" value="N" required>
                        <label for="8">Kegiatan yang variatif</label><br />
					<?php
						}else if($_SESSION["nomor"] == 5){ ?>
                        <input id="9" type="radio" name="answer" value="S" required>
                        <label for="9">Kenyataan saat ini</label><br />
                        <input id="10" type="radio" name="answer" value="N" required>
                        <label for="10">Apa yang akan terjadi diwaktu mendatang</label><br />
					<?php
						}else if($_SESSION["nomor"] == 6){ ?>
                        <input id="11" type="radio" name="answer" value="S" required>
                        <label for="11">Konsisten</label><br />
                        <input id="12" type="radio" name="answer" value="N" required>
                        <label for="12">Mudah berubah, tergantung situasi</label><br />
					<?php
						}else if($_SESSION["nomor"] == 7){ ?>
                        <input id="13" type="radio" name="answer" value="T" required>
                        <label for="13">Logis dan realistis</label><br />
                        <input id="14" type="radio" name="answer" value="F" required>
                        <label for="14">Mudah terbawa suasana</label><br />
					<?php
						}else if($_SESSION["nomor"] == 8){ ?>
                        <input id="15" type="radio" name="answer" value="T" required>
                        <label for="15">Adil</label><br />
                        <input id="16" type="radio" name="answer" value="F" required>
                        <label for="16">Murah hati</label><br />
					<?php
						}else if($_SESSION["nomor"] == 9){ ?>
                        <input id="17" type="radio" name="answer" value="T" required>
                        <label for="17">Mengemukakan segala sesuatu apa adanya</label><br />
                        <input id="18" type="radio" name="answer" value="F" required>
                        <label for="18">Menyelaraskan diri dengan orang-orang disekitar saya</label><br />
					<?php
						}else if($_SESSION["nomor"] == 10){ ?>
                        <input id="19" type="radio" name="answer" value="J" required>
                        <label for="19">Tegas dalam mengambil keputusan</label><br />
                        <input id="20" type="radio" name="answer" value="P" required>
                        <label for="20">Berhati-hati dalam mengambil keputusan</label><br />
					<?php
						}else if($_SESSION["nomor"] == 11){ ?>
                        <input id="21" type="radio" name="answer" value="J" required>
                        <label for="21">Mudah mengambil keputusan</label><br />
                        <input id="22" type="radio" name="answer" value="P" required>
                        <label for="22">Terbuka dan menerima masukan</label><br />
					<?php
						}else if($_SESSION["nomor"] == 12){ ?>
                        <input id="23" type="radio" name="answer" value="J" required>
                        <label for="23">Terencana</label><br />
                        <input id="24" type="radio" name="answer" value="P" required>
                        <label for="24">Spontan</label><br />
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
			<Input id="finish" class="nxf" type="Submit" Name="hasil" Value="FINISH">
<!--            <div class="nxf"><a href="#">FINISH <i class="fa fa-chevron-circle-right"></i></a> </div> -->
<?php
	}
?>
		</form>
        </div>
    </div>
<div id="loading"><img src="images/ajax-loader.gif" alt="" /></div>
<script type="text/javascript">
	$(document).ready(function() {
		$("#loading").hide();
	});
	$( "#kuis" ).submit(function( event ) {
	  $("#loading").show();
	  var form = this;
	  event.preventDefault();
	  setTimeout(function() {
			// $.post( "result.php", $( "#kuis" ).serialize() );
			form.submit();
	  }, 8000);
	});	
</script>
</body>
</html>