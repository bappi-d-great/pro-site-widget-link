<?php
add_action( 'wp_footer', 'make_clickable_image_in_pro_badge' );
function make_clickable_image_in_pro_badge() {
    $link = "YOUR_DESIRED_LINK";
    ?>
    <script type="text/javascript">
      jQuery(function($){
          $('.psts_widget')
            .css({
              'cursor': 'pointer'
            })
            .click(function() {
              window.location.href = '<?php echo $link; ?>';
            });
      });
    </script>
    <?php
}
