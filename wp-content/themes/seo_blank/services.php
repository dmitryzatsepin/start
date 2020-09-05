<?
	get_header();
?>

<!-- Service section start -->
<div class="section primary-section" id="service">
	<div class="container">
		<!-- Start title section -->
		<div class="title">
			<h1><?php the_field('our_services_title');?></h1>
			<!-- Section's title goes here -->
			<p><?php the_field('our_services_desc');?></p>
			<!--Simple description for section goes here. -->
		</div>
		<div class="row-fluid">
			<div class="span4">
				<div class="centered service">
					<div class="circle-border zoom-in">
						<img class="img-circle" src="<?php the_field('website_promotion_img');?>" alt="service 1" />
					</div>
					<h3><?php the_field('website_promotion_title');?></h3>
					<p><?php the_field('website_promotion_desc');?></p>
				</div>
			</div>
			<div class="span4">
				<div class="centered service">
					<div class="circle-border zoom-in">
						<img class="img-circle" src="<?php the_field('se_adv_img');?>" alt="service 1" />
					</div>
					<h3><?php the_field('se_adv_title');?></h3>
					<p><?php the_field('se_adv_desc');?></p>
				</div>
			</div>
			<div class="span4">
				<div class="centered service">
					<div class="circle-border zoom-in">
						<img class="img-circle" src="<?php the_field('graph_design_img');?>" alt="service 4" />
					</div>
					<h3><?php the_field('graph_design_title');?></h3>
					<p><?php the_field('graph_design_desc');?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Service section end -->

<?php
	get_footer();
?>