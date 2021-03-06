<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Population</title>
		<meta charset="UTF-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<link href="population.html" rel="canonical" />
		<meta content="Population" name="title" />
		<meta content="Lists some demographics of Minneapolis and St. Paul." name="description" />
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
			<p class="some-padding information-text">Because there are multiple definitions of what is considered to be
				part of the
				Twin Cities, the
				population values would be more subjective. Therefore, the populations of Minneapolis and St. Paul are
				described separately.
			</p>
			<figure id="mn-metro-map-figure">
				<!-- Alt text is left blank because a caption has been added to the image. -->
				<img alt="" src="images/twin-cities-metro-map.png" id="mn-metro-map-img" title="The Twin Cities" />
				<figcaption>
					Twin Cities Metro map. Davumaya, CC BY 3.0, via Wikimedia Commons.
					<sup>
						<a href="#population-source3">[3]</a>
					</sup>
				</figcaption>
			</figure>
			<div id="minneapolis-population">
				<h2 class="population-heading">
					Minneapolis Population 2019
					<sup class="header-superscript-text">
						<a href="#population-source1">[1]</a>
					</sup>
				</h2>
				<ul>
					<li>Population: 429,605</li>
					<li>54 square miles</li>
					<li>7,956 people per square mile</li>
				</ul>
			</div>
			<table id="mpls-age-range">
				<caption>
					Age Range
				</caption>
				<thead>
					<tr>
						<th>Age Range</th>
						<th>Percentage</th>
						<th>Number of people</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>0-9</th>
						<td>12.8%</td>
						<td>55,064</td>
					</tr>
					<tr>
						<th>10-19</th>
						<td>11%</td>
						<td>47,021</td>
					</tr>
					<tr>
						<th>20-29</th>
						<td>21.6%</td>
						<td>92,837</td>
					</tr>
					<tr>
						<th>30-39</th>
						<td>18.2%</td>
						<td>78,358</td>
					</tr>
					<tr>
						<th>40-49</th>
						<td>11.6%</td>
						<td>49,720</td>
					</tr>
					<tr>
						<th>50-59</th>
						<td>9.5%</td>
						<td>40,927</td>
					</tr>
					<tr>
						<th>60-69</th>
						<td>8.9%</td>
						<td>38,223</td>
					</tr>
					<tr>
						<th>70-79</th>
						<td>4.1%</td>
						<td>17,804</td>
					</tr>
					<tr>
						<th>80+</th>
						<td>2.2%</td>
						<td>9,641</td>
					</tr>
				</tbody>
			</table>
			<table id="mpls-gender">
				<caption>
					Gender
				</caption>
				<thead>
					<tr>
						<th>Gender</th>
						<th>Percentage</th>
						<th>Number of People</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Male</th>
						<td>50.8%</td>
						<td>218,245</td>
					</tr>
					<tr>
						<th>Female</th>
						<td>49.2%</td>
						<td>211,360</td>
					</tr>
				</tbody>
			</table>
			<div id="saint-paul-population">
				<h2 class="population-heading">
					St. Paul Population 2019
					<sup class="header-superscript-text">
						<a href="#population-source2">[2]</a>
					</sup>
				</h2>
				<ul>
					<li>Population: 308,096</li>
					<li>52 square miles</li>
					<li>5,927 people per square mile</li>
				</ul>
			</div>
			<table id="sp-age-range">
				<caption>
					Age Range
				</caption>
				<thead>
					<tr>
						<th>Age Range</th>
						<th>Percentage</th>
						<th>Number of people</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>0-9</th>
						<td>13.7%</td>
						<td>42,109</td>
					</tr>
					<tr>
						<th>10-19</th>
						<td>14.2%</td>
						<td>43,767</td>
					</tr>
					<tr>
						<th>20-29</th>
						<td>16.6%</td>
						<td>51,045</td>
					</tr>
					<tr>
						<th>30-39</th>
						<td>17.4%</td>
						<td>53,733</td>
					</tr>
					<tr>
						<th>40-49</th>
						<td>11.3%</td>
						<td>34,816</td>
					</tr>
					<tr>
						<th>50-59</th>
						<td>11%</td>
						<td>33,742</td>
					</tr>
					<tr>
						<th>60-69</th>
						<td>8.7%</td>
						<td>26,917</td>
					</tr>
					<tr>
						<th>70-79</th>
						<td>4.7%</td>
						<td>14,446</td>
					</tr>
					<tr>
						<th>80+</th>
						<td>2.4%</td>
						<td>7,521</td>
					</tr>
				</tbody>
			</table>
			<table id="sp-gender">
				<caption>
					Gender
				</caption>
				<thead>
					<tr>
						<th>Gender</th>
						<th>Percentage</th>
						<th>Number of People</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Male</th>
						<td>48.6%</td>
						<td>149,689</td>
					</tr>
					<tr>
						<th>Female</th>
						<td>51.4%</td>
						<td>158,407</td>
					</tr>
				</tbody>
			</table>
			<ul class="citations" id="population-citations">
				<!-- List of sources used. -->
				<li id="population-source1">
					[1]
					<cite>Minneapolis, MN,</cite> Census Reporter, 2019.
					<a
						href="https://censusreporter.org/profiles/16000US2743000-minneapolis-mn/">https://censusreporter.org/profiles/16000US2743000-minneapolis-mn/</a>
					(accessed May 14, 2021).
				</li>
				<li id="population-source2">
					[2]
					<cite>St. Paul, MN,</cite> Census Reporter, 2019.
					<a
						href="https://censusreporter.org/profiles/16000US2758000-st-paul-mn/">https://censusreporter.org/profiles/16000US2758000-st-paul-mn/</a>
					(accessed May 14, 2021).
				</li>
				<li id="population-source3">
					[3]
					<cite>Twin Cities 7 Metro map.png - Wikimedia Commons,</cite>
					Wikimedia.org, Jul. 22, 2008.
					<a
						href="https://commons.wikimedia.org/wiki/File:Twin_Cities_7_Metro_map.png">https://commons.wikimedia.org/wiki/File:Twin_Cities_7_Metro_map.png</a>
					(accessed May 14, 2021).
				</li>
			</ul>
		</main>
		<div id="footer-container">
			<footercomponent></footercomponent>
		</div>
	</body>

</html>