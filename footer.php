<?php
  /* 
   * footer.php
   * The footer of each page
   */
?>

	</div><!-- #main  -->

	<footer role="contentinfo">
		<div class=" line follow">	<p>Nous retrouver sur <a target="_blank" href="https://twitter.com/wdstr">@WdStr</a>, <a target="_blank" href="https://twitter.com/search?q=%23wdstr&amp;src=typd">#WdStr</a>, <a href="https://plus.google.com/114838445600189455852" rel="publisher">Google+</a>  et  <a href="http://www.facebook.com/WdStr">Facebook</a></p></div>

		<div class="line footer">	
			<div class="mod w50 left">
				<p>
					Staff :
					<a target="_blank" href="https://twitter.com/walterstephanie">@walterstephanie</a>			
					<a target="_blank" href="https://twitter.com/eToileGraphic">@eToileGraphic</a>
          <a target="_blank" href="https://twitter.com/Coralie__LM">@Coralie__LM</a>
          <a target="_blank" href="https://twitter.com/aureliensesmat">@aureliensesmat</a>
          <a target="_blank" href="https://twitter.com/CloTemesvari">@clotemesvari</a>
          <a target="_blank" href="https://twitter.com/iamhiwelo">@iamhiwelo</a>
          <a target="_blank" href="https://twitter.com/geoffrey_crofte">@geoffrey_crofte</a>
				</p>
			</div>

			<div class="mod w50 left subscribe" id="mc_embed_signup">
				<form action="http://wdstr.us6.list-manage1.com/subscribe/post?u=9cf2c87b61a3d62c1a2887452&amp;id=11425f9500" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    					<div style="position: absolute; left: -5000px;">
                <input type="text" name="b_9cf2c87b61a3d62c1a2887452_11425f9500" tabindex="-1" value="" />
          		</div>
					<label for="mce-EMAIL">Me tenir informé(e) par mail de la date du prochain apéro</label>
					<div class="line">
						<input type="email" value="" name="EMAIL" class="email w70 mod left" id="mce-EMAIL" placeholder="Adresse e-mail" required>
						<input type="submit" value="Souscrire" name="subscribe" id="mc-embedded-subscribe" class="button w30 mod left">
					</div>
				</form>
			</div>
		</div>
	</footer>
</div>

<div class="line extra-footer">
	<div class="footer-menu">
	<a class="left" href="http://wdstr.fr/feed/?post_type=event">RSS des événements</a>
	<?php wp_nav_menu( array( 'container_class' => '', 'theme_location' => 'footer' ) ); ?>
	</div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41148055-1', 'wdstr.fr');
  ga('send', 'pageview');

</script>

</body>
</html>