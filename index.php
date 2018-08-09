<!DOCTYPE html>
<html>

	<style>

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body {
			background-color: white;
      color: black;
			font-size: 16px;
			font-family: Arial, Helvetica, sans-serif;
			width: 90%;
			margin: auto;
			max-width: 850px;
			}

		h1 {
			font-family: Arial, Helvetica, sans-serif;
			text-align: center;
			padding: 5px;
		}

		.language-list {
				font-size: 1.125rem;
				text-align: center;
				border-bottom: 3px solid lightgray;
		}

		nav ul li {
				list-style-type: none;
				padding: 0.2em;
				border-radius: 3px;
				font-size: 1.5rem;
		}

		nav ul li a {
			text-decoration: none;
		}
						
		.logo {
			display: block;
			width: 300px;
			margin: auto;
			margin-top: 0.625rem;
		}	

		a:hover {
    		text-decoration: underline;
			}	
			
		.container {
			display: block;
			width: 100%;
			border-top: 3px solid lightgray;
			border-bottom: 3px solid lightgray;
			margin: 10px;
			padding: 20px;
			text-align: center;
			z
		}

		.translator-card {
			display: block;
			max-width: 500px;
			margin: auto;
		}		

		footer {
			margin-top: 20px;
			margin-bottom: 10px;
			text-align: center;
			color: black;
		}
	</style>

	<head>
		<title>12 Sentences to Learn Languages the Tim Ferriss Way</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({
				google_ad_client: "ca-pub-6102527028492975",
				enable_page_level_ads: true
			});
		</script>
	</head>

	<body>
			<img class="logo" src="assets/logo1.png" alt="12 Sentences" />
		<div class="container">
			<p class="blurb"><strong>Deconstruct the grammar of a foreign language using 12 simple sentences!</strong><br><br>Translations and audio provided by <strong>Native Speakers.</strong><br><br>Inspired by <a style="color: black; text-decoration: underline"href="https://tim.blog/2007/11/07/how-to-learn-but-not-master-any-language-in-1-hour-plus-a-favor/">Tim Ferriss.</a> His book explains the method more.</p>
		</div>
			<h1>Choose a language!</h1>
			<nav>
				<ul class="language-list">
          <?php 
            include 'languageslist.php';
            foreach ($languages as &$lang) {
              $plainlang = explode(' ',trim($lang));
              print '<li><a href="'. $plainlang[0] . '.php">' . $lang . '</a></li>';
            }
          ?>
				</ul>

			</nav>

		<footer>
			<p>Made by <a style="color: black" href="http://twitter.com/schwfty">@schwfty</a></p>
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