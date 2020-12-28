<?php
function ensis_assets() {
  wp_enqueue_style( 'ensis-stylesheet', get_template_directory_uri() . '/dist/css/bundle.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'fontello', get_template_directory_uri() . '/dist/fontello/css/ensis.css', array(), '1.0.0', 'all' );
   wp_enqueue_script( 'ensis-scripts', get_template_directory_uri() . '/dist/js/bundle.js', array('jquery'), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'ensis_assets');


//image sizes
// ustawianie wielkosci obrazow
add_image_size('auto', 0, 0, array( 'center', 'center' ));
add_image_size('icon', 0, 50);
add_image_size('profile', 223, 223, array( 'center', 'center' ));
add_image_size('timeline', 0, 370);
add_image_size('logo', 180, 0);
add_image_size('fullSize', 1920, 0, array( 'center', 'center' ));
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
  'page_title' 	=> 'Opcje',
  'menu_title'	=> 'Opcje',
  'menu_slug' 	=> 'opcjeTheme',
  'capability'	=> 'edit_posts',
  'redirect'		=> false
));

}

function ensis_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'ensis' ),
		'mobile'   => __( 'Mobile Menu', 'ensis' ),
		'footer'   => __( 'Services', 'ensis' ),
    'footer2'  => __( 'Company', 'ensis' ),
	);

	register_nav_menus( $locations );
}
add_action( 'init', 'ensis_menus' );

// cookies
function cookies() {
  ?>


  <script type="text/javascript">


  //All the cookie setting stuff
  function SetCookie(cookieName, cookieValue, nDays) {
   "use strict";
   var today = new Date();
   var expire = new Date();
   if (nDays == null || nDays == 0) nDays = 1;
   expire.setTime(today.getTime() + 3600000 * 24 * nDays);
   document.cookie = cookieName + "=" + escape(cookieValue) + ";expires=" + expire.toGMTString() + "; path=/";
  }

  function ReadCookie(cookieName) {
   "use strict";
   var theCookie = " " + document.cookie;
   var ind = theCookie.indexOf(" " + cookieName + "=");
   if (ind == -1) ind = theCookie.indexOf(";" + cookieName + "=");
   if (ind == -1 || cookieName == "") return "";
   var ind1 = theCookie.indexOf(";", ind + 1);
   if (ind1 == -1) ind1 = theCookie.length;
   return unescape(theCookie.substring(ind + cookieName.length + 2, ind1));
  }

  function DeleteCookie(cookieName) {
   "use strict";
   var today = new Date();
   var expire = new Date() - 30;
   expire.setTime(today.getTime() - 3600000 * 24 * 90);
   document.cookie = cookieName + "=" + escape(cookieValue) + ";expires=" + expire.toGMTString();
  }

  function AcceptCookies() {
   SetCookie('sgCookies', true, 30);
   jQuery("#cookie-bar").hide();

  }


  jQuery(document).ready(function (e) {
    var toTop = jQuery("<div id='cookie-bar'> <p>We use information saved using cookies to ensure maximum convenience in using our website. By continuing to use the site, you agree to their use<button id='Cookie' class='cookie-button' tabindex=1 onclick='AcceptCookies();'>Close</button> </div>").appendTo("body");



  if (!ReadCookie("sgCookies")) { //If the cookie has not been set
       jQuery("#cookie-bar").show();

   } else {
       jQuery("#cookie-bar").hide();


   }
   });

</script>

  <?php
}


?>
