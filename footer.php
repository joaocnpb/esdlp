<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package esdlp
 */

?>

	</div><!-- #content -->

	 <footer>
        <div class="columns float-left large-push-1 large-2 medium-push-2 small-push-2"><img id="logofooter" src="<?php echo get_theme_mod( 'logo' ) ?>" alt="logo branco ESD"></div>
        <div class="columns float-left large-push-2 large-3 medium-push-2 small-push-2">
            <p id="moradafooter"><span id="esdfooter">Escola Superior de Design</span>
                <br id="campusfooter">Campus do IPCA
                <br> Vila Frescaínha S. Martinho
                <br> 4750 - 810 Barcelos
                <br> Portugal
                <br>
                <br> (+351) 253 802 266
                <br> esd@ipca.pt</p>
        </div>
        <div class="columns float-left large-push-3 large-3 medium-6 medium-push-2 small-push-2"><div class="socialmedia"><a href="" target="_blank"><img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/css/imgs/fb.svg"></a><a href="" target="_blank"><img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/css/imgs/googleplus.svg"></a><a href="" target="_blank"><img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/css/imgs/flickr.svg"></a><a href="" target="_blank"><img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/css/imgs/twitter.svg"></a><a href="" target="_blank"><img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/css/imgs/soundcloud.svg"></a></div></div>
        <div class="columns large-10 large-push-1"><div id="footerborder"></div></div>
        <div class="columns large-4 large-push-7 medium-8 medium-push-3 small-9 small-push-2"><div id="attribute"><p>IPCA - Instituto Politécnico do Cávado e do Ave © 2017<br>Design e Desenvolvimento por João Barroso</p></div></div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
 <script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/framework/js/vendor/jquery.js" type="text/javascript"></script>
     <script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/framework/js/vendor/what-input.js" type="text/javascript"></script>
     <script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/framework/js/vendor/foundation.js" type="text/javascript"></script>
     <script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/framework/js/app.js" type="text/javascript"></script>
     <script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/framework/js/app.js" type="text/javascript"></script>
     <script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/plugins/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
    <script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/js/scripts.js" type="text/javascript"></script>
</body>
</html>
