<?php if ($ustawienia_www['menu']['0'] == "fixed1"): ?>
  <script>
  // Script
  jQuery(window).on('scroll',function() {
      var scroll = jQuery(window).scrollTop();
      if(scroll > 0) {
          jQuery("header").addClass("active");
      } else {
          jQuery("header").removeClass("active");
      }
  });

  </script>
<?php else: ?>
  <script>
  // Script
  var lastScroll = 0;
  jQuery(window).on('scroll',function() {
      var scroll = jQuery(window).scrollTop();
      if(lastScroll - scroll > 0) {
          jQuery("header").addClass("active");
      } else {
          jQuery("header").removeClass("active");
          jQuery("header").addClass("firstScroll");
      }
      if(scroll == 0) {
        jQuery("header").removeClass("firstScroll");
        jQuery("header").removeClass("active")
      }
      lastScroll = scroll;
  });

  </script>
<?php endif; ?>
