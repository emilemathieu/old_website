<!DOCTYPE HTML>

<html>
	<head>
		<title>Emile MATHIEU</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
        
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/noscript.css" />
		</noscript>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
    
    
<?php
if ( isset($_POST['message']) AND isset($_POST['subject']) AND isset($_POST['name']) AND isset($_POST['email']) )
{

    
$mail = 'emile.mathieu@eleves.enpc.fr'; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = $_POST['message'];
$message_html = "<html><head></head><body>Vous avez reçu un message via le formulaire de contact de votre site perso de la part de " .$_POST['name']. ":" .$passage_ligne. "<i>" . $_POST['message'] . "</i></body></html>";
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = $_POST['subject'];
//=========
 
//=====Création du header de l'e-mail.
$header = "From: \" ".$_POST['name']." \"<".$_POST['email'].">".$passage_ligne;
$header.= "Reply-to: \" ".$_POST['name']." \" <".$_POST['email'].">".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
 
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
//==========
    
}


?>
    
	<body class="homepage">

		<!-- Wrapper-->
			<div id="wrapper">
				
				<!-- Nav -->
					<nav id="nav">
						<a href="#me" class="fa fa-home active"><span>Home</span></a>
						<a href="#cv" class="fa fa-university"><span>CV</span></a>
                        <a href="#work" class="fa fa-pencil-square-o"><span>Work</span></a>
						<a href="#email" class="fa fa-envelope"><span>Email Me</span></a>
					</nav>

				<!-- Main -->
					<div id="main">
						
						<!-- Me -->
							<article id="me" class="panel">
								<header>
									<h1>Emile MATHIEU</h1>
									<span class="byline">Student-Engineer at Ecole Nationale <br/>des Ponts et Chaussées</span>
								</header>
								<a href="#cv" class="jumplink pic">
									<span class="arrow fa fa-chevron-right"><span>See my work</span></span>
									<img src="images/me.jpg" alt="" />
								</a>
							</article>

						<!-- cv --> 
							<article id="cv" class="panel center">
								
									<h2>Education</h2>
                                    <ul>
                                        <li><i>Since 2013 - </i> Student in second grade in the mathematics & computer science department at Ecole Nationale des Ponts et Chaussées ParisTech </li>
                                        <li> <i>2011-2013 - </i>2-year intensive program preparing for the national competitive exam for entry to engineering schools at Lycée Clémenceau, Nantes </li>

                                        <li> <i>2010 - </i>High school diploma with honors</li>
                                    </ul>
                                <div class="sexy_line"></div>
                                	<h2>Student and work experience</h2>
                                    <ul>
                                        <li><i>March 2008 - </i>Work experience at AIA (Architects Engineers Associated), Nantes </li>
                                        <li><i>September 2013 - </i>Work experience in a building site as a worker at ETPO (West Public Works Company)</li>
                                        <li><i>April-July 2014 - </i>Intership on data mining at a research institute (IFSTTAR) </li>
                                        <li><i>Since March 2014 - </i>Treasurer of the Sport Association of ENPC </li>
                                    </ul>
                                <div class="sexy_line"></div>
                                    <h2>Professional skills</h2> <br/>
                                    <h3>English - Fluent</h3>
                                    <ul>
                                        <li><i>July 2007 - </i>Immersion stay in a british family</li>
                                        <li><i>July & August of 2009 & 2010 - </i>Immersion stay in two different american families</li>
                                        <li><i>July 2012 - </i>Intensive course in Oxford</li>
                                    </ul>
                                    <div class="sexy_line_small"></div>

                                    <h3>Spanish - Moderate</h3>
                                    <ul>
                                        <li><i>March 2009 - </i>Immersion stay in an argentine family</li>
                                    </ul>
                                
                                      <div class="sexy_line_small"></div>

                                    <h3>Computer science skills</h3>
                                    <ul>
                    
                                        <li>Microsoft Office<i> - Okay</i></li>
                                        <li>iWork<i> - Good</i></li>
                                        <li>Maple<i> - Good</i></li>
                                        <li>Matlab<i> - Good</i></li>
                                        <li>C++<i> - Good</i></li>
                                        <li>Python<i> - Good</i></li>
                                        <li>R<i> - Good</i></li>
                                        <li>Network Knowledge<i> - Okay</i></li> 
                                        <li>HTML5/CSS3 <i> - Good</i></li>
                                        <li>PHP/MySQL<i> - Good</i></li>
                                        <li>Javascript<i> - Good</i></li>
                                        <li>AngularJS<i> - Learning</i></li>
                                        
                                    </ul>
                                <div class="sexy_line"></div>
                                    <h2>References</h2>
                                    <p>References available upon request</p>
                                <div class="sexy_line"></div>
                                    <h2>Miscellaneous</h2>
                                    <ul>
                                        <li>Drum player for 10 years</li>
                                        <li>Treasurer of the music club at ENPC</li>
                                        <li>Food & wine tasting organizer</li>
                                        <li>Volleyball player, champion Paris school "excellence" tournament</li>
                                    </ul>
                                 <div class="sexy_line"></div>
                                    <h2>Downloadable Curriculum Vitae</h2>
                                     <ul>
                                        <li><a class="dotted" href=http://www.emilemathieu.me/data/CV_anglo-saxon_Emile.pdf target="_blank">Curriculum Vitae (International)</a></li>
                                        <li><a class="dotted" href=http://www.emilemathieu.me/data/CV_Emile.pdf target="_blank">Curriculum Vitae (French)</a></li>
                                        
                                    </ul>

                                
                                
								<!--<p>
									Phasellus enim sapien, blandit ullamcorper elementum eu, condimentum eu elit. 
									Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia 
									luctus elit eget interdum.
								</p>
								<section class="is-gallery">
									<div class="row half">
										<div class="4u">
											<a href="http://flypixel.com/knob/3495684098026313" class="image image-full"><img src="images/1.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/contact-login-form/8829734266026310" class="image image-full"><img src="images/2.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/wallpaper-pack/3755398966026313" class="image image-full"><img src="images/3.jpg" alt=""></a>
										</div>
									</div>
									<div class="row half">
										<div class="4u">
											<a href="http://flypixel.com/44-shades-of-free-icons/8268508056006318" class="image image-full"><img src="images/4.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/flip-clock/3655053956026317" class="image image-full"><img src="images/5.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/dropdown/5290304620795313" class="image image-full"><img src="images/6.jpg" alt=""></a>
										</div>
									</div>
									<div class="row half">
										<div class="4u">
											<a href="http://flypixel.com/pie-charts/1759361594616314" class="image image-full"><img src="images/7.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/sliding-selector-bar/7042935581006315" class="image image-full"><img src="images/8.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/dark-as-hell-ui/5418809286006313" class="image image-full"><img src="images/9.jpg" alt=""></a>
										</div>
									</div>
									<div class="row half">
										<div class="4u">
											<a href="http://flypixel.com/cityscape/9803996277226316" class="image image-full"><img src="images/10.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/dropdown/8259263378026313" class="image image-full"><img src="images/11.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/wood-ui-kit/3574765984616310" class="image image-full"><img src="images/12.jpg" alt=""></a>
										</div>
									</div>
									<div class="row half">
										<div class="4u">
											<a href="http://flypixel.com/upload-button/9737964647895311" class="image image-full"><img src="images/13.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/collapsible-menunavigation/5743165610406316" class="image image-full"><img src="images/14.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/3d-button/5506786525606318" class="image image-full"><img src="images/15.jpg" alt=""></a>
										</div>
									</div>
								</section> -->
							</article>

                        <!-- Work -->
							<article id="work" class="panel center">
				                <p>				
									<h2><i class="fa fa-pencil"></i>  Written works</h1>
                                <ul>        
                                    <li><a class="dotted" href=http://www.emilemathieu.me/data/Emile_MATHIEU_Rapport_Scientifique_light.pdf target="_blank">Science internship report (April-July 2014)</a></li>
                                </ul>
                                </p>
                                <p>
									<h2><i class="fa fa-cloud"></i>  Online works</h2>
                                    <ul>        
                                    <li><a class="dotted" href=http://mobilletic.ifsttar.fr/mathieue/atNight/ target="_blank">atNight</a></li>
                                    <li><a class="dotted" href=http://mobilletic.ifsttar.fr/mathieue/TributeToTobler/ target="_blank">TributeToTobler</a></li>
                                    </ul>
                                </p>

							</article>
                        
						<!-- Email -->
							<article id="email" class="panel center">
								<header>
									<h2><i class="fa fa-paper-plane-o"></i>  Email Me </h2>
                                    <?php
                                        if ( isset($_POST['message']) AND isset($_POST['subject']) AND isset($_POST['name']) AND isset($_POST['email']) )
{
                                            echo '<h3> <i class="fa fa-check" >Your message has been seent, thank you !</i></h3>';
                                        }
                                    ?>
                                    
								</header>
								<form action="index.php#email" method="post">
									<div>
										<div class="row half">
											<div class="6u">
												<input type="text" class="text" name="name" placeholder="Name" required/>
											</div>
											<div class="6u">
												<input type="email" class="text" name="email" placeholder="Email adress" required/>
											</div>
										</div>
										<div class="row half">
											<div class="12u">
												<input type="text" class="text" name="subject" placeholder="Subject" /required>
											</div>
										</div>
										<div class="row half">
											<div class="12u">
                                                <input type="textarea" class="textarea" name="message" placeholder="Type your message" required/>
												<!--<textarea name="message" placeholder="Message"></textarea> -->
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="submit" class="button" value="Send Message" />
											</div>
										</div>
									</div>
								</form>
							</article>

					</div>
		
				<!-- Footer -->
					<div id="footer">
						<ul class="links">
							<li>&copy; Emile MATHIEU</li>
						</ul>
					</div>
		
			</div>

	</body>
        

                                                                                            
</html>
                                                                                             
                                                                                         