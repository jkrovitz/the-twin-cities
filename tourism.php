<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Tourism</title>
		<meta charset="UTF-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<link href="tourism.html" rel="canonical" />
		<meta content="Tourism" name="title" />
		<meta content="Some activities to do in the Twin Cities are mentioned." name="description" />
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
			<h2 id="tourism-header" class="information-text">
				Some Things to do in the Twin Cities
			</h2>
			<section id="moa-section">
				<h3 class="information-text">
					Mall of America
				</h3>
				<p class="information-text" id="moa-screen-description">
					With over 500 stores, 50 restaurants, and a theme park, the
					<a href="https://www.mallofamerica.com/" target="_blank">Mall of America</a>, the largest shopping
					mall in the United States, is a great place to spend the day.
					<sup><a href="#tourism-source1">[1]</a></sup>
				</p>
				<div class="image-row">
					<div class="image-column">
						<figure id="moa-1-figure">
							<!-- Alt text is left blank because a caption has been added to the image. -->
							<img alt="" id="moa-image-1" src="images/mall-of-america-floors-and-escalators.jpeg"
								title="Inside the Mall of America" />
							<figcaption class="moa-image-caption">
								View of the TCF Rotunda inside the Mall of America Tyler Vigen, via Wikimedia Commons.
								<sup><a href="#tourism-source2">[2]</a></sup>
							</figcaption>
						</figure>
					</div>
					<div class="image-column">
						<figure id="moa-2-figure">
							<!-- Alt text is left blank because a caption has been added to the image. -->
							<img alt="" id="moa-image-2" src="images/512px-2018_Mall_of_America.jpeg"
								title="Outside the Mall of America" />
							<figcaption class="moa-image-caption">
								Courtesy of Farragutful, CC BY-SA 4.0 Creative Commons, via Wikimedia Commons
								<sup><a href="#tourism-source4">[4]</a></sup>
							</figcaption>
						</figure>
					</div>
				</div>
			</section>
			<section id="sculpture-garden-section">
				<h3 class="information-text">
					Minneapolis Sculpture Garden
				</h3>
				<p class="information-text" id="walker-art-center-screen-description">Art lover? Come visit the <a
						href="https://walkerart.org/" target="_blank">Walker Art Center</a> and enjoy a nice walk around
					the Sculpture Garden.</p>

				<figure class="spoonbridge-and-cherry">
					<!-- Alt text is left blank because a caption has been added to the image. -->
					<img alt="" class="" id="spoonbridge-and-cherry-img" src="images/spoonbridge-and-cherry.jpg"
						title="Spoonbridge and Cherry" />
					<figcaption>
						Spoonbridge and Cherry at the Sculpture Garden. Courtesy of Walker Art Center.
						<sup><a href="#tourism-source3">[3]</a></sup>
					</figcaption>
				</figure>
			</section>
			<section id="guthrie-theater-section">
				<h3 class="information-text">
					The Guthrie Theater
				</h3>
				<p class="information-text" id="guthrie-theater-screen-description">
					Want to see a play? Go to the Guthrie, one of the most renowned theaters in the country. Visit the
					<a href="https://www.guthrietheater.org/" target="_blank" title="Guthrie Theater Website">Guthrie
						Theater website</a> for
					show times.
				</p>
				<div class="video-class">
					<figure>
						<video autoplay controls loop muted>
							<source src="https://jeremykrovitz.com/videos/guthrie-drone-footage.mp4" type="video/mp4" />
							<source src="https://jeremykrovitz.com/videos/guthrie-drone-footage.ogv" type="video/ogg" />
							Your browser does not support HTML5's video tag.
						</video>
						<figcaption>
							The Guthrie Theater
							<sup><a href="#tourism-source5">[5]</a></sup>
						</figcaption>
					</figure>
				</div>
				<figure id="guthrie-theater-figure">
					<!-- Alt text is left blank because a caption has been added to the image. -->
					<img alt="" id="guthrie-theater" src="images/guthrie-theater.jpg" title="The Guthrie Theater" />

					<figcaption>
						The Guthrie Theater
						<sup><a href="#tourism-source5">[5]</a></sup>
					</figcaption>
				</figure>
			</section>
			<ul class="citations">
				<!-- List of sources used. -->
				<li id="tourism-source1">
					[1]U.S. News & World Report, <cite>18 Best Things to Do in Minneapolis - St. Paul | U.S. News
						Travel,</cite>
					Usnews.com, May 12, 2021.
					<a
						href="https://travel.usnews.com/Minneapolis_MN/Things_To_Do/">https://travel.usnews.com/Minneapolis_MN/Things_To_Do/</a>
					(accessed May 14, 2021).
				</li>
				<li id="tourism-source2">
					[2]<cite>Mall of America Floors & Escalators.jpg - Wikimedia Commons,</cite> Wikimedia.org, Apr. 02,
					2021.
					<a
						href="https://commons.wikimedia.org/wiki/File:Mall_of_America_Floors_%26_Escalators.jpg">https://commons.wikimedia.org/wiki/File:Mall_of_America_Floors_%26_Escalators.jpg</a>
					(accessed May 14, 2021).
				</li>
				<li id="tourism-source3">
					[3]<cite>Spoonbridge and Cherry,</cite>
					Walkerart.org, 2021.
					<a
						href="https://walkerart.org/collections/artworks/spoonbridge-and-cherry">https://walkerart.org/collections/artworks/spoonbridge-and-cherry</a>
					(accessed May 14, 2021).
				</li>
				<li id="tourism-source4">
					[4]<cite>2018 Mall of America 01.jpg - Wikimedia Commons,</cite>
					Wikimedia.org, Jun. 15, 2018.
					<a
						href="https://commons.wikimedia.org/wiki/File:2018_Mall_of_America_01.jpg">https://commons.wikimedia.org/wiki/File:2018_Mall_of_America_01.jpg</a>
					(accessed May 14, 2021).
				</li>
				<li id="tourism-source5">
					[5]Guthrie Theater, <cite>Homepage Drone Footage | Fall 2019,</cite>
					YouTube. Sep. 05, 2019, Accessed: May 15, 2021. [Online]. Available:
					<a
						href="https://www.youtube.com/watch?v=G95immleLOE&t=18s">https://www.youtube.com/watch?v=G95immleLOE&t=18s</a>.
				</li>
			</ul>
		</main>
		<div id="footer-container">
			<footercomponent></footercomponent>
		</div>
	</body>

</html>