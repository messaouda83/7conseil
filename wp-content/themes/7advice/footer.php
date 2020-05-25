<?php wp_footer(); ?>
<div class="container">
<?php
  wp_nav_menu(

    array(
        'theme_location'=>'footer-menu',
        //'menu'=>'top bar',
        'menu_class'=>'footer-bar',
    )
  );
?>
</div>
</body>
</html>