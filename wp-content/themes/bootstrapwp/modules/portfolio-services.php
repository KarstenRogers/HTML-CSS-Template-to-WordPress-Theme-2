<?php
/**
 * The template for displaying search results pages.
 *
 * @package bootstrapwp
 */

get_header(); ?>

<?php $bg_img = rwmb_meta('dwp_banner_image', 'type=image');

$bg_url = '';

if (count($bg_img) > '0' ) {
	foreach ($bg_img as $img) {
		$bg = "{$img['full_url']}";
		$bg_url = "background-image: url('" . $bg . "');";
	}
}
?>


<div class="container">
			<div class="page-content">
				<div class="row">
					<div class="col-lg-12 ">
						
							 
					<!-- PORTFOLIO IMAGE 1 -->
					<div class="col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio01.jpg" alt="">
								<figcaption>
									<h5>DASHBOARD</h5>
									<a href="single-portfolio.html" class="btn btn-primary btn-lg">Take a Look</a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->
					
					<!-- PORTFOLIO IMAGE 2 -->
					<div class="col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio02.jpg" alt="">
								<figcaption>
									<h5>UI DESIGN</h5>
									<a href="single-portfolio.html" class="btn btn-primary btn-lg">Take a Look</a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->
					
					<!-- PORTFOLIO IMAGE 3 -->
					<div class="col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio03.jpg" alt="">
								<figcaption>
									<h5>ANDROID PAGE</h5>
									<a href="single-portfolio.html" class="btn btn-primary btn-lg">Take a Look</a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->
			

					<!-- PORTFOLIO IMAGE 4 -->
					
					<div class="col-md-4 ">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio04.jpg" alt="">
								<figcaption>
									<h5>PROFILE</h5>
									<a href="single-portfolio.html" class="btn btn-primary btn-lg">Take a Look</a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->
					
					<!-- PORTFOLIO IMAGE 5 -->
					<div class="col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio05.jpg" alt="">
								<figcaption>
									<h5>TWITTER STATUS</h5>
									<a href="single-portfolio.html" class="btn btn-primary btn-lg">Take a Look</a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->
					
					<!-- PORTFOLIO IMAGE 6 -->
					<div class="col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="assets/img/portfolio/folio06.jpg" alt="">
								<figcaption>
									<h5>PHONE MOCKUP</h5>
									<a href="single-portfolio.html" class="btn btn-primary btn-lg">Take a Look</a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->
	
					</div><!-- col-lg-4 -->	
				</div><!-- row -->
			</div>
		</div>
	