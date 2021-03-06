﻿<!doctype html>
<html>
<head>
	<meta charset="utf-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
	<title>Form</title>
	<link rel="stylesheet" href="assets/css/materialize.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/form.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="change-if-small">
	<div class="container">
  		<div class="row">
  				<div class="col s6 m4" id="col-no-padding">
					<div class="bg-left">
						<div class="puppy wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInLeft;">
							<img src="assets/image/59ea06ea199670c7c6c62e86e017456a.png" id="puppy" alt class="img-responsive">
						</div>
					</div>
				</div>
				<div class="col s6 m4" id="bg-small">
				<h3 class="text-center wow fadeInUp" id="head-caption" data-wow-duration="1.5s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInUp;">PetAdopt</h3>
				<p class="wow fadeInLeft" id="help-caption" data-wow-duration="1.5s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInLeft;">Buat profil Anda, cari hewan peliharaan yang Anda inginkan, pelajari tips perawatan hewan peliharaan yang terbaik, dan bantu promosikan PetAdopt ya!</p>

				<div class="box-form wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInLeft;">

					<form action="Greeting.php" method="post"  enctype="multipart/form-data" >
					  <input placeholder=" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email" id="emailAddress" class="empty" type="email" value="" name="email" required="">
					  <input placeholder=" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Lengkap" id="iconified" class="empty" type="text" value="" name="namaLengkap" maxlength="16" required="">
					  <input placeholder=" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No. Tlp" id="iconified" class="empty" type="text" value="" name="noTlp" maxlength="20" required="">	
						<p>
						  <input name="gender" type="radio" id="test1" name="gender" value="Laki-Laki"/>
						  <label for="test1">Laki-Laki</label>
						</p>
						<p>
						  <input name="gender" type="radio" id="test2" value="Perempuan"/>
						  <label for="test2">Perempuan</label>
						</p>
					  <select name="Provinsi" id="">
						<option value="-">Provinsi</option>
						<option value="DKI Jakarta">DKI Jakarta</option>
						<option value="Jawa Barat">Jawa Barat</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Tengah">Jawa Tengah</option>
						<option value="Banten">Banten</option>
						<option value="Bali">Bali</option>
						<option value="Bangka Belitung">Bangka Belitung</option>
						<option value="DI Yogyakarta">DI Yogyakarta</option>
						<option value="Gorontalo">Gorontalo</option>
						<option value="Jambi">Jambi</option>
						<option value="Kalimantan Barat">Kalimantan Barat</option>
						<option value="Kalimantan Selatan">Kalimantan Selatan</option>
						<option value="Kalimantan Tengah">Kalimantan Tengah</option>
						<option value="Kalimantan Timur">Kalimantan Timur</option>
						<option value="Kalimantan Utara">Kalimantan Utara</option>
						<option value="Kepulauan Riau">Kepulauan Riau</option>
						<option value="Lampung">Lampung</option>
						<option value="Maluku">Maluku</option>
						<option value="Maluku Utara">Maluku Utara</option>
						<option value="NAD">Nangroe Aceh Darussalam (NAD)</option>
						<option value="NTB">Nusa Tenggara Barat (NTB)</option>
						<option value="NTT">Nusa Tenggara Timur (NTT)</option>
						<option value="Papua">Papua</option>
						<option value="Papua Barat">Papua Barat</option>
						<option value="Riau">Riau</option>
						<option value="Sulawesi Barat">Sulawesi Barat</option>
						<option value="Sulawesi Selatan">Sulawesi Selatan</option>
						<option value="Sulawesi Tengah">Sulawesi Tengah</option>
						<option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
						<option value="Sulawesi Utara">Sulawesi Utara</option>
						<option value="Sumatera Barat">Sumatera Barat</option>
						<option value="Sumatera Selatan">Sumatera Selatan</option>
						<option value="Sumatera Utara">Sumatera Utara</option>
					  </select>	
					  <div class="flex">
						<textarea name="alamat" placeholder=" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Alamat Lengkap" id="iconified" class="empty" rows="1" maxlength="250" required></textarea>
					  </div>
						<div class="file-field input-field">
						  <div class="btn">
							<span>Foto</span>
							<input type="file" name="foto">
						  </div>
						  <div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						  </div>
						</div>
					  <div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
						<label class="form-check-label" for="defaultCheck1">Data yang Saya isi adalah benar</label>
					  </div>
					  <button name="submit">Submit &nbsp;&nbsp;<i class="fa fa-chevron-right"></i></button>
					</form>
				</div>
  			</div>	
		</div>
	</div>
	
</body>
<script src="assets/js/docs.min.js"></script>
<script src="assets/js/materialize.js"></script>
</html>
