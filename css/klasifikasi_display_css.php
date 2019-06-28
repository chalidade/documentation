<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Dokumentasi Chalid</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="is-preload" style="color:#000">

		<!-- Header -->
			<header id="header" style="background-size: auto, 290%;">
				<div class="inner">
					<a href="#" class="image avatar"><img src="../images/avatar.jpg" alt="" /></a>
					<h1><strong>I am Chalid</strong><br> Web Developer
					CV Tuna Asmara<br />
					</h1>
				</div>
			</header>

		<!-- Main -->
			<div id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
							<h2 style="color:#000">Klasifikasi Tampilan Dengan CSS</h2>
						</header>
						<p>Saat kita melakukan pemrograman front end dengan native programming menggunakan basic CSS. Salah satu cara yang dapat dilakukan adalah mendeklarasikan / men-define fungsi pada css untuk klasifikasi layar. Kita dapat mengatur ketika ukuran layar sekian apa yang akan ditampilkan dan seterusnya.</p>

            <h3>Algoritma Program</h3>
            <p>
              <ul>
                <li> Buat sebuah <i>class</i> pada CSS yang mendefinisikan perangkat</li>
                <li> Define ukuran perangkat dengan logika, jika ukuran maksimal melebihi batas yang ditentukan maka <i>display:none</i> dan yang lainya <i>display:block</i>. maksudnya, kita sembunyikan konten / div jika ukuran layar sama dengan yang ditentukan.</li>
                <li>Lalu buat program html dan buat satu div dengan menyisipkan <i>class</i>, misal <i>class="is-mobile"</i> dan satu div dengan <i>class="is-default"</i></li>
                <li>Metode ini digunakan untuk menyembunyikan suatu elemen dan menampilkan elemen lainya sesuai dengan kondisi layar yang di define.</li>
              </ul>
            </p>

            <h3>Implementasi Program</h3>
            <p>Berikut adalah code program untuk HTML-nya : </p>
            <textarea name="name" rows="11" cols="100%">
              <div class="is-mobile">
                  <div class="im-a-post">some content</div>
                  <div class="im-a-post">some content</div>
                  <div class="im-a-post">some content</div>
              </div>
              <div class="is-default">
                  <div class="im-a-post">some content</div>
                  <div class="im-a-post">some content</div>
                  <div class="im-a-post">some content</div>
              </div>
            </textarea>
            <p>Seperti yang terlihat pada baris kode diatas, menunjukan ada dua class yang kita buat. class pertama dengan nama <i>is-mobile</i> dan class kedua dengan nama <i>is-default</i> dimana class <i> is-mobile </i> dipakai untuk menunjukkan jika tampilan mobile maka yang ditampilkan adalah div dengan class <i>is-mobile</i> dan div dengan class <i>is-default</i> disembunyikan. begitu pula sebaliknya</p>
            <p>Berikut adalah code program untuk CSS-nya : </p>
            <textarea name="name" rows="10" cols="80" style="height:370px">
              .is-mobile {
                  display: none;
              }
              @media (max-width: 480px) {
                  .is-default {
                      display: none;
                  }
                  .is-mobile {
                      display: block;
                  }
              }
            </textarea>
            <p>Seperti yang terlihat pada baris kode diatas, menunjukkan bahwa ketika ukuran layar kurang dari 480px, maka class <i>is-mobile</i> ditampilkan dan class <i>is-default</i> disembunyikan. Anda bisa mengatur sendiri</p>
					</section>

				<!-- Two -->
					<section id="two">
            <h2>Referensi</h2>
            <p>Source from : <a href="https://stackoverflow.com/questions/20855806/php-with-screen-width-condition?lq=1">Stack Overflow</a></p>
					</section>
			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Tuna Asmara</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.poptrox.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>
