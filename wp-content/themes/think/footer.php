		<!-- footer -->
		<footer class="footer" role="contentinfo">

		<div class="main-wrapper">

			<div class="founders-faces">
				<ul>
					<li><img src="<?php bloginfo(template_url);?>/img/founder-2-footer.jpg" alt="founder"></li>
					<li><img src="<?php bloginfo(template_url);?>/img/founder-1-footer.jpg" alt="founder1"></li>
				</ul>
			</div>

			<?php if(is_front_page() ) {?>

			<ul class="nav-links">
				<li class="nav-links__the-challenge"><a href="#" data-scroll-nav='1'>The Challenge</a></li>
				<li class="nav-links__the-schools"><a href="#" data-scroll-nav='2'>The Schools we work with</a></li>
				<li class="nav-links__the-methodology"><a href="#" data-scroll-nav='3'>The Methodology</a></li>
				<li class="nav-links__the-benefits"><a href="#" data-scroll-nav='4'>The Benefits</a></li>
				<li class="nav-links__the-testimonials"><a href="#" data-scroll-nav='5'>Testimonials</a></li>
				<li class="nav-links__blog"><a href="#" data-scroll-nav='6'>Blog</a></li>
				<li class="nav-links__contact"><a href="#">Contact</a></li>
			</ul><?php

			}else{?>
				<ul class="nav-links">
					<li class="nav-links__the-challenge"><a href="<?php bloginfo(url);?>/#the-challenge">The Challenge</a></li>
					<li class="nav-links__the-schools"><a href="<?php bloginfo(url);?>/#the-schools">The Schools we work with</a></li>
					<li class="nav-links__the-methodology"><a href="<?php bloginfo(url);?>/#the-methodology">The Methodology</a></li>
					<li class="nav-links__the-benefits"><a href="<?php bloginfo(url);?>/#the-benefits">The Benefits</a></li>
					<li class="nav-links__the-testimonials"><a href="<?php bloginfo(url);?>/#quotes">Testimonials</a></li>
					<li class="nav-links__blog"><a href="<?php bloginfo(url);?>/#blog">Blog</a></li>
					<li class="nav-links__contact"><a href="#">Contact</a></li>
				</ul><?php
			}?>

			<!-- copyright -->
			<p class="copyright">
				&copy;<?php echo date('Y'); ?> <?php bloginfo('name'); ?> for Peace is a Project of the Tim Parry Johnathan Ball Foundation for Peace
			</p>
			<!-- /copyright -->
		</div>

		</footer>
		<!-- /footer -->

		<?php wp_footer(); ?>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-61088968-1', 'auto');
		  ga('send', 'pageview');

		</script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
		<script src="http://www.youtube.com/iframe_api"></script>
	</body>
</html>