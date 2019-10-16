,<?php $siteadi = "siteadi.com"; ?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<title>plaka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">Plaka</h1>
				<div class="plaka-container position-relative">
					<div class="plaka-ic">
						<div class="site-adres">https://<?php echo $siteadi; ?></div>
						<div class="plaka-sol">
							<div class="logo-holder">
								<img src="img/car-png.png">
							</div>
							<h2>TR</h2>
						</div>
						<div class="plaka-yazi-holder">
							<h3>34 PLK 0001</h3>
						</div>
					</div>
					<div class="plaka-footer">
						<h4 class="center">Yazı Alanı</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-5 plaka-ayarlari">
		<div class="row">
			<div class="col-3">
				<h5>Araç Plaka Yazısı</h5>
				<input type="text" name="plaka-ic-degis" placeholder="34 PLK 0001" class="w-100">
			</div>
			<div class="col-3">
				<h5>Plakalık Yazısı</h5>
				<input type="text" name="plakalik-degis" placeholder="YAZI" class="w-100">
			</div>
			<div class="col-3">
				<h5>Yazı Fontu</h5>
				<select name="plaka-font-degis" placeholder="YAZI FONTU" class="w-100">
					<option value="loew-extrabold">Loew</option>
					<option value="ethnocentric">Ethnocentric</option>
				</select>
			</div>
			<div class="col-3">
				<h5>Yazı Rengi</h5>
				<select name="plaka-renk-degis" placeholder="YAZI RENGİ" class="w-100">
					<option value="#FFFFFF"></option>
					<option value="#212529"></option>
					<option value="rgb(233, 30, 99)"></option>
					<option value="rgb(244, 67, 54)"></option>
					<option value="rgb(233, 30, 99)"></option>
					<option value="rgb(156, 39, 176)"></option>
					<option value="rgb(103, 58, 183)"></option>
					<option value="rgb(63, 81, 181)"></option>
					<option value="rgb(33, 150, 243)"></option>
					<option value="rgb(3, 169, 244)"></option>
					<option value="rgb(0, 188, 212)"></option>
					<option value="rgb(0, 150, 136)"></option>
					<option value="rgb(76, 175, 80)"></option>
					<option value="rgb(139, 195, 74)"></option>
					<option value="rgb(205, 220, 57)"></option>
					<option value="rgb(255, 235, 59)"></option>
					<option value="rgb(255, 193, 7)"></option>
					<option value="rgb(255, 152, 0)"></option>
					<option value="rgb(255, 87, 34)"></option>
					<option value="rgb(121, 85, 72)"></option>
					<option value="rgb(152, 99, 80)"></option>
					<option value="rgb(96, 125, 139)"></option>
					<option value="rgb(192, 192, 192)"></option>
					<option value="rgb(128, 128, 128)"></option>
					<option value="rgb(0, 0, 0)"></option>
				</select>
			</div>
		</div>
	</div>




<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>