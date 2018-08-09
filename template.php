
<html>

  <style>
	</style>

	<head>
		<title>12 Sentences to Deconstruct <?php print $language ?> Grammar the Tim Ferriss Way</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="languagepages.css">
		<script src="index.js" type="text/javascript"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({
				google_ad_client: "ca-pub-6102527028492975",
				enable_page_level_ads: true
			});
		</script>
		<script>
			var sentence1 = new Audio();
			sentence1.src = "assets/<?php print $language ?>_sentence1.mp3";
			var sentence2 = new Audio();
			sentence2.src = "assets/<?php print $language ?>_sentence2.mp3";
			var sentence3 = new Audio();
			sentence3.src = "assets/<?php print $language ?>_sentence3.mp3";
			var sentence4 = new Audio();
			sentence4.src = "assets/<?php print $language ?>_sentence4.mp3";
			var sentence5 = new Audio();
			sentence5.src = "assets/<?php print $language ?>_sentence5.mp3";
			var sentence6 = new Audio();
			sentence6.src = "assets/<?php print $language ?>_sentence6.mp3";
			var sentence7 = new Audio();
			sentence7.src = "assets/<?php print $language ?>_sentence7.mp3";
			var sentence8 = new Audio();
			sentence8.src = "assets/<?php print $language ?>_sentence8.mp3";
			var sentence9 = new Audio();
			sentence9.src = "assets/<?php print $language ?>_sentence9.mp3";
			var sentence10 = new Audio();
			sentence10.src = "assets/<?php print $language ?>_sentence10.mp3";
			var sentence11 = new Audio();
			sentence11.src = "assets/<?php print $language ?>_sentence11.mp3";
			var sentence12 = new Audio();
			sentence12.src = "assets/<?php print $language ?>_sentence12.mp3";
			var sentence13 = new Audio();
			sentence13.src = "assets/<?php print $language ?>_sentence13.mp3";
	</script>
		<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
	</head>

	<body>
			<div class="header">
					<a href="index.php"><img class="logo img-responsive" width=80% src="assets/logo1.png" alt="12 Sentences" /></a>
					<div class="dropdownandin">
						<div class="dropdownholder">
								<h1 style="display:inline">in</h1>
								<div class="dropdown">
										<button onclick="myFunction()" class="dropbtn"><?php print $language ?> <?php print $emoji ?> &nbsp ▾</button>
										<div id="myDropdown" class="dropdown-content">
											<?php 
											include 'languageslist.php';
											foreach ($languages as &$lang) {
												if ($lang !== $language . ' ' . $emoji) {

													$myvalue = 'Test me more';
													$plainlang = explode(' ',trim($lang));
													print '<a href="'. $plainlang[0] . '.php">' . $lang . '</a>';
												}
											}
											?>
										</div>
									</div>
							</div>
						</div>
					</div>

		<p class="blurb"><strong>12 Sentences in <?php print $language ?></strong> by a <strong>Native Speaker</strong> - to help you learn grammar fast! Inspired by <a href="https://tim.blog/2007/11/07/how-to-learn-but-not-master-any-language-in-1-hour-plus-a-favor/">Tim Ferriss.</a></p>
		
		<div class="container">
			<div class="translator-card">
					<p class="translations-by"><strong><?php print $translatorbio ?></strong></p>
					<img class="profile-img" src="assets/<?php print $language ?>_profile.jpg">		
		</div>
		</div>
		

		<table>
			<tr>
				<td class="td-num">1.</td>
				<td class="english">The apple is red</td>
				<td class="language"><?php print $sentence1 ?></td>
				<td class="td-play"><a onmousedown="sentence1.play()"><img class="play-button" src="assets/playbtn.png"></a></td>
			</tr>
			<tr>
				<td class="td-num">2.</td>
				<td class="english">It is John’s apple</td>
				<td class="language"><?php print $sentence2 ?></td>
				<td class="td-play"><a onmousedown="sentence2.play()"><img class="play-button" src="assets/playbtn.png"></a></td>
			</tr>
			<tr>
				<td class="td-num">3.</td>
				<td class="english">I give John the apple</td>
				<td class="language"><?php print $sentence3 ?></td>
				<td class="td-play"><a onmousedown="sentence3.play()"><img class="play-button" src="assets/playbtn.png"></a></td>
			</tr>
			<tr>
				<td class="td-num">4.</td>
				<td class="english">We give him the apple</td>
				<td class="language"><?php print $sentence4 ?></td>
				<td class="td-play"><a onmousedown="sentence4.play()"><img class="play-button" src="assets/playbtn.png"></a></td>
			</tr>
			<tr>
				<td colspan="4" class="ad">AD</td>
			</tr>
				<tr>
				<td class="td-num">5.</td>
				<td class="english">He gives it to John</td>
				<td class="language"><?php print $sentence5 ?></td>
				<td class="td-play"><a onmousedown="sentence5.play()"><img class="play-button" src="assets/playbtn.png"></a></td>
			</tr>
			<tr>
				<td class="td-num">6.</td>
				<td class="english">She gives it to him</td>
				<td class="language"><?php print $sentence6 ?></td>
				<td class="td-play"><a onmousedown="sentence6.play()"><img class="play-button" src="assets/playbtn.png"></a></td>
			</tr>
			<tr>
				<td class="td-num">7.</td>
				<td class="english">Is the apple red?</td>
				<td class="language"><?php print $sentence7 ?></td>
				<td class="td-play"><a onmousedown="sentence7.play()"><img class="play-button" src="assets/playbtn.png"></a></td>
			</tr>
			<tr>
				<td class="td-num">8.</td>
				<td class="english">The apples are red</td>
				<td class="language"><?php print $sentence8 ?></td>
				<td class="td-play"><a onmousedown="sentence8.play()"><img class="play-button" src="assets/playbtn.png"></a></td>
			</tr>
			<tr>
				<td colspan="4" class="ad">AD</td>
			</tr>
			<tr>
				<td class="td-num">9.</td>
				<td class="english">I must give it to him</td>
				<td class="language"><?php print $sentence9 ?></td>
				<td class="td-play"><a onmousedown="sentence9.play()"><img class="play-button" src="assets/playbtn.png"></a></td>
			</tr>
			<tr>
				<td class="td-num">10.</td>
				<td class="english">I want to give it to her</td>
				<td class="language"><?php print $sentence10 ?></td>
				<td class="td-play"><a onmousedown="sentence10.play()"><img class="play-button" src="assets/playbtn.png"></a></td>
			</tr>
			<tr>
				<td class="td-num">11.</td>
				<td class="english">I'm going to know tomorrow</td>
				<td class="language"><?php print $sentence11 ?></td>
				<td class="td-play"><a onmousedown="sentence11.play()"><img class="play-button" src="assets/playbtn.png"></a></td>
			</tr>
			<tr>
				<td class="td-num">12.</td>
				<td class="english">I can't eat the apple</td>
				<td class="language"><?php print $sentence12 ?></td>
				<td class="td-play"><a onmousedown="sentence12.play()"><img class="play-button" src="assets/playbtn.png"></a></td>
      </tr>
      <tr>
				<td class="td-num">★</td>
				<td class="english">I have eaten the apple</td>
				<td class="language"><?php print $sentence13 ?></td>
				<td class="td-play"><a onmousedown="sentence12.play()"><img class="play-button" src="assets/playbtn.png"></a></td>
			</tr>
		</table>
		
		<footer>
			<p>Made by <a href="http://twitter.com/schwfty">@schwfty</a></p>
		</footer>
			

    <!-- Google analytics-->
	<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-104056156-1', 'auto');
ga('send', 'pageview');
	</script>
	</body>
  
</html>