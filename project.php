<?php include("inc/projects.php"); 

if(isset($_GET["id"])) {
	$project_id = $_GET["id"];
	if(isset($projects[$project_id])) {
		$product = $projects[$project_id];
	}
}
if(!isset($product)) {
	header("Location: index.php");
	exit();
}


$pageTitle = $project["name"];
include("inc/header.php");
include("inc/project-nav.php"); 
?>

	<!-- Begin Hero -->
	<div class="jumbotron <?php echo $product["heading"]; ?> clearfix" data-top-bottom="background-position: 50% -200px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target=".ticker h1">

		<!-- Content -->
		<div class="container center-vertically heading">
			<img src="img/logo/logo1.png">
			<div>
				<h2><?php echo $product["name"]; ?></h2>
			</div>
			<hr>
			<a href="#" data-id="section2" class="btn btn-default bolt-button-light scroll-link" style="margin-top:10px;">
				Gallery &nbsp;&nbsp;<span class="ion-ios7-arrow-down"></span>
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
						<p data-scroll-reveal>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum mauris at sollicitudin lacinia. Vestibulum blandit nibh neque, id consequat mi vestibulum eu. Suspendisse potenti. Ut ac consequat nulla. Praesent tristique eleifend tincidunt.</p>
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
					<h3><?php echo $product["name"]; ?></h3>
					<hr>
				
				</div>
			</div>

			<!-- Portfolio Items -->
			<div class="container port-holder">
			  <ul id="myPortfolio" class="no-padding">

			  	<?php foreach($product["images"] as $image_id => $image) { ; ?>

				     <li class="item col-xs-4 no-padding">
				    	<a data-toggle="modal" href='#' data-target='#<?php echo $image_id; ?>'>
							<img src='<?php echo $image["img-main"]; ?>' alt="..." />
							<span class="portfolio-hover">
							  <span>
							  	<span class="portfolio-title"><?php echo $image["name"]; ?></span><br>
							  	<span class="portfolio-category"><?php echo $image["material"]; ?></span>
							  </span>
							</span>
						</a>
				    </li>
				    	<!-- Modal -->
							<div class="modal fade" id='<?php echo $image_id; ?>' role="dialog" aria-hidden="true">
							    <div class="modal-dialog modal-lg">
							        <div class="modal-content">
							            <div class="modal-body">
							            	<img src='<?php echo $image["img-main"]; ?>'>
								                 <div class="col-md-12 text-center">
								                    <button type="button" class="close modal-close-button text-center" data-dismiss="modal" aria-hidden="true">&times;</button>
								                </div>
								                <h4><?php echo $image["name"]; ?></h4>
								                <h5><?php echo $image["material"]; ?></h5>
								                <p class="subtitle"><?php echo $image["description"]; ?></p>
								               <!--  <p class="subtitle"><?php echo $image["text"]; ?></p> -->
							            </div>
							        </div> <!-- /.modal-content -->
							    </div> <!-- /.modal-dialog -->
							</div> <!-- /.modal -->

			    <?php } ?>

			  </ul>
			</div>

		</div>

	</section>
	<!-- End Portfolio -->








<?php include("inc/footer.php"); ?>