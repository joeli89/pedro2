<?php include('inc/password_protect.php'); ?>
<?php include('inc/projects.php'); ?>
<?php 
$pageTitle = "Home";
include("inc/header.php");
include("inc/index-nav.php"); ?>



	<!-- Begin Hero -->
	<div class='jumbotron <?php 
				$bgimgs = array("hero", "hero2", "hero3", "hero4");
				$rand_keys = array_rand($bgimgs);
				echo $bgimgs[$rand_keys];
				?> 
				clearfix' data-top-bottom="background-position: 50% -200px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target=".ticker h1">
		<!-- Content -->
		<div class="container center-vertically heading">
			<img src="img/logo/logo1.png">
			<div class="ticker">
				<h1>Pedro Casafranca</h1>
			</div>
			<hr>
			<a href="#" data-id="section2" class="btn btn-default bolt-button-light scroll-link" style="margin-top:10px;">
				Portfolio &nbsp;&nbsp;<span class="ion-ios7-arrow-down"></span>
			</a>
		</div>

	</div>
	<!-- End Hero -->

	<!-- Begin Summary -->
	<section id="section1">
	
		<div class="summary">

			<div class="container">

				<!-- Content -->
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1" >
						<h3 data-scroll-reveal="enter left and move 50px over 1.2s">A Bespoke Artisan From Trinidad.</h3>
						<hr data-scroll-reveal>
						<p data-scroll-reveal>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum mauris at sollicitudin lacinia. Vestibulum blandit nibh neque, id consequat mi vestibulum eu. Suspendisse potenti. Ut ac consequat nulla. Praesent tristique eleifend tincidunt.</p>
						<a data-scroll-reveal="enter right and move 50px over 1.2s" href="#" data-id="section3" class="btn btn-default bolt-button-dark scroll-link">
							About Me &nbsp;&nbsp;<span class="ion-ios7-arrow-down"></span>
						</a>
					</div>
				</div>

			</div>

		</div>

	</section>
	<!-- End Summary -->



	<!-- Begin Portfolio -->
	<section id="section2">

		<div class="container portfolio">

			<!-- Page Title -->
			<div class="row page-title-2">
				<div class="col-lg-12">
					<h3>Gallery</h3>
					<hr>
					<p>List of my projects</p>
				</div>
			</div>

			<!-- Gallery Filter -->
			<div data-scroll-reveal="enter left and move 50px over 1s" class="container text-center">
			  <ul class="nav nav-pills">
			    <li class="filter" data-filter="all">all</li>
			    <li class="filter" data-filter="woodwork">Woodwork</li>
			    <li class="filter" data-filter="metal">Metal Work</li>
			    <li class="filter" data-filter="other">Other</li>
			  </ul>
			</div> 

			<!-- Gallery Items -->
			<div class="container port-holder">
			  <ul id="myPortfolio" class="no-padding">

			  	<?php 
			  	
			 	foreach($projects as $project_id =>  $project) {; ?>

				    <li class='item col-xs-4 no-padding <?php echo $project["category"]; ?>'>
				    	<a href='project.php?id=<?php echo $project_id; ?>'>
							<img src='<?php echo $project["img-thumb"]; ?>' alt='<?php echo $project["name"]; ?>' />
							<span class="portfolio-hover">
							  <span>
							  	<span class="portfolio-title"><?php echo $project["name"]; ?></span><br>
							  	<span class="portfolio-category"><?php echo $project["category"]; ?></span>
							  </span>
							</span>
						</a>
				    </li>

			    <?php } ?>
			  </ul>
			</div>

		</div>

	</section>
	<!-- End Portfolio -->





	<!-- Begin Call to Action -->
	<div class="cta">

		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-lg-offset-1">
					<p>
						Interested in working with me?
					</p>
				</div>
				<div class="col-lg-2">
					<a href="#" data-id="section6" class="btn btn-default bolt-button-cta scroll-link">
						Contact
					</a>
				</div>
				<div class="col-lg-4">
					<p>
						Ready when you are.
					</p>
				</div>
			</div>

		</div>

	</div>
	<!-- End Call to Action -->

	<!-- Begin About Us -->
	<section id="section3">

		<div class="about">

			<div class="container">

				<div class="row">

					<!-- Page Title -->
					<div class="col-lg-10 col-lg-offset-1 page-title-2">
						<h3>About</h3>
						<hr>
						<p>A crazy motherfucker with shit loads of creative talent. Don't like it? Fuck you!</p>
					</div>

					<!-- Who We Are-->
					<div data-scroll-reveal="enter top and move 50px over 1.2s" class="col-sm-4 col-sm-offset-1">
						<h5>Who I Am</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi.</p>
					</div> 

					<!-- Goals -->
					<div data-scroll-reveal="enter bottom and move 50px over 1.2s" class="col-sm-6">
						<h5>My Vision</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum mauris at sollicitudin lacinia. </p>
					</div>

					

				</div>

			</div>

		</div>

	</section>
	<!-- End About Us -->


	<!-- Begin Contact -->
	<section id="section6">

		<div class="contact">

			<div class="container">

				<!-- Page Title -->
				<div class="col-lg-10 col-lg-offset-1 page-title">
					<h3>Contact</h3>
					<hr>
					<p>Get in touch with me.</p>
				</div>


				<!-- Address -->
				<div class="col-md-5 col-md-offset-1">
					<p class="contact-info">
						<a href="https://www.google.com.hk/maps/place/68A+High+St/@51.393114,-0.44865,17z/data=!3m1!4b1!4m2!3m1!1s0x48767435d48ca6d7:0x751e0f0b6ad7a392" target="_blank"><em>Trinidad & Tabago</em></a>
					</p>
				</div>

				<!-- Phone Number -->
				<div class="col-md-2">
					<p class="contact-info">123456789</p>
				</div>

				<!-- Email -->
				<div class="col-md-3">
					<p class="contact-info-email"><a href="mailto:info@68adesigns.com"><em>pedrocasafranca@gmail.com</em></a></p>
				</div>

				<?php 
				if($_GET["status"] == "thanks") { ?>

					<div class="col-md-12 thanks-message">
						<h1><i class="ion-ios7-paperplane"></i></h1>
						<h2>I got your message. Muchas Gracias Homie.</h2>
						<h2>I'm gunna eat some <i class="ion-pizza" style="font-size: 40px;"></i> &amp; drink a <i class="ion-beer" style="font-size: 40px;"></i> then i'll get back to you soon.</h2>
						
					</div>
					
				<?php } else { ?>

		    <div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-3">
				
				<!-- Form -->
				<form id="defaultForm" name="contactform" method="post" action="php/mailer.php" class="form-horizontal" role="form">

					<div class="form-group" data-scroll-reveal="enter top and move 50px over 1.5s">
                            <div class="col-lg-8">
                               	<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Full Name"/>
                            </div>
                            
                        </div>

                        <div class="form-group" data-scroll-reveal="enter bottom and move 50px over 1.5s">

                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="email"/>
                            </div>
                        </div>

                      
                        	<div class="form-group" data-scroll-reveal="enter top and move 50px over 1.5s">
								<div class="col-md-8">
									<input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject" data-required="true">
								</div>
							</div>
							<div class="form-group" data-scroll-reveal="enter bottom and move 50px over 1.5s">
								<div class="col-lg-8">
									<textarea class="form-control form-control-message" rows="5" id="inputMessage" name="inputMessage" placeholder="Message"></textarea>
								</div>
							</div>
						<div data-scroll-reveal="enter top and move 50px over 1.7s" class="form-group">
							<div class="col-lg-2 ">
								<button type="submit" class="btn btn-default bolt-button-send">
									Send
								</button>
							</div>
						
						</div>

				</form>

					</div>
				</div>
			</div>

				<?php } ?>

			</div>

		</div>

	</section>
	<!-- End Contact -->

<?php include('inc/footer.php'); ?>