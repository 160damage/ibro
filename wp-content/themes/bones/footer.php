			<!-- <footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer> -->

			<footer class="footer">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-4">
	          <div class="widget">
	            <h4 class="widget__title">О нас</h4>
	            <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
	<p>Телефон: +1 234 567 89 10</p>
	<p>Email: company@example.com</p>
	          </div>
	          </div>
	          <div class="col-md-4">
	          <div class="widget">
	            <h4 class="widget__title">Наши адресса</h4>
	          <p>г.Саки ул.Какаято 25 <br>
	Тел: +797812312323 <br>
	<a href="#">Показать на карте</a></p>

	<p>г.Евпатория уд.какаято 2 <br>
	Тел: +797832131233 <br>
	<a href="#">Показать на карте</a></p>
	          </div>
	          </div>
	          <div class="col-md-4">
	              <div id="vk_groups"></div>
	              <script type="text/javascript">
	                  VK.Widgets.Group("vk_groups", {mode: 0, width: "360", height: "300", color1: '231f20', color2: 'FFFFFF', color3: '5B7FA6'}, 14662235);
	              </script>
	          </div>
	        </div>
	        <div class="row">
	         <div class="col-md-12">
	           <nav class="footer-menu">
	              <ul class="footer-menu__ul">
	              <li class="footer-menu__li"><a href="" class="footer-menu__link">Оплата и доставка</a></li>
	              <li class="footer-menu__li"><a href="" class="footer-menu__link">Ремонт и сервис</a></li>
	              <li class="footer-menu__li"><a href="" class="footer-menu__link">Вакансии</a></li>
	              <li class="footer-menu__li"><a href="" class="footer-menu__link">Гарантия</a></li>
	              <li class="footer-menu__li"><a href="" class="footer-menu__link">Обратная связь
	</a></li>
	            </ul>
	           </nav>
	          </div>
	          <div class="col-ls-12">
	            <p class="footer__copyright">© 2016 iBro-store, all rights reserved</p>
	          </div>
	        </div>
	      </div>
	    </footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
