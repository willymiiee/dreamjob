<?php
	session_start();
	if (isset($_POST['hasil']))
		$_SESSION["jawaban"] = $_SESSION["jawaban"] . $_POST['answer'];
	else {
		header("Location: index.php");
		die();
	}

	if (substr_count($_SESSION["jawaban"], 'E') >= 2)
		$sifat = "E";
	else if (substr_count($_SESSION["jawaban"], 'I') >= 2)
		$sifat = "I";
	if (substr_count($_SESSION["jawaban"], 'S') >= 2)
		$sifat = $sifat . "S";
	else if (substr_count($_SESSION["jawaban"], 'N') >= 2)
		$sifat = $sifat . "N";
	if (substr_count($_SESSION["jawaban"], 'F') >= 2)
		$sifat = $sifat . "F";
	else if (substr_count($_SESSION["jawaban"], 'T') >= 2)
		$sifat = $sifat . "T";
	if (substr_count($_SESSION["jawaban"], 'P') >= 2)
		$sifat = $sifat . "P";
	else if (substr_count($_SESSION["jawaban"], 'J') >= 2)
		$sifat = $sifat . "J";	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta property="og:type" content="kompaskariertest:hasil">
<meta property="og:title" content="Tes Karir di Kompas Karier Fair" />
<meta property="og:description" content="ngene ya" />
<meta property="og:url" content="http://www.kompaskarier.com/kkf" />
<meta property="og:image" content="http://www.kompaskarier.com/assets/kkf/2014/images/kkf-logo.gif" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet">
<link href="fs/css/font-awesome.css" rel="stylesheet">
<title>Tes Digital</title>

</head>
<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '577324325704291',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
	<div class="container">
		<!-- ISTJ -->
<?php
	if ($sifat == "ISTJ") {
?>
		<div class="ctn-result1">
			<div class="tp">Tipe Kepribadianmu</div>
            <div class="jdl-resul">ISTJ (Bertanggungjawab)</div>
            
            <ul class="desc-resul">
            	<li>Serius, tenang, stabil & damai.</li>
                <li>Senang pada fakta, logis, obyektif, praktis & realistis.</li>
                <li>Task oriented, tekun, teratur, menepati janji, dapat diandalkan & bertanggung jawab.</li>
                <li>Pendengar yang baik, setia, hanya mau berbagi dengan orang dekat.</li>
                <li>Memegang aturan, standar & prosedur dengan teguh.</li>
            </ul>
            
            <div class="jdl-resul">Saran Profesi</div>
            <div class="desc-resul">Bidang Manajemen, Polisi, Intelijen, Hakim, Pengacara, Dokter, Akuntan (Staf Keuangan), Programmer atau yang berhubungan dengan IT, System Analys, Pemimpin Militer</div>
        </div>
<?php
	}
	else if ($sifat == "ISFJ") {
?>
		<!-- ISFJ -->
		<div class="ctn-result1">
			<div class="tp">Tipe Kepribadianmu</div>
            <div class="jdl-resul">ISFJ (Setia)</div>
            
            <ul class="desc-resul">
				<li>Penuh pertimbangan, hati-hati, teliti dan akurat.</li>
				<li>Serius, tenang, stabil namun sensitif.</li>
				<li>Ramah, perhatian pada perasaan & kebutuhan orang lain, setia, kooperatif, pendengar yang baik.</li>
				<li>Punya kemampuan mengorganisasi, detail, teliti, sangat bertanggungjawab & bisa diandalkan.</li>
            </ul>
            
            <div class="jdl-resul">Saran Profesi</div>
            <div class="desc-resul">Architect, Interior Designer, Perawat, Administratif, Designer, Child Care, Konselor, Back Office Manager, Penjaga Toko / Perpustakaan, Dunia Perhotelan.</div>
        </div>
<?php
	}
	else if ($sifat == "ISTP") {
?>
		<!-- ISTP -->
		<div class="ctn-result1">
			<div class="tp">Tipe Kepribadianmu</div>
            <div class="jdl-resul">ISTP (Pragmatis)</div>
            
            <ul class="desc-resul">
				<li>Tenang, pendiam, cenderung kaku, dingin, hati-hati, penuh pertimbangan.</li>
				<li>Logis, rasional, kritis, obyektif, mampu mengesampingkan perasaan.</li>
				<li>Mampu menghadapi perubahan mendadak dengan cepat dan tenang.</li>
				<li>Percaya diri, tegas dan mampu menghadapi perbedaan maupun kritik.</li>
				<li>Mampu menganalisa, mengorganisir, & mendelegasikan.</li>
				<li>Problem solver yang baik terutama untuk masalah teknis & keadaan mendadak.</li>
            </ul>
            
            <div class="jdl-resul">Saran Profesi</div>
            <div class="desc-resul">Polisi, Ahli Forensik, Programmer, Ahli Komputer, System Analyst, Teknisi, Insinyur, Mekanik, Pilot, Atlit, Entrepreneur</div>
        </div>
<?php
	}
	else if ($sifat == "ISFP") {
?>
		<!-- ISFP -->
		<div class="ctn-result1">
			<div class="tp">Tipe Kepribadianmu</div>
            <div class="jdl-resul">ISFP (Artistik)</div>
            
            <ul class="desc-resul">
				<li>Berpikiran simpel & praktis, fleksibel, sensitif, ramah, tidak menonjolkan diri, rendah hati pada kemampuannya.</li>
				<li>Menghindari konflik, tidak memaksakan pendapat atau nilai-nilainya pada orang lain.</li>
				<li>Biasanya tidak mau memimpin tetapi menjadi pengikut dan pelaksana yang setia.</li>
				<li>Seringkali santai menyelesaikan sesuatu, karena sangat menikmati apa yang terjadi saat ini.</li>
				<li>Menunjukkan perhatian lebih banyak melalui tindakan dibandingkan kata-kata.</li>
            </ul>
            
            <div class="jdl-resul">Saran Profesi</div>
            <div class="desc-resul">Seniman, Designer, Pekerja Sosial, Konselor, Psikolog, Guru, Aktor, Bidang Hospitality</div>
        </div>
<?php
	}
	else if ($sifat == "INFJ") {
?>
		<!-- INFJ -->
		<div class="ctn-result1">
			<div class="tp">Tipe Kepribadianmu</div>
            <div class="jdl-resul">INFJ (Reflektif)</div>
            
            <ul class="desc-resul">
				<li>Perhatian, empati, sensitif & berkomitmen terhadap sebuah hubungan.</li>
				<li>Sukses karena ketekunan, originalitas dan keinginan kuat untuk melakukan apa saja yang diperlukan termasuk memberikan yg terbaik dalam pekerjaan.</li>
				<li>Idealis, perfeksionis, memegang teguh prinsip.</li>
				<li>Visioner, penuh ide, kreatif, suka merenung dan inspiring.</li>
				<li>Biasanya diikuti dan dihormati karena kejelasan visi serta dedikasi pada hal-hal baik.</li>
            </ul>
            
            <div class="jdl-resul">Saran Profesi</div>
            <div class="desc-resul">Pengajar, Psikolog, Dokter, Konselor, Pekerja Sosial, Fotografer, Seniman, Designer, Child Care.</div>
        </div>
<?php
	}
	else if ($sifat == "INTJ") {
?>
		<!-- INTJ -->
		<div class="ctn-result1">
			<div class="tp">Tipe Kepribadianmu</div>
            <div class="jdl-resul">INTJ (Independen)</div>
            
            <ul class="desc-resul">
				<li>Visioner, punya perencanaan praktis, & biasanya memiliki ide-ide original serta dorongan kuat untuk mencapainya.</li>
				<li>Mandiri dan percaya diri.</li>
				<li>Punya kemampuan analisa yang bagus serta menyederhanakan sesuatu yang rumit dan abstrak menjadi sesuatu yang praktis, mudah difahami & dipraktekkan.</li>
				<li>Skeptis, kritis, logis, menentukan (determinatif) dan kadang keras kepala.</li>
				<li>Punya keinginan untuk berkembang serta selalu ingin lebih maju dari orang lain.</li>
				<li>Kritik & konflik tidak menjadi masalah berarti.</li>
            </ul>
            
            <div class="jdl-resul">Saran Profesi</div>
            <div class="desc-resul">Peneliti, Ilmuwan, Insinyur, Teknisi, Pengajar, Profesor, Dokter, Research & Development, Business Analyst, System Analyst, Pengacara, Hakim, Programmers, Posisi Strategis dalam organisasi.</div>
        </div>
<?php
	}
	else if ($sifat == "INFP") {
?>
		<!-- INFP -->
		<div class="ctn-result1">
			<div class="tp">Tipe Kepribadianmu</div>
            <div class="jdl-resul">INFP (Idealis)</div>
            
            <ul class="desc-resul">
				<li>Sangat perhatian dan peka dengan perasaan orang lain.</li>
				<li>Penuh dengan antusiasme dan kesetiaan, tapi biasanya hanya untuk orang dekat.</li>
				<li>Peduli pada banyak hal. Cenderung mengambil terlalu banyak dan menyelesaikan sebagian.</li>
				<li>Cenderung idealis dan perfeksionis.</li>
				<li>Berpikir win-win solution, mempercayai dan mengoptimalkan orang lain.</li>
            </ul>
            
            <div class="jdl-resul">Saran Profesi</div>
            <div class="desc-resul">Penulis, Sastrawan, Konselor, Psikolog, Pengajar, Seniman, Rohaniawan, Bidang Hospitality</div>
        </div>
<?php
	}
	else if ($sifat == "INTP") {
?>
		<!-- INTP -->
		<div class="ctn-result1">
			<div class="tp">Tipe Kepribadianmu</div>
            <div class="jdl-resul">INTP (Konseptual)</div>
            
            <ul class="desc-resul">
				<li>Sangat menghargai intelektualitas dan pengetahuan. Menikmati hal-hal teoritis dan ilmiah. Senang memecahkan masalah dengan logika dan analisa.</li>
				<li>Diam dan menahan diri. Lebih suka bekerja sendiri.</li>
				<li>Cenderung kritis, skeptis, mudah curiga dan pesimis.</li>
				<li>Tidak suka memimpin dan bisa menjadi pengikut yang tidak banyak menuntut.</li>
				<li>Cenderung memiliki minat yang jelas. Membutuhkan karir dimana minatnya bisa berkembang dan bermanfaat. Jika menemukan sesuatu yang menarik minatnya, ia akan sangat serius dan antusias menekuninya.</li>
            </ul>
            
            <div class="jdl-resul">Saran Profesi</div>
            <div class="desc-resul">Ilmuwan, Fotografer, Programmer, Ahli komputer, System Analyst, Penulis Buku Teknis, Ahli Forensik, Jaksa, Pengacara, Teknisi</div>
        </div>
<?php
	}
	else if ($sifat == "ESTP") {
?>
		<!-- ESTP -->
		<div class="ctn-result1">
			<div class="tp">Tipe Kepribadianmu</div>
            <div class="jdl-resul">ESTP (Spontan)</div>
            
            <ul class="desc-resul">
				<li>Spontan, Aktif, Enerjik, Cekatan, Cepat, Sigap, Antusias, Fun dan penuh variasi.</li>
				<li>Komunikator, asertif, to the point, ceplas-ceplos, berkarisma, punya interpersonal skill yang baik.</li>
				<li>Baik dalam pemecahan masalah langsung di tempat. Mampu menghadapi masalah, konflik dan kritik. Tidak khawatir, menikmati apapun yang terjadi.</li>
				<li>Cenderung untuk menyukai sesuatu yang mekanistis, kegiatan bersama dan olahraga.</li>
				<li>Mudah beradaptasi, toleran, pada umumnya konservatif tentang nilai-nilai. Tidak suka penjelasan terlalu panjang. Paling baik dalam hal-hal nyata yang dapat dilakukan.</li>
            </ul>
            
            <div class="jdl-resul">Saran Profesi</div>
            <div class="desc-resul">Marketing, Sales, Polisi, Entrepreneur, Pialang Saham, Technical Support</div>
        </div>
<?php
	}
	else if ($sifat == "ESFP") {
?>
		<!-- ESFP -->
		<div class="ctn-result1">
			<div class="tp">Tipe Kepribadianmu</div>
            <div class="jdl-resul">ESFP (Murah Hati)</div>
            
            <ul class="desc-resul">
				<li>Outgoing, easygoing, mudah berteman, bersahabat, sangat sosial, ramah, hangat, & menyenangkan.</li>
				<li>Optimis, ceria, antusias, fun, menghibur, suka menjadi perhatian.</li>
				<li>Punya interpersonal skill yang baik, murah hati, mudah simpatik dan mengenali perasaan orang lain. Menghindari konflik dan menjaga keharmonisan suatu hubungan.</li>
				<li>Mengetahui apa yang terjadi di sekelilingnya dan ikut serta dalam kegiatan tersebut.</li>
				<li>Sangat baik dalam keadaan yang membutuhkan common sense, tindakan cepat dan ketrampilan praktis</li>
            </ul>
            
            <div class="jdl-resul">Saran Profesi</div>
            <div class="desc-resul">Entertainer, Seniman, Marketing, Konselor, Designer, Tour Guide, Bidang Anak-anak, Bidang Hospitality</div>
        </div>
<?php
	}
	else if ($sifat == "ENFP") {
?>
		<!-- ENFP -->
		<div class="ctn-result1">
			<div class="tp">Tipe Kepribadianmu</div>
            <div class="jdl-resul">ENFP (Optimis)</div>
            
            <ul class="desc-resul">
				<li>Ramah, hangat, enerjik, optimis, antusias, semangat tinggi, fun.</li>
				<li>Imaginatif, penuh ide, kreatif, inovatif.</li>
				<li>Mampu beradaptasi dengan beragam situasi dan perubahan.</li>
				<li>Pandai berkomunikasi, senang bersosialisasi & membawa suasana positif.</li>
				<li>Mudah membaca perasaan dan kebutuhan orang lain.</li>
            </ul>
            
            <div class="jdl-resul">Saran Profesi</div>
            <div class="desc-resul">Konselor, Psikolog, Entertainer, Pengajar, Motivator, Presenter, Reporter, MC, Seniman, Hospitality</div>
        </div>
<?php
	}
	else if ($sifat == "ENTP") {
?>
		<!-- ENTP -->
		<div class="ctn-result1">
			<div class="tp">Tipe Kepribadianmu</div>
            <div class="jdl-resul">ENTP (Inovatif – Kreatif)</div>
            
            <ul class="desc-resul">
				<li>Gesit, kreatif, inovatif, cerdik, logis, baik dalam banyak hal.</li>
				<li>Banyak bicara dan punya kemampuan debat yang baik. Bisa berargumentasi untuk senang-senang saja tanpa merasa bersalah.</li>
				<li>Fleksibel. Punya banyak cara untuk memecahkan masalah dan tantangan.</li>
				<li>Kurang konsisten. Cenderung untuk melakukan hal baru yang menarik hati setelah melakukan sesuatu yang lain.</li>
				<li>Punya keinginan kuat untuk mengembangkan diri.</li>
            </ul>
            
            <div class="jdl-resul">Saran Profesi</div>
            <div class="desc-resul">Pengacara, Psikolog, Konsultan, Ilmuwan, Aktor,Marketing, Programmer, Fotografer</div>
        </div>
<?php
	}
	else if ($sifat == "ESTJ") {
?>
		<!-- ESTJ -->
		<div class="ctn-result1">
			<div class="tp">Tipe Kepribadianmu</div>
            <div class="jdl-resul">ESTJ (Konservatif – Disiplin)</div>
            
            <ul class="desc-resul">
				<li>Praktis, realistis, berpegang pada fakta, dengan dorongan alamiah untuk bisnis dan mekanistis.</li>
				<li>Sangat sistematis, procedural dan terencana.</li>
				<li>Disiplin, on time dan pekerja keras.</li>
				<li>Konservatif dan cenderung kaku.</li>
				<li>Tidak tertarik pada subject yang tidak berguna baginya, tapi dapat menyesuaikan diri jika diperlukan.</li>
				<li>Senang mengorganisir sesuatu. Bisa menjadi administrator yang baik jika mereka ingat untuk memperhatikan perasaan dan perspektif orang lain.</li>
            </ul>
            
            <div class="jdl-resul">Saran Profesi</div>
            <div class="desc-resul">Militer, Manajer, Polisi, Hakim, Pengacara, Guru, Sales, Auditor, Akuntan, System Analyst</div>
        </div>
<?php
	}
	else if ($sifat == "ESFJ") {
?>
		<!-- ESFJ -->
		<div class="ctn-result1">
			<div class="tp">Tipe Kepribadianmu</div>
            <div class="jdl-resul">ESFJ (Harmonis)</div>
            
            <ul class="desc-resul">
				<li>Hangat, banyak bicara, populer, dilahirkan untuk bekerjasama, suportif dan anggota kelompok yang aktif.</li>
				<li>Membutuhkan keseimbangan dan baik dalam menciptakan harmoni.</li>
				<li>Selalu melakukan sesuatu yang manis bagi orang lain. Kerja dengan baik dalam situasi yang mendukung dan memujinya.</li>
				<li>Santai, easy going, sederhana, tidak berfikir panjang.</li>
				<li>Teliti dan rajin merawat apa yang ia miliki.</li>
            </ul>
            
            <div class="jdl-resul">Saran Profesi</div>
            <div class="desc-resul">Perencana Keuangan, Perawat, Guru, Bidang anak-anak, Konselor, Administratif, Hospitality</div>
        </div>
<?php
	}
	else if ($sifat == "ENFJ") {
?>
		<!-- ENFJ -->
		<div class="ctn-result1">
			<div class="tp">Tipe Kepribadianmu</div>
            <div class="jdl-resul">ENFJ (Meyakinkan)</div>
            
            <ul class="desc-resul">
				<li>Kreatif, imajinatif, peka, sensitive, loyal.</li>
				<li>Pada umumnya peduli pada apa kata orang atau apa yang orang lain inginkan dan cenderung melakukan sesuatu dengan memperhatikan perasaan orang lain.</li>
				<li>Pandai bergaul, meyakinkan, ramah, fun, populer, simpatik. Responsif pada kritik dan pujian.</li>
				<li>Menyukai variasi dan tantangan baru.</li>
				<li>Butuh apresiasi dan penerimaan.</li>
            </ul>
            
            <div class="jdl-resul">Saran Profesi</div>
            <div class="desc-resul">Konsultan, Psikolog, Konselor, Pengajar, Marketing, HRD, Event Coordinator, Entertainer, Penulis, Motivator</div>
        </div>
<?php
	}
	else if ($sifat == "ENTJ") {
?>
		<!-- ENTJ -->
		<div class="ctn-result1">
			<div class="tp">Tipe Kepribadianmu</div>
            <div class="jdl-resul">ENTJ (Pemimpin Alami)</div>
            
            <ul class="desc-resul">
				<li>Tegas, asertif, to the point, jujur terus terang, obyektif, kritis, & punya standard tinggi.</li>
				<li>Dominan, kuat kemauannya, perfeksionis dan kompetitif.</li>
				<li>Tangguh, disiplin, dan sangat menghargai komitmen.</li>
				<li>Cenderung menutupi perasaan dan menyembunyikan kelemahan.</li>
				<li>Berkarisma, komunikasi baik, mampu menggerakkan orang.</li>
				<li>Berbakat pemimpin.</li>
            </ul>
            
            <div class="jdl-resul">Saran Profesi</div>
            <div class="desc-resul">Entrepreneur, Pengacara, Hakim, Konsultan, Pemimpin Organisasi, Business analyst, Bidang Finansial</div>
        </div>
<?php
	}
?>
        <div class="ctn-result2">
        	RESULT
        </div>
        <div class="clearit"></div>
        
	  <div style="width:810px;">	
          <div class="ctn-share">Share Your Result:</div>
          <div class="sharefbt">
			<a href="#" onclick="window.open('http://www.facebook.com/sharer.php?s=100&p[title]=tes_karir&p[summary]=ngene_deskripsine&p[url]=muincik', 'newwindow', 'width=640, height=300');">
				<img src="images/ico_fb.gif" />
			</a>
		  </div>
		  <div class="sharefbt"><a href="https://twitter.com/intent/tweet?button_hashtag=KompasKarierFair&text=Aku%20bisa%20tahu%20sifat%20kepribadianku%20dan%20profesi%20yang%20cocok%20di%20Kompas%20Karier%20Fair.%20Bagaimana%20dengan%20kamu%3F"><img src="images/ico_tw.gif" /></a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>  </div>
          <div class="balik"><a href="index.php">Back To Start  <i class="fa fa-chevron-circle-right"></i></a> </div>
          <div class="clearit"></div>
      </div>        
    </div>
</body>
</html>