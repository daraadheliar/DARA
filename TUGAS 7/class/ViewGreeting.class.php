<!doctype html>
<html>
<head>
<meta charset="utf-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
	<title>greeting</title>
	<link rel="stylesheet" href="../../assets/css/materialize.min.css">
	<link rel="stylesheet" href="../../assets/css/animate.css">
	<link rel="stylesheet" href="../../assets/css/style.css">
	<link rel="stylesheet" href="../../assets/css/form.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Greeting</title>
</head>

<body id="greeting">	
	<div class="container">
		<div class="box-color-two wow fadeInDown center" data-wow-duration="1.5s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInDown;">
			<img class="img-circle" src=<?php echo $counter['foto']?> style="width: 300px; height: 300px;" alt="">
				<h1>Hai <?php echo $counter['namaLengkap']."!"?></h1>
				<h6 class="desribe">Terimakasih telah bergabung dengan PetAdopt! Di PetAdpot kamu tidak hanya bisa adopsi saja, tapi kamu bisa menjual hewan peliharaanmu loh! Eits, pastikan kembali data diri kamu ya! Kamu bisa merubahnya di akun profil kamu! Happy adopting and selling!</h6><br>
				<table class="table" method="post">
					<thead>
						<tr>
						<th scope="col">Email</th>
						<th scope="col">Nama Lengkap</th>
						<th scope="col">Fakultas</th>
						<th scope="col">No. Tlp</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">Provinsi</th>
						<th scope="col">Alamat Lengkap</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<td scope="row"><?php echo $counter['email']?></td>
						<td><?php echo $counter['namaLengkap']?></td>
						<td><?php echo $counter['fakultas']?></td>
						<td><?php echo $counter['noTlp']?></td>
						<td><?php echo $counter['gender']?></td>
						<td><?php echo $counter['Provinsi']?></td>
						<td><?php echo $counter['alamat']?></td>
						</tr>
					</tbody>
				</table>
				<br>
				<a class="waves-effect waves-light btn">Selanjutnya</a>
		</div>
	</div>
</body>

<script src="../../assets/js/docs.min.js"></script>

</html>
