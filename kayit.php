<!DOCTYPE html>
<html>
	<head>
		<title>Legua Network | Kayıt</title>
		<!--TANIMLAMA-->
		<link rel="stylesheet" type="text/css" href="css/tooplate-style.css">
		<link rel="shortcut icon" type="image/x-icon" href="/img/legua-network-logo.png">
		<link rel="stylesheet" href="css/fontawesome-all.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/all.css">
		<link rel="stylesheet" type="text/css" href="css/kayit-giris.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<!--SCRIPT-->

	</head>
	<body>
		<div class="navigation">
		 	
		 	<ul>
		 		<li>
		 			<a href="/">
		 				<span class="icon"><i class="fas fa-home"></i></span>
		 				<span class="title">ANASAYFA</span>
		 			</a>
		 		</li>
		 		<li>
		 			<a href="market">
		 				<span class="icon"><i class="fas fa-store"></i></span>
		 				<span class="title">MARKET</span>
		 			</a>
		 		</li>
		 		<li>
		 			<a href="https://discord.gg/33dbBEFWfk">
		 				<span class="icon"><i class="fab fa-discord"></i></span>
		 				<span class="title">DİSCORD</span>
		 			</a>
		 		</li>
		 		<li>
		 			<a href="oyna">
		 				<span class="icon"><i class="fas fa-download"></i></span>
		 				<span class="title">OYNA</span>
		 			</a>
		 		</li>
		 		<li>
		 			<a href="destek-talebi">
		 				<span class="icon"><i class="fas fa-comment-dots"></i></span>
		 				<span class="title">DESTEK</span>
		 			</a>
		 		</li>
		 		<li>
		 			<a href="kayit">
		 				<span class="icon"><i class="fas fa-user-plus"></i></span>
		 				<span class="title">KAYIT</span>
		 			</a>
		 		</li>
		 		<li>
		 			<a href="/giris">
		 				<span class="icon"><i class="fas fa-sign-in-alt"></i></span>
		 				<span class="title">GİRİŞ</span>
		 			</a>
		 		</li>
		 		<li>
		 			<a href="profil">
		 				<span class="icon"><i class="fas fa-user"></i></span>
		 				<span class="title">Profil</span>
		 			</a>
		 		</li>
		 		<li>
		 			<a href="bilgiler">
		 				<span class="icon"><i class="fas fa-user"></i></span>
		 				<span class="title">Bilgiler</span>
		 			</a>
		 		</li>
		 		
		 	</ul>
		 	
		 </div>

		<form class="xasw" action="/anasayfa" method="post">
			<h1>Kayıt Ol</h1>
			<input type="text" name="nick" placeholder="Kullanıcı Adı" required>
			<input type="email" name="mail" placeholder="E-Posta" required>
			<input type="password" name="pass" placeholder="Şifre" required>
			<input type="password" name="passwordRe" placeholder="Şifreni Onayla" required>
			<input type="submit" name="" value="Kayıt Ol" required>
			<div style="color:white; font-size: 20px; text-decoration: none; list-style: none; font-family: sans-serif;">
				Zaten Hesabın Varmı? 
				<a href="/giris">Giriş Yap</a>
			</div>
		</form>
	</body>
</html>