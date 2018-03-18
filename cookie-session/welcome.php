<?php
	session_start();
	if (empty($_SESSION['username'])){
		header("location:login.php");
	}  
	date_default_timezone_set('Asia/Jakarta'); 
	
?>

<!doctype html>
<html>
	<head>
		<title>Welcome</title>
		<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
	</head>
	<style>
		body{
			background-size: cover;
		}
			
		h1{
			font-size: 50px;
			vertical-align: middle;
			margin-right: 50%;
			margin-top: 20%;
			width: 100%;
			color: #DFDFDF;
			text-align: center;
			font-family: 'Concert One', cursive;
		}
	</style>
	<body>
	<?php 
			$welcome = '';
			if (date('H') < 12) {
				$welcome = 'Good morning';
			} elseif(date('H') > 11 && date('H') < 18) {
				$welcome = 'Good afternoon';
			} elseif(date('H') > 17) {
				$welcome = 'Good evening';
			}
			

			if (date("H") < 12) {
				echo '<body style="background-image:url(assets/img/morning.jpg)">';
			} else if (date('H') > 11 && date("H") < 18) {
				echo '<body style="background-image:url(assets/img/afternoon.jpg)">';
			} else if(date('H') > 17) {
				echo '<body style="background-image:url(assets/img/evening2.jpg)">';
			}
	?>
	
		<h1> <?php echo $welcome . ', ' . $_SESSION['username'];?>!<br>
		
		<?php
			function get_browser_name($user_agent){
				if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
				elseif (strpos($user_agent, 'Edge')) return 'Microsoft Edge';
				elseif (strpos($user_agent, 'Chrome')) return 'Google Chrome';
				elseif (strpos($user_agent, 'Safari')) return 'Safari';
				elseif (strpos($user_agent, 'Firefox')) return 'Mozilla Firefox';
				elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
				
				return 'Other';
			}
			
			echo "Saat ini kamu sedang menggunakan browser ".get_browser_name($_SERVER['HTTP_USER_AGENT'])."<br>";
		?>
		</h1>
	</body>
</html>