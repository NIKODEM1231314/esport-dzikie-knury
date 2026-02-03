<?php


?>

<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DZIKIE KNURY</title>
	<link rel="icon" type="image/png" href="logo.png">

	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/css/lightgallery-bundle.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/css/lg-video.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/css/lg-thumbnail.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
</head>

<body>

<header>
	<a href="#" class="logo">
		<img src="logo.png" alt="KNUR TEAM LOGO">
	</a>

	<nav>
		<ul>
			<li><a href="#home">Strona Główna</a></li>
			<li><a href="#about">O nas</a></li>
			<li><a href="#team">Drużyna</a></li>
			
		</ul>
	</nav>
</header>

<section id="hero" class="hero-section">
	<div class="hero-text">
		<h1>DZIKIE KNURY</h1>
		<p>NAJLEPSZA DRUŻYNA Z RZESZOWA </p>
		<a href="#team" class="btn">ZOBACZ ROSTER!</a>
	</div>
	<video autoplay muted loop playsinline>
		<source src="nagranie.mp4" type="video/mp4">
	</video>
</section>

<section id="posts" class="posts-section">
	<h2 class="section-title">OSTATNIE WIADOMOŚCI</h2>

	<div class="posts-grid">

		<article class="post-card">
			<img src="post1.jpg" alt="Post 1">
			<h3>NOWY ROSTER TEAMU DZIKIE KNURY</h3>
			<p>GRN, W1NKS, PERFECTUAL, MARNIOK, DJAKSIK</p>
			<a href="#team" class="post-btn">CZYTAJ WIĘCEJ</a>
		</article>

		<article class="post-card">
			<img src="post2.png" alt="Post 2">
			<h3>DZIKIE KNURY NA IEM ATLANTA 2026</h3>
			<p>NASZA DRUŻYNA ZAGRA W KWALIFIKACJACH DO IEM ATLANTA 2026</p>
			<a href="#team" class="post-btn">CZYTAJ WIĘCEJ</a>
		</article>

		<article class="post-card">
			<img src="post3.png" alt="Post 3">
			<h3>PRZEGRANA W TURNIEJU</h3>
			<p>NASZA DRUŻYNA PRZEGRAŁA W 1 RUNDZIE Z DRUŻYNĄ FETTSACK GAMING</p>
			<a href="#team" class="post-btn">CZYTAJ WIĘCEJ</a>
		</article>

	</div>
</section>

</body>


<section id="team" class="team-section">
	<h2 class="section-title">NASZA DRUŻYNA</h2>
	<div class="team-grid">
		<div class="team-member">
			<img src="futoma.jpg" alt="Futoma">
			<h3>MARNIOK</h3>
			<p>SNIPER</p>
		</div>
		<div class="team-member">
			<img src="grn.jpg" alt="GRN">
			<h3>GRN</h3>
			<p>IGL</p>
		</div>
		<div class="team-member">
			<img src="wladd.jpg" alt="WŁAD">
			<h3>W1NKS</h3>
			<p>STAR RIFFLER</p>
		</div>
		<div class="team-member">
			<img src="wolodia.jpg" alt="WOŁODIA">
			<h3>PERFECTUAL</h3>
			<p>CWL</p>
		</div>
		<div class="team-member">
			<img src="knur.jpg" alt="KNUR">
			<h3>DJAKSIK</h3>
			<p>RIFFLER</p>
		</div>
	</div>

	<section id="about" class="about-section">
		<h2 class="section-title">O NAS</h2>
		<p>DZIKIE KNURY TO POLSKA DRUŻYNA, NALEŻĄCY DO NIEJ ZAWODNICY WYWODZĄ SIĘ Z HETMAŃSKIEJ 120 Z RZESZOWA. JEST TO DRUŻYNA O OGROMNYCH AMBICJACH I PLANACH, I TE PLANY SĄ KONSEKWENTNIE REALIZOWANE, SZCZEGÓŁY O NICH SĄ NA BIEŻĄCO AKUTALIZOWANE NA TEJ STRONIE, CAŁY PROJEKT MA ZAMYSŁ PROMOWANIA E-SPORTU W POWIECIE ŁAŃCUCKIM, WE WSI KOSINA</p>

	</section> 

	<section id="highlights" class="highlights-section">
  <h2 class="section-title">NAJWAŻNIEJSZE MOMENTY</h2>

  <div class="highlights-grid">
    <figure class="highlight-card">
      <video controls playsinline preload="metadata" poster="thumb1.jpg">
        <source src="highlight1.mp4" type="video/mp4">
      </video>
      <figcaption>GRN | USP MASTER</figcaption>
    </figure>

    <figure class="highlight-card">
      <video controls playsinline preload="metadata" poster="thumb2.jpg">
        <source src="highlight2.mp4" type="video/mp4">
      </video>
      <figcaption>DJAKSIK | CLUTCH</figcaption>
    </figure>

    <figure class="highlight-card">
      <video controls playsinline preload="metadata" poster="thumb3.jpg">
        <source src="highlight3.mp4" type="video/mp4">
      </video>
      <figcaption></figcaption>
    </figure>
  </div>
</section>

<section id="footer" class="footer-section">
	<p>🐷 2026 DZIKIE KNURY. Wszelkie prawa niezastrzeżone.</p>












</html>









