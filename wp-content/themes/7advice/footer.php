<?php wp_footer(); ?>
<div class="container">
<?php
 /*  wp_nav_menu(

    array(
         'theme_location'=>'footer-menu', 
        'menu'=>'top bar',
        'menu_class'=>'footer-bar', 
    )
  ); */
?> 
</div>
<script>
 $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll < 300){
            $('.fixed-top').css('background', 'transparent');
        } else{
            $('.fixed-top').css('background', 'rgba(23, 162, 184, 0.9)');
        }
    });

</script>
</body>
</html>