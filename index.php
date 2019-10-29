<?php

// Database connection
$link = mysqli_connect("localhost", "root", "", "likecounter");

// Check connection
if($link === false){
	die(mysqli_connect_error());
} else {
	echo "<script>console.log('Connected successfully.')</script>";
}

// to display number of "likes"
$result = mysqli_query($link,"SELECT count FROM `likecounter` WHERE id = 1");

// Fetch likes - Array
$row = mysqli_fetch_row($result);

// Update 'like'
if (isset($_POST['like'])) {

	// Sleep 3 seconds to show the toast
	sleep(3);

	$sql = "UPDATE likecounter SET `count` = `count`+1 WHERE `id`='1'";
	if(mysqli_query($link, $sql)){
	    echo "<script>console.log('Records updated successfully.')</script>";
	} else{
	    echo mysqli_error($link);
	}	
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pushkar Saraf - Full Stack Web Developer</title>
	<meta name="description" content="A Full Stack Web Developer with 1+ work experience in technologies such as HTML5, CSS3, PHP, JavaScript, JQuery, NodeJS, Java, MySQL, MongoDB and Firebase.">
	<link rel="stylesheet" href="css/styles.css">

	<!-- Favicon -->
	<link rel="icon" href="SVGs/pushkar-saraf-logo.ico" type="image/x-icon" />

	<!-- Bootstrap 'Pulse' -->
	<link rel="stylesheet" href="css/bootstrap.pulse.css">

	<!-- Material Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lekton:400,700|Montserrat:400,600&display=swap" rel="stylesheet">

	<!-- Font awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <style type="text/css">
		.navbar{margin-bottom: 2% !important;}
		.desktop-mode{visibility: visible;display: inherit;}
		@media (max-width: 1028px) {
			.desktop-mode{visibility: hidden; display: none;}
		}
	</style>
</head>
<body>
	<!-- #F9F8FC -->
	<nav class="navbar navbar-expand-lg navbar-light shadow-sm p-3 mb-5 bg-white">
	  <a class="navbar-brand" href="#">
	  	<svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 40 40">
		  <g id="Group_1" data-name="Group 1" transform="translate(-159 -370)">
		    <rect id="Rectangle_1" data-name="Rectangle 1" width="40" height="40" transform="translate(159 370)"/>
		    <text id="PS." transform="translate(179 397)" fill="#fff" font-size="19" font-family="Montserrat-Medium, Montserrat" font-weight="500" letter-spacing="0.015em"><tspan x="-15.39" y="0">PS</tspan><tspan y="0" fill="#fd5523">.</tspan></text>
		  </g>
		</svg>
	  </a>
	</nav>

	<div class="container">

		<!-- Pushkar Profile Info -->
		<!-- Profile picture -->
		<div class="row">
			<div class="brand desktop-mode">
				<svg xmlns="http://www.w3.org/2000/svg" width="95" height="95" viewBox="0 0 40 40">
				  <g id="Group_1" data-name="Group 1" transform="translate(-159 -370)">
				    <rect id="Rectangle_1" data-name="Rectangle 1" width="40" height="40" transform="translate(159 370)"/>
				    <text id="PS." transform="translate(179 397)" fill="#fff" font-size="19" font-family="Montserrat-Medium, Montserrat" font-weight="500" letter-spacing="0.015em"><tspan x="-15.39" y="0">PS</tspan><tspan y="0" fill="#fd5523">.</tspan></text>
				  </g>
				</svg>
			</div>
			<div class="col-sm col-md-6 col-lg-6">
				<img id="profile" src="images/pushkar-profile.jpg" class="mx-auto d-block shadow" alt="Pushkar Saraf Profile picture">	
			</div>

			<!-- Display in desktop mode -->
			<div class="col-sm col-md-6 col-lg-6 desktop-mode align-items-center">
				<div id="carouselExampleFade" class="carousel slide carousel-fade">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="card bg-light mb-3 shadow-sm bg-white" style="max-width: 100%;">
							<div class="card-header bg-white"><b>Pushkar Prashant Saraf</b></div>
							<div class="card-body">
								<p class="card-text"><b>I'm a <em>Full Stack Web Developer</em> based in Kolhapur, Maharashtra, India.<br/>I have passion for Web and Mobile Development.</b></p>
							</div>
							<div class="container arrow-icons">
								<i class="material-icons next" style="font-size: 16px; float: right; padding: 2%">arrow_forward</i>
							</div>
						</div>
					</div>

					<!-- Second Carousel Item -->
					<div class="carousel-item">
						<div class="card bg-light mb-3 shadow-sm bg-white" style="max-width: 100%;">
							<div class="card-header bg-white">Design & Development.</div>
							<div class="card-body">
								<p class="card-text"><b>I started learning to code when I was 19 years old and it amazed me to see how these applications work behind the scene. <br/>Over time, I gained enough skills and experience designing and developing mobile and web applications.</b></p>
							</div>
							<div class="container arrow-icons">
								<i class="material-icons prev" style="font-size: 16px; float: left;padding: 2%">arrow_back</i>
								<i class="material-icons next" style="font-size: 16px; float: right;padding: 2%">arrow_forward</i>
							</div>
						</div>
					</div>

					<!-- Third Carousel Item -->
					<div class="carousel-item">
						<div class="card bg-light mb-3 shadow-sm bg-white" style="max-width: 100%;">
							<div class="card-header bg-white">Reading & Writing Quotes.</div>
							<div class="card-body">
								<p class="card-text"><b>It helps me find my spot at the end of the day, where I can just <b>BE</b>, and get some expert advise. I also like writing quotes to reflect the experiences that I go through, you can check them out too on my <a style="text-decoration: none;" class="instagram-link" href="https://www.instagram.com/pushkars919/">Instagram page.</a></b></p>
							</div>
							<div class="container arrow-icons">
								<i class="material-icons prev" style="font-size: 16px; float: left;padding: 2%">arrow_back</i>
								<i class="material-icons next" style="font-size: 16px; float: right;padding: 2%">arrow_forward</i>
							</div>
						</div>
					</div>

					<!-- Fourth Carousel Item -->
					<div class="carousel-item">
						<div class="card bg-light mb-3 shadow-sm bg-white" style="max-width: 100%;">
							<div class="card-header bg-white">Fitness & Nutrition.</div>
							<div class="card-body">
								<p class="card-text"><b>"To enjoy the glow of good health, you must exercise.", this is what I live by.</b></p>
							</div>
							<div class="container arrow-icons">
								<i class="material-icons prev" style="font-size: 16px; float: left;padding: 2%">arrow_back</i>
								<i class="material-icons next" style="font-size: 16px; float: right;padding: 2%">arrow_forward</i>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>

		<center><hr class="desktop-mode" style="margin-top: 5%; width: 45%"></center>

		<div class="container desktop-mode">
			<div class="row">
				<div class="col-lg-6">
					<h1 class="skills">Skills</h1>
				</div>
				<div class="col-lg-6">
					<!-- Legend for experience levels -->
					<div class="alert alert-dismissible alert-warning" style="margin: 10%">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong><h5><b>Legend</b></h5></strong><hr>
						<p class="legend"><b>BEG - </b><span class="legend-info">Beginner</span></p>
						<p class="legend"><b>APR - </b><span class="legend-info">Apprentice</span></p>
						<p class="legend"><b>INT - </b><span class="legend-info">Intermediate</span></p>
					</div>
				</div>
			</div>
			<div class="jumbotron bg-white">
				<div class="row">
					<div class="col-lg-6">
						<div class="card mb-3 shadow-sm" style="max-width: 100%;">
							<div class="card-header bg-white"><h4 class="skill-content"><b>Graphic Design</b></h4></div>
							<div class="card-body bg-custom">
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">UI Design</span><b style="float:right;">INT</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">Website Design</span><b style="float:right;">INT</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">Branding</span><b style="float:right;">APR</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">Print Design</span><b style="float:right;">APR</b></p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card mb-3 shadow-sm" style="max-width: 100%;">
							<div class="card-header bg-white"><h4 class="skill-content"><b>Front-end</b></h4></div>
							<div class="card-body bg-custom">
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">HTML5 & CSS3</span><b style="float:right;">INT</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">JavaScript & JQuery</span><b style="float:right;">INT</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">Bootstrap 4</span><b style="float:right;">INT</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">Materialize CSS</span><b style="float:right;">INT</b></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="card mb-3 shadow-sm" style="max-width: 100%;">
							<div class="card-header bg-white"><h4 class="skill-content"><b>Back-end</b></h4></div>
							<div class="card-body bg-custom">
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">PHP</span><b style="float:right;">APR</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">NodeJS</span><b style="float:right;">APR</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">MySQL</span><b style="float:right;">APR</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">MongoDB</span><b style="float:right;">APR</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">Java</span><b style="float:right;">APR</b></p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card mb-3 shadow-sm" style="max-width: 100%;">
							<div class="card-header bg-white"><h4 class="skill-content"><b>Other Technologies</b></h4></div>
							<div class="card-body bg-custom">
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">Android Studio</span><b style="float:right;">APR</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">PassportJS</span><b style="float:right;">BEG</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">Progressive Web Application</span><b style="float:right;">BEG</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">Firebase</span><b style="float:right;">BEG</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">GitHub</span><b style="float:right;">INT</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">Heroku</span><b style="float:right;">INT</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">Netlify</span><b style="float:right;">INT</b></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="card mb-3 shadow-sm" style="max-width: 100%;">
							<div class="card-header bg-white"><h4 class="skill-content"><b>Softwares</b></h4></div>
							<div class="card-body bg-custom">
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">Adobe Illustrator</span><b style="float:right;">INT</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">Adobe XD</span><b style="float:right;">INT</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">Adobe Photoshop</span><b style="float:right;">BEG</b></p>
								<p class="legend"> <b> - </b> <span class="legend-info" style="font-size: 17px;">Balsamiq Mockup</span><b style="float:right;">BEG</b></p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<center><img src="SVGs/vector-success.svg" alt="Number one" style="float: center;"></center>
					</div>
				</div>
			</div>
		</div>

		<center><hr class="desktop-mode" style="margin-top: 5%; width: 45%"></center>

		<div class="container desktop-mode">
			<div class="row">
				<div class="col-lg-6">
					<h1 class="skills">Projects</h1>
				</div>
			</div>
			<div class="card-columns">

				<!-- Hustle quote -->
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Quote of the Day</h5><hr>
					</div>
					<img style="height: 350px; width: 100%; display: block;" src="images/hustle.jpg" alt="Card image">
					<div class="card-body">
						<p class="card-text">Reminds me of how much I have worked hard, and how much I should.</p>
					</div>
					<div class="card-body">
						Check out more such quotes <a href="https://www.instagram.com/pushkars919/" target="_blank" class="card-link">here.</a>
					</div>
					<div class="card-footer text-muted"><b><code>HUSTLE BEGINS</code></b></div>
				</div>

				<!-- Personal Site v1 - 1 -->
				<div class="card p-3">
					<div class="card-body">
						<h5 class="card-title">Personal Site v1</h5>
						<h6 class="card-subtitle text-muted">My first ever personal site.</h6><hr>
					</div>
					<img style="height: 100px; width: 100%; display: block;" src="SVGs/man.svg" alt="Card image">
					<div class="card-body">
						<p class="card-text">This is my first personal site. I had to mark my web presence and so I got into developing it. It turned out good and my colleagues appreciated it.</p>
					</div>
					<div class="card-body">
						<a href="https://sarafpushkar0796.github.io/Personal-Site/" target="_blank" class="card-link">Site link</a>
					</div>
					<div class="card-footer text-muted"><b>Discovered <code>&lt;PASSION/&gt;</code></b></div>
				</div>

				<!-- D2D Smart Billing System -->
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">D2D Smart Billing System</h5>
						<h6 class="card-subtitle text-muted">Billing made easy.</h6><hr>
					</div>
					<img style="height: 100px; width: 100%; display: block;" src="SVGs/d2d.svg" alt="Card image">
					<div class="card-body">
						<p class="card-text"><b>D2D Smart Billing System - College and University Sponsored<br/> My Role - Project Lead.</b><br/>Billing made easy for your regular monthly supplies, using our web, hybrid app and IOT integration. No more waiting for long queues at billing counter, just scan the products, generate list, make payment and GO! It's that easy.<br/><b>I've designed this logo too.</b></p>
					</div>
					<div class="card-body">
						<a href="http://d2dsmartbillingsystem.000webhostapp.com/" target="_blank" class="card-link">Live link</a>
					</div>
					<div class="card-footer text-muted"><b><code>WIN-WIN</code></b></div>
				</div>

				<!-- C.A.M.S -->
				<div class="card p-3">
					<div class="card-body">
						<h5 class="card-title">C.A.M.S</h5>
						<h6 class="card-subtitle text-muted">Attendance Management</h6><hr>
					</div>
					<img style="height: 100px; width: 100%; display: block;" src="SVGs/cams.svg" alt="Card image">
					<div class="card-body">
						<p class="card-text"><b>C.A.M.S - Centralised Attendance Management System<br/>My Role - Project Lead.</b><br/>Attendance Management made easy, we developed a Android Application that made use of built-in fingerprint scanner to mark attendance of PWD employees working on-site. We achieved this capturing device location and matching it with location of site. <br/><b>I've designed this logo too.</b></p>
					</div>
					<div class="card-footer text-muted"><b><code>WIN-WIN</code></b></div>
				</div>

				<!-- Booklist web app - 2 -->
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Booklist web app</h5><hr>
					</div>
					<img style="height: 100px; width: 100%; display: block;" src="SVGs/open-book.svg" alt="Card image">
					<div class="card-body">
						<p class="card-text">A add book-list application. Where you can add Book name, Author name and an ISBN(any number will work) for your book.<br/> What the application does is, it will add your book to the list and store it to your local storage (on the browser), can be any device on which you are viewing this application.<br/> Now the application you can use to, maybe remind yourself of the books you wish to read. 📖</p>
					</div>
					<div class="card-body">
						<a href="https://sarafpushkar0796.github.io/MyBookListApp/" target="_blank" class="card-link">Site link</a>
					</div>
					<div class="card-footer text-muted"><b><code>LEARNING</code></b></div>
				</div>

				<!-- Contact-list web app - 3 -->
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Contact-list web app</h5><hr>
						<h6 class="card-subtitle text-muted">From LinkedIn post</h6>
					</div>
					<div class="container">
						<center><iframe src="https://www.linkedin.com/embed/feed/update/urn:li:ugcPost:6524209090456018944?compact=1" height="284" width="310" frameborder="0" allowfullscreen="" title="Embedded post"></iframe></center>
					</div>
					<div class="card-body">
						<p class="card-text">It's a simple JQuery based contact list, where you search for a name and it shows up.</p>
					</div>
					<div class="card-body">
						<a href="https://sarafpushkar0796.github.io/JQuery-Contact-List/" target="_blank" class="card-link">Live link</a>
					</div>
					<div class="card-footer text-muted"><b><code>LEARNING</code></b></div>
				</div>

				<!-- Bitcoin Ticker - 4 -->
				<div class="card p-3">
					<div class="card-body">
						<h5 class="card-title">Bitcoin Ticker</h5><hr>
						<h6 class="card-subtitle text-muted">From LinkedIn post</h6>
					</div>
					<div class="container">
						<center><iframe src="https://www.linkedin.com/embed/feed/update/urn:li:ugcPost:6527223427584102400?compact=1" height="284" width="280" frameborder="0" allowfullscreen="" title="Embedded post"></iframe></center>
					</div>
					<div class="card-body">
						<p class="card-text">Project that deals working with the API from <a href="https://bitcoinaverage.com"><u>Bitcoin Average</u></a> It's a simple miniproject that gives you the current rate of Cryptocurrencies by making a API call to BitcoinAverage API and showing you the result.</p>
					</div>
					<div class="card-body">
						<a href="https://bitcointicker.herokuapp.com/" target="_blank" class="card-link">Live link</a>
					</div>
					<div class="card-footer text-muted"><b><code>API</code></b></div>
				</div>

				<!-- Avatars of Shiva - 5 -->
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Avatars of Shiva</h5><hr>
						<h6 class="card-subtitle text-muted">From LinkedIn post</h6>
					</div>
					<div class="container">
						<center><iframe src="https://www.linkedin.com/embed/feed/update/urn:li:ugcPost:6538729063303995392?compact=1" height="284" width="310" frameborder="0" allowfullscreen="" title="Embedded post"></iframe></center>
					</div>
					<div class="card-body">
						<p class="card-text">Being the humblest devotee I decided to create this project named <b>Avatars of Shiva</b>.I've designed this project using - AdobeXD , HTML5, CSS3 and  JavaScript & JQuery.<br/>I have used is the Materialize CSS as a front-end framework created and designed by Google. The workflow was really seamless, I'd highly recommend using Materialize if you love material design.</p>
					</div>
					<div class="card-body">
						<a href="https://sarafpushkar0796.github.io/Avatars-of-Shiva/" target="_blank" class="card-link">Live link</a>
					</div>
					<div class="card-footer text-muted"><b><code>DEVOTION</code></b></div>
				</div>

				<!-- Digital Resume - 6 -->
				<div class="card p-3">
					<div class="card-body">
						<h5 class="card-title">Digital Resume</h5><hr>
						<h6 class="card-subtitle text-muted">From LinkedIn post</h6>
					</div>
					<div class="container">
						<center><iframe src="https://www.linkedin.com/embed/feed/update/urn:li:ugcPost:6551366311237255168?compact=1" height="284" width="280" frameborder="0" allowfullscreen="" title="Embedded post"></iframe></center>
					</div>
					<div class="card-body">
						<p class="card-text">Frankly speaking, everything is digitalized these days, and I think, this can be a great option to check for a candidate on the go.</p>
					</div>
					<div class="card-body">
						<a href="https://sarafpushkar0796.github.io/Digital-Resume/" target="_blank" class="card-link">Live link</a>
					</div>
					<div class="card-footer text-muted"><b><code>SOMETHING NEW</code></b></div>
				</div>

				<!-- Resume redesign - 7 -->
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Resume Redesigned</h5><hr>
					</div>
					<div class="container">
						<img style="height: 100px; width: 100%; display: block;" src="SVGs/resume.svg">
					</div>
					<div class="card-body">
						<p class="card-text">I decided to take my resume and re-create it the way I like it.<br/> I was actually inspired by Google color scheme and font-family.</p>
					</div>
					<div class="card-body">
						<a href="https://www.linkedin.com/posts/pushkar-saraf-72488a157_connections-mondaymotivaton-recruiters-activity-6548852887538233344-l2aX" target="_blank" class="card-link">LinkedIn Link</a>
					</div>
					<div class="card-footer text-muted"><b><code>SOMETHING NEW</code></b></div>
				</div>

				<!-- Landing page design - 8 -->
				<div class="card p-3">
					<div class="card-body">
						<h5 class="card-title">Landing Page design</h5><hr>
						<h6 class="card-subtitle text-muted">From LinkedIn post</h6>
					</div>
					<div class="container">
						<a href="SVGs/Portfolio-Landing-Page@2x.svg"><img style="height: 200px; width: 100%; display: block;" src="SVGs/Portfolio-Landing-Page@2x.svg"></a>
					</div>
					<div class="card-body">
						<p class="card-text">A landing page for my portfolio website, I tried my best to make it interesting, I'm pretty sure it's catchy.<br/> What do you think?<br/> Designed this portfolio landing page with AdobeXD.</p>
					</div>
					<div class="card-body">
						<a href="">LinkedIn post</a>
					</div>
					<div class="card-footer text-muted"><b><code>DESIGN</code></b></div>
				</div>

				<!-- Shri Ram Gurhal - 9 -->
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Shri Ram Gurhal</h5><hr>
					</div>
					<div class="container">
						<a href="images/gurhal-logo.png" target="_blank"><img style="height: 200px; width: 100%; display: block;" src="SVGs/ShriRam-copyright-C.svg"></a>
					</div>
					<div class="card-body">
						<p class="card-text">My first ever commercial project.<br/>The project was logo design for Shri Ram Gurhal<br/>A jaggery and sugar processing business based in Kagal, Kolhapur, Maharashtra.</p>
					</div>
					<div class="card-body">
							<a href="https://www.linkedin.com/posts/pushkar-saraf-72488a157_first-commercial-project-activity-6498175135000948736-GRBs/">LinkedIn post</a>
						</div>
					<div class="card-footer text-muted"><b><code>STEPPING UP</code></b></div>
				</div>

				<!-- App development Logo - 10 -->
				<div class="card p-3">
					<div class="card-body">
						<h5 class="card-title">App development Logo</h5><hr>
					</div>
					<div class="container">
						<a href="images/app-dev.png" target="_blank"><img style="height: 300px; width: 100%; display: block;" src="SVGs/app-dev-logo.svg"></a>
					</div>
					<div class="card-body">
						<p class="card-text">Designed this logo for a club in my college.</p>
					</div>
					<div class="card-body">
							<a href="https://www.linkedin.com/posts/pushkar-saraf-72488a157_connections-logo-adobeillustrator-activity-6522105366346592256-6Kb6">LinkedIn post</a>
						</div>
					<div class="card-footer text-muted"><b><code>DESIGN SKILLS</code></b></div>
				</div>

				<!-- Eco friendly logo - 11 -->
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Eco friendly logo</h5><hr>
					</div>
					<div class="container">
						<a href="images/app-dev.png" target="_blank"><img style="height: 300px; width: 100%; display: block;" src="SVGs/Logo-4x.svg"></a>
					</div>
					<div class="card-body">
						<p class="card-text">Inspired by a local firm whose motive was to build a better environment by treating solid and liquid organic waste by recycling and reusing it.</p>
					</div>
					<div class="card-body">
							<a href="https://www.linkedin.com/posts/pushkar-saraf-72488a157_connections-adobeillustrator-uiux-activity-6557849257645305856-K6EX">LinkedIn post</a>
						</div>
					<div class="card-footer text-muted"><b><code>DESIGN SKILLS</code></b></div>
				</div>

				<!-- Google Authentication - 12 -->
				<div class="card p-3">
					<div class="card-body">
						<h5 class="card-title">Google authentication</h5><hr>
					</div>
					<div class="container">
						<iframe src="https://www.linkedin.com/embed/feed/update/urn:li:ugcPost:6587737620015575040?compact=1" height="284" width="280" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>
					</div>
					<div class="card-body">
						<p class="card-text">OAuth authentication these days have become more popular and the end user trusts the #application when prompted with sign-in with Google or Facebook.</p>
					</div>
					<div class="card-body">
							<a href="https://stark-fortress-45094.herokuapp.com/">Live link</a>
						</div>
					<div class="card-footer text-muted"><b><code>STEPPING UP</code></b></div>
				</div>

				<!-- TinDog PWA -->
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">TinDog</h5><hr>
					</div>
					<div class="container">
						<center><img src="images/logo-152x152.png" style="width: 72px; height: 72px"></center>
					</div>
					<div class="card-body">
						<p class="card-text">A dating app similar to Tinder but for <em>Dogs.</em><br/>It's a PWA - Progressive Web Application works on all platforms.</p>
					</div>
					<div class="card-body">
							<a href="https://sarafpushkar0796.github.io/TinDog-PWA/">Live link</a>
						</div>
					<div class="card-footer text-muted"><b><code>PWA</code></b></div>
				</div>

				<!-- Other design projects -->
				<div class="card p-3">
					<div class="card-body">
						<h5 class="card-title">Other design projects</h5><hr>
					</div>
					<img style="height: 300px; width: 100%; display: block;" src="SVGs/Ninja-Image-2.svg" alt="Card image">
					<div class="card-footer text-muted"><b><code>DESIGN</code></b></div>
				</div>

				<div class="card">
					<img style="height: 500px; width: 100%; display: block;" src="SVGs/Sunset_driver.svg" alt="Card image">
					<div class="card-footer text-muted"><b><code>DESIGN</code></b></div>
				</div>

				<div class="card p-3">
					<img style="height: 300px; width: 100%; display: block;" src="SVGs/Tube1.svg" alt="Card image">
					<div class="card-footer text-muted"><b><code>DESIGN</code></b></div>
				</div>

				<div class="card">
					<img style="height: 500px; width: 100%; display: block;" src="SVGs/Day_in_Light2.svg" alt="Card image">
					<div class="card-footer text-muted"><b><code>DESIGN</code></b></div>
				</div>

				<div class="card p-3">
					<p class="card-text">And more coming...</p>
				</div>
			</div>
		</div>

		<center><hr class="desktop-mode" style="margin: 5% 0 5% 0; width: 45%"></center>

		<div class="container desktop-mode">
			<div class="row">
				<div class="col-lg-12" style="width: 100%">
				<!-- Like the Site -->
				<div class="card bg-light mb-3 shadow-sm bg-white" style="max-width: 100%;">
					<div class="card-header bg-white" style="color: #fd5523;"><h4><b>Liked this site?</b></h4></div>
					<div class="card-body">
						<p class="card-text">Got inspired? Copied the theme? Or do you just like the website?<br/>No problem, make sure you hit the like button and keep me motivated and HAPPY! </p>
					</div>

					<!-- Like button -->
					<form name="refreshForm" action="index.php" method="POST">
						<div class="container">
							<span class="click-text float-right" style="color: #fd5523;padding: 2%"><?php echo $row[0]; ?></span>
							<button id="like" type="submit" name="like" class="btn float-right">
								<img src="SVGs/thumbs-up.svg" alt="like" style="margin-top: 40%">
							</button>
						</div>
						<input id="visited" type="hidden" name="visited" value="" />
					</form>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12" style="width: 100%">
				<div class="card bg-light mb-3" style="max-width: 100%;">
					<div class="card-header bg-white"><h2><b>Contact</b></h2></div>
					<div class="card-body mx-auto">
						<div class="row">
							<div class="col-lg-3">
								<span id="github" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="GitHub" class="card-text con-info"><a href="https://github.com/SarafPushkar0796" target="_blank"><img src="SVGs/github.svg"></a></span>	
							</div>
							<div class="col-lg-3">
								<span id="linkedin" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="LinkedIn" class="card-text con-info"><a href="https://in.linkedin.com/in/pushkar-saraf-72488a157" target="_blank"><img src="SVGs/linkedin.svg"></a></span>	
							</div>
							<div class="col-lg-3">
								<span id="instagram" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Instagram" class="card-text con-info"><a href="https://www.instagram.com/pushkars919/" target="_blank"><img src="SVGs/instagram.svg"></a></span>
							</div>
							<div class="col-lg-3">
								<span id="email" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Email" class="card-text con-info"><a href="mailto:pushkars919@gmail.com?" target="_blank"><img src="SVGs/mail.svg"></a></span>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>

		<!-- Toast -->
		<div class="container mx-auto">
			<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
				<div class="toast-header">
					<strong class="mr-auto">Thankyou for leaving a like.</strong>
					<small class="text-muted">Just now</small>
					<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>

		<!-- Profile info card (mobile view) -->
		<div class="profile-info text-center">
			<h1 id="push-name"><b>Pushkar Saraf</b></h1>
			<p id="push-passion"><b>- Full Stack Web Developer -</b></p>
		</div>

		<!-- Remember Me -->
		<div class="form-group">
		  <input type="text" class="form-control mx-auto" id="inputValid" placeholder="Enter my name here" autofocus>
		  <center>
		  	<p id="why" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="That's how you'll remember me!">Why name?</p>
		  	<button id="go" type="button" class="btn btn-outline-success">Let's Go</button>
		  </center>
		</div>
	</div>

	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<p class="text-center copyright">© 2019-20 Pushkar Saraf | All Rights Reserved.</p>
			<p><b>Made with <code>&lt;PASSION/&gt;</code></b></p>
		</div>
	</footer>

	<!-- Modals -->
	<div class="modal" id="myModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Field cannot be empty.</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal" id="myModal2">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Hmmm, that's not my name.</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!-- JavaScript -->
	<script type="text/javascript">
		
		// Check if page reloaded after clicking on 'like' button
		function checkRefresh() {
			$('.toast').toast('show');
		}

		$(document).ready(function(){

			// tooltip
			$('#why').click(function(){
				$('#why').tooltip('toggle')
			})

			$('#github').hover(function(){
				$('#github').tooltip('toggle')
			})

			$('#linkedin').hover(function(){
				$('#linkedin').tooltip('toggle')
			})

			$('#instagram').hover(function(){
				$('#instagram').tooltip('toggle')
			})

			$('#mail').hover(function(){
				$('#mail').tooltip('toggle')
			})

			// Validate my name
			$('#go').click(function(){
				var myName = 'Pushkar Saraf';
				var name = document.getElementById('inputValid').value;

				if(name == ''){
					$('#myModal').modal('show');
				} else if(name.localeCompare('Pushkar Saraf')) {
					$('#myModal2').modal('show');
				} else {
					setTimeout(function(){
	                    window.location.href='home.php'
	                },1000);
				}
			})

			// Carousel navigation
			$('.prev').click(function(){
				$('.carousel').carousel('prev')
			})

			$('.next').click(function(){
				$('.carousel').carousel('next')
			})

			$('#like').click(function(){
				checkRefresh();
			})

			$(".show-legend").on("click", function() {
				$('.alert').alert();			  
			});
		});
	</script> 
</body>
</html>