<?php

/*
Template Name: one_page_scroll
*/

get_header(); ?>
	

	<section id="welcome" class="section-test">

		<div class="main-wrapper">
			
			<?php $welcome = new WP_Query("page_id=36"); 

			while($welcome->have_posts()) : $welcome->the_post();?>

			<div class="left-column">
				<div class="row1 text-video">
					<div class="one--third">

					<?php echo the_field('opening_left_text')?>

					</div>

					<div class="two--thirds" id="play-video">
						<div class="play-button-container">
							<div class="video-play-btn">
								<svg version="1.1" id="icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 19.9 19.9" enable-background="new 0 0 19.9 19.9" xml:space="preserve"><polygon fill="#009cd6" points="5.5,1.7 5.5,18.2 18.8,9.9 "/>
								</svg>
							</div>
						</div>

						<img src="<?php the_field('video_placeholder_image'); ?>" alt="Play think video">		
				
					</div>
				</div>
				
				<div class="row2 row__3column">

					<div class="one--third m-right">
						<img src="<?php the_field('welcome__row-one-first-third')?>" alt="Foundation for peace - Founder">
					</div>
					<div class="one--third">
						<img src="<?php the_field('welcome__row-one-second-third')?>" alt="Foundation for peace - Founder">
					</div>
					<div class="one--third hide">
						<?php the_field('welcome__row-one-third-third');?>
					</div>

				</div>

				<div class="row3">
					<div class="one--third">
						<img src="<?php the_field('welcome__row-two-one-third');?>" alt="Foundation for peace - logo">
					</div>

					<div class="two--thirds">
						<img src="<?php the_field('welcome__row-two-two-thirds');?>" alt="Foundation for peace - Founder">
					</div>
				</div>

			</div>

			<div class="right-column">
				<!-- hink svg -->
				<span class="hink">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 283.4 800 233.2" enable-background="new 0 283.4 800 233.2" xml:space="preserve"><path fill="#B2B2B2" d="M252.8,310.7l19.7-20v221.9h-20V310.7H252.8z M274,283.4l-25.5,25.5v207.7h27.3l25.5-25.5V283.4H274z"/><path fill="#B2B2B2" d="M721.3,422.6l11.3-20l49.5,88.2l-11.3,20L721.3,422.6z M668.9,416.8L729,311.1l34.2-20l-74.3,130.8v67.4l-20,20V416.8z M644.4,310.7l20-20v221.9h-20V310.7z M768.3,283.4l-43,24.8L692.9,365v-81.6h-27.3l-25.5,25.5v207.7h27.3l25.5-25.5v-60.5l48.8,86h30.6l14.9-26.2l-51.7-92.2L800,283.4H768.3z"/><path fill="#B2B2B2" d="M396,310.7l20-20v221.9h-20V310.7z M501.6,310.7l20-20v221.9h-25.5l-51.7-117.7v-49.2l56.8,129V310.7H501.6zM522.8,283.4l-25.5,25.5v86l-49.2-111.5h-31l-25.5,25.5v207.7h27.3l25.5-25.5v-86l48.8,111.5h31l25.5-25.5V283.4H522.8z"/><path fill="#B2B2B2" d="M105.6,398.2v-20H51.7l-20,20H105.6z M24,402.2V290.7l-19.7,20v201.8h20v-90.3H110v90.3h20V290.7l-20,20c0,30.2-0.7,61.9-0.7,91.8H24V402.2z M52.8,426.2v64.8l-25.5,25.5H0V308.9l25.5-25.5h27.3v90.3h52.8v-64.8l25.5-25.5h27.3v207.7L133,516.6h-27.3v-90.3H52.8z"/></svg>
				</span>
				<span class="large-type" data-anchor-target="#welcome" data-150-top="transform: translate(0px, 35px);" data-top-bottom="transform: translate(0px,-300px);">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 560 560" enable-background="new 0 0 560 560" xml:space="preserve"><path fill="#009BD6" d="M227.5,123.7l47.8-48.5v473.9h-47.8V123.7z M126.3,68h141.8l-47.8,48.5H78.5L126.3,68z M343.3,68h138.2L433,116.5h-89.7V68z M71.3,65.1L119,17.4v43.4l-47.8,48.5V65.1z M121.9,0L61.1,60.8v65.8h156.3v432.7h65.1l60.8-60.8V126.6h94.1l61.5-61.5V0H121.9z"/></svg>
				</span>
				<div class="tblue"><?php the_field('main_text');?>
			</div>

		</div><!-- /main wrapper -->

		<?php endwhile; ?>

		<?php wp_reset_query();?>

	</section>




	<!-- The Challenges section -->
	<section id="the-challenge" class="section-test" data-scroll-index='1'>

		<div class="main-wrapper">

			<div class="left-column">
				<div class="row1 text-video">
					<div class="one--third section-title">

					<?php $the_challenge = new WP_Query("page_id=6"); 

						while($the_challenge->have_posts()) : $the_challenge->the_post();?>

   							<h2><?php the_field('page_title')?></h2> 

							<p><?php the_field('sub_title');?></p>

					</div>

					<div class="two--thirds">
						
						<img src="<?php the_field('opening_image');?>" alt="">
					</div>
				</div>
				
				<div class="row2 row__3column">

					<div class="one--third m-right">
						<img src="<?php the_field('row1__first-one-third');?>" alt="">
					</div>
					<div class="one--third">
						<img src="<?php the_field('row1__second-one-third');?>" alt="">
					</div>
					<div class="one--third">
						<span class="large-type" data-anchor-target="#the-challenge" data-150-top="transform: translate(0px, 150px);" data-top-bottom="transform: translate(0px,-300px);">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="128.5 -1 542.2 800" enable-background="new 128.5 -1 542.2 800" xml:space="preserve"><path fill="#009BD6" d="M490.7,392.2v-69.4H305.5l-69.4,69.4H490.7z M211.3,406.8V23.9l-68.4,68.3v692.3h68.4V475h294v309.4h68.4V23.9l-68.4,68.4c0,103.4-2,212.2-2,314.5L211.3,406.8L211.3,406.8z M309.7,489.5v222.6l-88,86.9h-93.2V86l86.9-87h94.1v309.4h181.1V86l86.9-87h93.1v713l-86.9,87h-93.1V489.5H309.7z"/></svg>
						</span>
					</div>

				</div>

				<div class="row3">
					<div class="one--third">
						<p><?php the_field('row2__first-one-third');?></p>
					</div>

					<div class="two--thirds">
						<img src="<?php the_field('row2__second-two-thirds');?>" alt="">
					</div>
				</div>

			</div>

			<div class="right-column">

				<div class="tblue">
					<?php the_field('main_text');?>
				</div>
			</div>

		</div><!-- /main wrapper -->

		<?php endwhile; ?>
		<?php wp_reset_query();?>

	</section><!-- //The challenge -->


	<!-- schools we work with -->
	<section id="the-schools" data-scroll-index='2' class="large-text-i-parent">

		<div class="main-wrapper">

			<div class="full-width">

				<div class="left-column">
					<div class="row1 text-video">
					
					<?php $the_challenge = new WP_Query("page_id=48"); 
					while($the_challenge->have_posts()) : $the_challenge->the_post();?>

						<div class="one--third section-title">
							<h2 class="tblue"><?php the_field('schools__title')?></h2> 
							<p><?php the_field('schools__sub_title');?></p>
						</div>

						<div class="two--thirds">
							<h4 class="tblue">
								<?php the_field('schools__opening_text');?>
							</h4>
						</div>
					</div>
				</div>

				<div class="right-column">
					<img src="<?php the_field('schools__opening-right-image');?>" alt=""> 
				</div>

			</div>

			<div class="left-column">
			
				<div class="row2 row__3column">

					<div class="one--third m-right">
						<img src="<?php the_field('schools__row-one-one-third');?>" alt=""> 
					</div>

					<div class="one--third blank-container hide">&nbsp;</div>

					<div class="one--third">
						<img src="<?php the_field('schools__row-one-third-third');?>" alt=""> 
					</div>

				</div>

				<div class="row3">
					<div class="one--third blank-container hide">&nbsp;</div>

					<div class="two--thirds">
						<!-- Letter i-->
						<span class="large-type letter-i" data-anchor-target="#the-schools" data-150-top="transform: translate(0px, 150px); " data-top-bottom="transform: translate(0px,-300px);">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="311 0 180.9 799" enable-background="new 311 0 180.9 799" xml:space="preserve"><path fill="#009BD6" d="M325.4,93l68.3-68.3v759.7h-68.3V93z M397.9,0L311,86.9V799h93l87.9-86.9V0H397.9z"/></svg>
						</span>

						<img src="<?php the_field('schools__row-two-two-thirds');?>" alt=""> 
					</div>
				</div>

			</div>

			<div class="right-column">
				<div class="one--half hide">
					<img src="<?php the_field('schools__right-col__second-image');?>" alt="">
				</div>

				<div class="school-text">
					<?php the_field('schools__right-col__text-1')?>

					<?php the_field('schools__right-col__text-2')?>
				</div>
			</div>

		<?php endwhile;?>

		<?php wp_reset_query();?>

		</div><!-- /main wrapper -->

	</section><!-- //schools we work with -->


	<!-- Methodology -->
	<section id="the-methodology" data-scroll-index='3'>
		<div class="main-wrapper">

		<?php $meth = new WP_Query("page_id=57");
		while($meth->have_posts()) : $meth->the_post();?>


			<div class="full-width">
				<ul>
					<li class="one--fifth section-title">
						<h2><?php the_field('meth__title');?></h2> 
						<p><?php the_field('meth__sub-title');?></p>
					</li>
					<li class="one--fifth">
						<div class="number">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="3.7 108.8 794.9 552.3" enable-background="new 3.7 108.8 794.9 552.3" xml:space="preserve"><path fill="#009BD6" d="M427.7,236.8l100.7-100.7v502.5h-45.7V222.9l-55,55V236.8z M534.9,648.3l57.3-57.3V119.9h-61.4L418,232.6V294h54.5v354.2H534.9L534.9,648.3z M183.9,539.8c-32.8,0-59.6-26.8-59.6-59.6v-194c0-30,27.2-57.3,59.6-57.3c32.8,0,60,27.2,60,60v194C242.1,514.3,216.2,539.8,183.9,539.8 M14.4,507.4V288c0-82.2,58.2-150.6,136.2-166.3c-54,23.1-91,76.7-91,139v247.1c0,53.1,43.9,97,97,97s97-43.9,97-97V288.5c0-38.3-31.4-69.7-69.7-69.7c-25.4,0-46.6,12.9-58.7,32.8c4.6-43.9,41.1-78.5,86.4-78.5c48.5,0,87.8,39.7,87.8,87.8v247.1c0,78.5-64.2,142.3-142.3,142.3C78.1,649.7,14.4,586.4,14.4,507.4 M156.6,659.4h27.2c99.3,0,179.2-79.9,179.2-179.2V260.8c0-84.1-67.4-152-151.5-152h-27.7C85,108.8,4.7,188.7,4.7,288v219.4C4.7,591.5,72.6,659.4,156.6,659.4"/></svg>
						</div>
						<p><?php the_field('meth__number-1-text');?></p>
					</li>
					<li class="one--fifth">
						<div class="number">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="5.1 127.1 789.4 544.4" enable-background="new 5.1 127.1 789.4 544.4" xml:space="preserve"><path fill="#009BD6" d="M501.6,309h41.5l-45.1,44.7h-40.5L501.6,309z M494.7,302.6L450,347.3v-42.4c0-82,58-148.8,130.3-163.5c-50.7,23-85.7,79.7-85.7,136.3L494.7,302.6L494.7,302.6z M510.8,597.3l45.1-45.1h222.5l-44.7,45.1H510.8z M450,526.9c0-115.6,94-141.4,148.8-156.6c52-14.7,86.6-27.6,86.6-76.9c0-35.9-28.6-56.6-62.2-56.6c-25.8,0-50.7,14.7-64,35.9c3.2-44.7,40.5-81.1,85.7-81.1c47.9,0,85.2,40.1,85.2,102.2c0,84.3-58,102.2-117,118.4c-59,17-118.4,34.5-118.4,115.6v79.7h236.7v44.7H450V526.9z M794.1,292.9c0-108.2-67.7-165.8-149.2-165.8h-27.2c-98.1,0-177.3,78.3-177.3,177.3v59h61.3l57.6-56.6c0-35.9,31.8-60.8,64-60.8c28.6,0,52.5,17,52.5,47.4c0,41.5-27.2,52.5-79.2,67.7c-58,17-156.1,43.8-156.1,166.3v134h297.5l56.6-56.6v-62.2H558.7v-15.7c0-29.9,8.3-35,69.5-52C691.4,457.3,794.1,429.7,794.1,292.9 M182.4,553.1c-32.2,0-59-26.3-59-59V302.6c0-29.9,27.2-56.6,59-56.6c32.2,0,59.4,27.2,59.4,59.4v192.1C240,528.3,214.2,553.1,182.4,553.1 M14.8,521.4V304.4c0-81.1,57.6-148.8,134.5-164.4c-53.4,23-89.8,76-89.8,137.2v244.1c0,52.5,43.3,95.8,95.8,95.8s95.8-43.3,95.8-95.8V304.9c0-37.8-31.3-69.1-69.1-69.1c-24.9,0-46.1,12.9-58,32.2c4.6-43.3,40.5-77.8,85.2-77.8c47.9,0,86.6,39.1,86.6,86.6v244.1c0,77.8-63.6,140.5-140.5,140.5C77.9,661.8,14.8,599.2,14.8,521.4 M155.3,671.5h27.2c98.1,0,177.3-79.2,177.3-177.3V277.3c0-83.4-66.8-150.1-150.1-150.1h-27.2C84.3,127.6,5.1,206.3,5.1,304.4v216.9C5.1,604.7,72.4,671.5,155.3,671.5"/></svg>
						</div>
						<p><?php the_field('meth__number-2-text');?></p>
					</li>
					<li class="one--fifth">
						<div class="number">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="2.5 122.1 794.5 552.8" enable-background="new 2.5 122.1 794.5 552.8" xml:space="preserve"><path fill="#009BD6" d="M499.7,306.9h41.8l-46,45.5h-41.4L499.7,306.9z M499.7,469.1h41.8l-46,48.7h-41.8L499.7,469.1z M492.8,274.7V300l-45.5,45.5v-43.2c0-82.3,58.4-151.2,136.5-166.8C530.5,159.4,492.8,212.2,492.8,274.7 M617.8,564.6c27.6,0,45.5-11,57.9-26.2c-6.9,41.4-42.7,72.1-85,72.1c-47.3,0-86.4-39.1-87.8-85.9l46-48.2v18.4C548.4,533.4,579.2,564.6,617.8,564.6 M741.4,515c0-72.1-50.1-120.9-112.6-120.9h-43.2l45.5-46c32.2-1.8,55.6-26.2,55.6-57.9c0-36.3-28.9-57.9-63.4-57.9c-26.2,0-51.5,15.2-65.2,36.3c3.2-46,41.4-82.3,87.3-82.3c48.7,0,86.4,42.7,86.4,95.6c0,31.7-10.1,60.7-31.7,83.2c51.5,26.7,87.3,80.4,87.3,141.5c0,84.5-61.1,144.3-139.2,155.8C703.7,637.2,741.4,579.8,741.4,515 M590.2,674.9h27.6c99.7,0,179.2-68.5,179.2-168.2c0-41.4-15.2-78.1-40-108c24.8-29.4,40-67.1,40-108.4c0-109.4-67.1-168.2-151.6-168.2h-27.6c-99.7,0-180.1,80.4-180.1,180.1V362h62l58.4-57.9c0-37.2,33.1-62,65.2-62c28.9,0,53.8,17,53.8,48.2c0,26.7-21.1,48.2-50.1,48.2l-57.9,58.4v62h59.7c26.7,0,48.2,21.1,48.2,48.2c0,24.8-23.4,48.2-59.3,48.2c-33.1,0-59.7-26.7-59.7-59.7v-35.8h-62.5l-57.9,60.7C437.7,609.2,505.7,674.9,590.2,674.9 M182.2,555c-33.1,0-59.7-26.7-59.7-59.7V300c0-30.3,27.6-57.9,59.7-57.9c33.1,0,60.7,27.6,60.7,60.7V498C240.5,529.3,214.8,555,182.2,555 M12.2,522.8V302.3c0-82.7,58.4-151.2,136.5-167.3c-54.2,23.4-91.4,77.2-91.4,139.7v248.1c0,53.8,44.1,97.4,97.4,97.4s97.4-44.1,97.4-97.4V302.7c0-38.6-31.7-69.8-69.8-69.8c-25.3,0-46.9,12.9-59.3,33.1c4.6-44.1,41.4-79,86.4-79c48.7,0,87.8,40,87.8,87.8v248.1c0,79-64.8,142.9-142.9,142.9C76,665.3,12.2,601.4,12.2,522.8 M154.6,674.9h27.6c99.7,0,180.1-80.4,180.1-180.1V274.2c0-84.1-68-152.1-152.6-152.1h-27.6c-99.3,0-179.7,80.4-179.7,180.1v220.6C2.5,606.9,70.5,674.9,154.6,674.9"/></svg>
						</div>
						<p><?php the_field('meth__number-3-text');?></p>
					</li>
					<li class="one--fifth">
						<div class="number">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="3.7 108.8 794.9 552.3" enable-background="new 3.7 108.8 794.9 552.3" xml:space="preserve"><path fill="#009BD6" d="M623.1,366.6v55.6h-27.6L623.1,366.6z M740.3,431.9h41.8l-46,46h-41.4L740.3,431.9z M514.6,477.8l74-46h34.5v46H514.6z M678.7,255.4v232.1h54.7V533h-54.7v107.5h-46V533H441.1v-50.5l150.3-300.1l74-45.5L489.8,487.5h142.9V347.8L678.7,255.4zM798.6,484.7v-62.5H743V119.9h-67.1L584,175.5L431.5,480.6v61.6h191.2v107.5h62.5l57.4-57.4v-52.8L798.6,484.7z M183.3,540.8c-33.1,0-59.7-26.7-59.7-59.7V286.7c0-30.3,27.6-57.4,59.7-57.4c33.1,0,60.2,27.6,60.2,60.2v194.8C241.7,515.5,215.5,540.8,183.3,540.8 M13.3,508.6V288.5c0-82.3,58.4-150.7,136.5-166.8c-54.2,23.4-91.4,77.2-91.4,139.2v247.7c0,53.3,44.1,97.4,97.4,97.4s97.4-43.7,97.4-97.4V289.4c0-38.6-31.7-69.8-69.8-69.8c-25.3,0-46.9,12.9-58.8,33.1c4.6-44.1,41.4-79,86.4-79c48.7-0.5,87.8,39.5,87.8,87.3v247.7c0,79-64.3,142.9-142.9,142.9C76.7,651.5,13.3,587.6,13.3,508.6M155.8,661.2h27.6c99.3,0,179.7-80.4,179.7-179.7V260.9c0-84.1-68-152.1-152.1-152.1h-27.6c-99.7,0-179.7,80.4-179.7,179.7v220.1C3.7,593.2,71.7,661.2,155.8,661.2"/></svg>
						</div>
						<p><?php the_field('meth__number-4-text');?></p>
					</li>
				</ul>
			</div><!-- /Full-width -->

			
			<div class="left-column">

				<div class="row1">
					<div class="one--third">
						<?php the_field('meth__left-col__row-one-left-text')?>
					</div>

					<div class="one--third">
						<img src="<?php the_field('meth__left-col__row-one-right-img');?>" alt="">

						<!-- Letter n-->
						<span class="large-type letter-n" data-anchor-target="#the-methodology" data-150-top="transform: translate(0px, 50px); " data-top-bottom="transform: translate(0px,-100px);">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 560 560" enable-background="new 0 0 560 560" xml:space="preserve"><path fill="#009BD6" d="M100.2,65.2l47.8-47.8v532.7h-47.8V65.2z M353.9,65.2l47.8-47.8v532.7h-60.9L216.9,268.2V149.3l137,309.5V65.2z M404.7,0l-60.9,60.9v206.6L225.6,0H151L90.1,60.9v499.4h65.2l61.6-60.9V292.8l117.4,267.5H409l60.9-60.9V0H404.7z"/></svg>
						</span>
					</div>

					<div class="one--third blank-container hide">&nbsp;</div>
				</div>

				<div class="row2">

					<div class="one--third blank-container hide">&nbsp;</div>

					<div class="one--third hide">
						<img src="<?php the_field('meth__left-col__row-two-left-img');?>" alt="">
					</div>

					<div class="one--third">
						<?php the_field('meth__left-col__row-two-right-text');?>
					</div>

				</div>

			</div><!-- //left column -->

			<div class="right-column">
				
				<?php the_field('meth_right-col__text');?>

				<img src="<?php the_field('meth_right-col__large-img');?>" alt="">

				<div class="sessions-consist-of">
					<?php the_field('meth_sessions_list');?>
				</div>

			</div>

		<?php endwhile; ?>

		<?php wp_reset_query();?>

		</div>
	</section>	<!-- //Methodology -->
	
	<!-- The benefits -->
	<section id="the-benefits" data-scroll-index='4'>
		<div class="main-wrapper">

		<?php $benefits = new WP_Query("page_id=66");
		while($benefits->have_posts()) : $benefits->the_post();?>

			<div class="full-width">
				<div class="left-column">
					<div class="section-title">
						<h2><?php the_field('benefits__title');?></h2> 
						<p><?php the_field('benefits__sub-title')?></p>
					</div>

					<h4 class="tblue"><?php the_field('benefits__opening-text')?></h4>

				</div><!-- //left column -->

				<div class="right-column">
					<img src="<?php the_field('benefits__right-col__large-image'); ?>" alt="Play think video">
				</div>

			</div><!-- //main-wrapper -->

			<div class="left-column">
				
				<div class="one--third">
					<?php the_field('benefits__left-col__row-one-heading');?>
				</div>

				<div class="one--third">

					<div class="think-benefits">
						<?php the_field('benefits__middle-col__thinking-skills');?>
					</div>

					<div class="think-benefits">
						<?php the_field('benefits__middle-col__extremism');?>
					</div>

				</div>

				<div class="one--third">

					<div class="think-benefits">
						<?php the_field('benefits__right-col__conflict');?>
					</div>

					<div class="think-benefits">
						<?php the_field('benefits__right-col__self-aware');?>
					</div>

					<div class="think-benefits">
						<?php the_field('benefits__right-col__network-leaders');?>
					</div>

				</div>

			</div><!-- //left-column -->

			<div class="right-column">
				<!-- Letter k-->
				<span class="large-type letter-n" data-anchor-target="#the-benefits" data-150-top="transform: translate(0px, 200px); " data-top-bottom="transform: translate(0px,-500px);">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 560 560" enable-background="new 0 0 560 560" xml:space="preserve"><path fill="#009BD6" d="M292.5,334l27.5-48.5L438.9,497l-26.8,47.8L292.5,334z M166.5,320.2L310.6,66.6l82.6-48.5L215,332.5v162.3l-48.5,47.8V320.2z M108.5,65.2l47.8-47.8v532.5h-47.8V65.2z M405.5,0L302.7,59.4l-77.5,136.9V0h-65.9L98.4,60.9V560h65.2l61.6-60.9V353.5L341.8,560H415l35.5-63L325.9,275.3L481.6,0H405.5z"/></svg>				
				</span>
				<img src="<?php bloginfo(template_url);?>/img/the-schools-person-2.jpg" alt="">
			</div>

		<?php endwhile;?>
		<?php wp_reset_query();?>

		</div>

		<!-- Quotes -->
		<section id="quotes">

		<?php $quotes = new WP_Query('page_id=140');
		while($quotes->have_posts()) : $quotes->the_post(); ?>

			<div class="main-wrapper">

				<div class="left-column">

				<div class="section-title">
						<h2><?php the_field('test_title')?></h2> 
						<p><?php the_field('sub_title');?></p>
					</div>
				
					<div class="row2 row__3column">

						<div class="one--third">
							<?php the_field('one_left_testimonial');?>
						</div>

						<div class="one--third">
							<img src="<?php the_field('one_left_testimonial_image');?>" alt="">
						</div>

						<div class="one--third blank-container hide">&nbsp;</div>

					</div>

					<div class="row3">
						<div class="one--third">
							<?php the_field('third_bottom_testimonial');?>
						</div>

						<div class="two--thirds">

							<span class="large-type" data-anchor-target="#quotes" data-400-top ="transform: translate(0px, 50px); " data-top-bottom="transform: translate(0px,-300px);">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 560 560" enable-background="new 0 0 560 560" xml:space="preserve"><path fill="#009BD6" d="M292.5,334l27.5-48.5L438.9,497l-26.8,47.8L292.5,334z M166.5,320.2L310.6,66.6l82.6-48.5L215,332.5v162.3l-48.5,47.8V320.2z M108.5,65.2l47.8-47.8v532.5h-47.8V65.2z M405.5,0L302.7,59.4l-77.5,136.9V0h-65.9L98.4,60.9V560h65.2l61.6-60.9V353.5L341.8,560H415l35.5-63L325.9,275.3L481.6,0H405.5z"/></svg>
							</span>

							<img src="<?php the_field('third_bottom_testimonial_image');?>" alt="">
						</div>
					</div>

				</div>

				<div class="right-column">
					<div class="school-text">
						<?php the_field('two_right_testimonial');?>
					</div>
					<div class="one--half hide">
						<img src="<?php the_field('two_right_testimonial_image');?>" alt="">
					</div>
				</div>
				
			</div>
		</section>
		<!-- // Quotes -->

	<?php endwhile;?>
	<?php wp_reset_query();?>

	</section>	<!-- //The benefits -->




	<!-- Blog -->
	<section id="blog" data-scroll-index='5'>

		<div class="main-wrapper">
			<div class="blog-left-column one-fifth section-title">
				<h2>Blog</h2>
				<p>News/what people say</p>
			</div>

			<div class="blog-right-column four-fifths">

				<!-- Blog post loop -->
				<?php query_posts( 'get_posts' ); ?>

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<article class="one-half blog" id="post-<?php the_ID(); ?>">

					<?php if ( has_post_thumbnail()) :?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(433,380));?>
						</a>
					<?php endif; ?>

					<!-- hover over blog section -->
					<a href="<?php the_permalink(); ?>">
						<div class="blog__hover">

							<h2><?php the_title(); ?></h2>

							<time class="date"><?php the_time('d.m.Y'); ?></time>

							<div class="think-arrow">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="184.6 0 429.4 800" enable-background="new 184.6 0 429.4 800" xml:space="preserve"><path fill="#ffffff" d="M494.8,397.3L296.6,32.5l145.1,87.6l152.2,277.2L441.7,677.4L298,762.1L494.8,397.3z M206.1,706.1l169.5-308.8L206.1,87l64.6-63.2l203.9,373.4L272.2,770.7L206.1,706.1z M272.2-2l-87.6,87.6L354,398.7L184.6,710.4l87.6,87.6l0,0l182.4-107.7L614,398.7l0,0L456,108.6L272.2-2z"/></svg>
							</div>
						</div>
					</a>
		
				</article>

				<?php endwhile; ?>

				<?php endif; ?>
				<!-- //Blog post loop -->
				<?php wp_reset_query();?>
			</div>
		</div><!-- //main wrapper -->
	</section><!-- //blog -->


	<!-- Lightbox video -->
	<section id="lightbox-video" class="lightbox">
		<div class="close-container"></div>

		<?php $welcome = new WP_Query('page_id=36');

			while($welcome->have_posts()) : $welcome->the_post();?>

		<div class="lightbox-wrapper">
			<iframe width="560" height="315" src="<?php the_field('video_link');?>" frameborder="0" allowfullscreen></iframe>
		</div>

		<?php endwhile;?>

		<?php wp_reset_query();?>
	</section><!-- /lightbox video -->

	<!-- Lightbox video -->
	<section id="contact-form" class="contact-lightbox lightbox">
		<div class="close-container"></div>

		<div class="lightbox-wrapper">
			<?php echo do_shortcode('[contact-form-7 id="99" title="Contact form"]')?>		
		</div>
	</section><!-- /lightbox video -->


<?php get_footer(); ?>


