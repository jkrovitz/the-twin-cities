<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Home</title>
		<meta charset="UTF-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<link href="index.html" rel="canonical" />
		<meta content="Home" name="title" />
		<meta content="Provides a brief overview of the Twin Cities." name="description" />
		<meta content="Jeremy Krovitz" name="author" />
		<?php include 'favicons.php'; ?>
		<link href="style/screen.css" rel="preload" as="style" />
		<link href="style/screen.css" rel="stylesheet" type="text/css" />
		<link href="style/header.css" rel="preload" as="style" />
		<link href="style/header.css" rel="stylesheet" type="text/css" />
		<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14" defer></script>
		<script src="js/header.js" defer></script>
	</head>

	<body class="flex-container">
		<div id="header-container">
			<headercomponent></headercomponent>
		</div>
		<main class="main-class">
			<div class="video-class">
				<figure>
					<video autoplay controls loop muted>
						<source src="https://jeremykrovitz.com/videos/twin-cities-2020.mp4" type="video/mp4" />
						<source src="https://jeremykrovitz.com/videos/twin-cities-2020.ogv" type="video/ogg" />
						Your browser does not support HTML5's video tag.
					</video>
					<figcaption>
						Twin Cities 2020
						<sup><a href="#home-source3">[3]</a></sup>
					</figcaption>
				</figure>
			</div>
			<div class="text-content">
				<h2>Overview of the Twin Cities</h2>
				<ul>
					<li>A large metropolitan area, Minneapolis&ndash;St. Paul, is built around and split by the
						Mississippi River in east central Minnesota.
					</li>
					<li>This area is commonly referred to as the Twin Cities because of its two largest cities,
						Minneapolis, the city with the largest population in Minnesota, and its neighbor, St. Paul, the
						state capital.
					</li>
					<li>While Minneapolis&ndash;St. Paul are given the nickname the Twin Cities, the two are actually
						quite different, independent from one another, and have well&hyphen;defined borders.
					</li>
					<li>Minneapolis is located on the west side of the Mississippi River and is considered to be more
						modern than St. Paul, which sits on the eastern side of the Mississippi River.
					</li>
				</ul>
			</div>
			<div class="image-row">
				<div class="image-column print-left-img-float">
					<figure class="minneapolis-figure">
						<!-- Alt text is left blank because a caption has been added to the image. -->
						<img class="minneapolis-image" alt="" src="images/minneapolis.jpeg" title="Minneapolis" />
						<figcaption class="minneapolis-image-caption">
							Image of Minneapolis by Bobak Ha&#039;Eri, CC BY 3 .0, via Wikimedia Commons
							<sup><a href="#home-source2">[2]</a></sup>
						</figcaption>
					</figure>
				</div>
				<div class="image-column print-right-img-float">
					<figure class="saint-paul-figure">
						<!-- Alt text is left blank because a caption has been added to the image. -->
						<img class="saint-paul-image" alt="" src="images/st-paul.jpeg" title="St. Paul" />
						<figcaption class="saint-paul-image-caption">
							Image of St. Paul by Carl Clifford, via Wikimedia Commons
							<sup><a href="#home-source1">[1]</a></sup>
						</figcaption>
					</figure>
				</div>
			</div>
			<ul class="citations">
				<!-- List of sources used. -->
				<li id="home-source1">
					[1]<cite>Saint Paul skyline, West Side (cropped) .jpg</cite> - Wikimedia Commons, Wikimedia.org,
					Jun. 06, 2008.
					<a href="https://commons.wikimedia.org/wiki/File:Saint_Paul_skyline,_West_Side_(cropped).jpg">
						https://commons.wikimedia.org/wiki/File:Saint_Paul_skyline,_West_Side_(cropped).jpg</a>
					(accessed May 14, 2021).
				</li>
				<li id="home-source2">
					[2]<cite>2008-0712-MPLS-pan00-mp-edit.JPG</cite> - Wikimedia Commons, Wikimedia.org, Jul. 12, 2008.
					<a href="https://commons.wikimedia.org/wiki/File:2008-0712-MPLS-pan00-mp-edit.JPG">
						https://commons.wikimedia.org/wiki/File:2008-0712-MPLS-pan00-mp-edit.JPG</a>
					(accessed May 14, 2021).
				</li>
				<li id="home-source3">
					[3]jaybyrdfilms, <cite>Twin Cities 2020,</cite>
					YouTube. Dec. 28, 2020, Accessed: May 14, 2021. [Online]. Available:
					<a href="https://www.youtube.com/watch?v=u61Rrk7UacA">
						https://www.youtube.com/watch?v=u61Rrk7UacA.</a>
				</li>
			</ul>
		</main>
		<div id="footer-container">
			<footercomponent></footercomponent>
		</div>
	</body>

</html>