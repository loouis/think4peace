		<!-- footer -->
		<footer class="footer" role="contentinfo">

		<div class="main-wrapper">

			<!-- <div class="social-links">
				<ul>
					<li><a href="#"><svg version="1.1" id="facebook-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 800 800" enable-background="new 0 0 800 800" xml:space="preserve"><path fill="#999999" id="facebook-icon" d="M400-1C178.7-1,0,177.7,0,399s178.7,400,400,400s400-178.7,400-400S621.3-1,400-1z M541.3,223h-2.7h-45.3c-26.7,0-37.3,5.3-45.3,13.3c-8,10.7-5.3,26.7-5.3,26.7v64H536l-13.3,93.3h-80v240H344v-240h-82.7V327H344v-85.3c0-53.3,40-93.3,85.3-104c45.3-10.7,112,0,112,0V223z"/></svg></a></li>
					<li><a href="#"><svg version="1.1" id="twitter-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 -14 800 800" enable-background="new 0 -14 800 800" xml:space="preserve"><path fill="#999999" id="twitter-icon" d="M592,247.3c13.3,2.7,45.3-8,58.7-13.3c-8,10.7-26.7,32-50.7,48c0,18.7,5.3,213.3-194.7,288c-149.3,56-258.7-26.7-258.7-26.7s88,8,149.3-42.7c-18.7,0-80-13.3-96-69.3c8,2.7,29.3,5.3,45.3,0c-13.3-5.3-82.7-29.3-82.7-104c10.7,5.3,18.7,10.7,48,13.3c-16-13.3-69.3-61.3-32-136c0,0,72,96,216,104c-2.7-16-8-90.7,69.3-120c64-24,106.7,26.7,106.7,26.7s29.3,0,69.3-24C640,210,597.3,244.7,592,247.3 M800,386c0-221.3-178.7-400-400-400S0,164.7,0,386s178.7,400,400,400S800,607.3,800,386"/></svg></a></li>
				</ul>
			</div> -->

			<?php if(is_front_page() ) {?>

			<ul class="nav-links">
				<li class="nav-links__the-challenge"><a href="#" data-scroll-nav='1'>The Challenge</a></li>
				<li class="nav-links__the-schools"><a href="#" data-scroll-nav='2'>The Schools we work with</a></li>
				<li class="nav-links__the-methodology"><a href="#" data-scroll-nav='3'>The Methodology</a></li>
				<li class="nav-links__the-benefits"><a href="#" data-scroll-nav='4'>The Benefits</a></li>
				<li class="nav-links__blog"><a href="#">Blog</a></li>
				<li class="nav-links__contact"><a href="#">Contact</a></li>
			</ul><?php

			}else{?>
				<ul class="nav-links">
					<li class="nav-links__the-challenge"><a href="<?php bloginfo(url);?>/#the-challenge">The Challenge</a></li>
					<li class="nav-links__the-schools"><a href="<?php bloginfo(url);?>/#the-schools">The Schools we work with</a></li>
					<li class="nav-links__the-methodology"><a href="<?php bloginfo(url);?>/#the-methodology">The Methodology</a></li>
					<li class="nav-links__the-benefits"><a href="<?php bloginfo(url);?>/#the-benefits">The Benefits</a></li>
					<li class="nav-links__blog"><a href="<?php bloginfo(url);?>/#blog">Blog</a></li>
					<li class="nav-links__contact"><a href="#">Contact</a></li>
				</ul><?php
			}?>

			<!-- copyright -->
			<p class="copyright">
				&copy;<?php bloginfo('name'); ?>  <?php echo date('Y'); ?>
			</p>
			<!-- /copyright -->
		</div>

		</footer>
		<!-- /footer -->

		<?php wp_footer(); ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
		
	</body>
</html>