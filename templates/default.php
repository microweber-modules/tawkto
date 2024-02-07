<?php

/*

  type: layout

  name: Default

  description: default


*/
?>
<div>

    <?php
    if ($style == 'popup_text'):
    ?>


        <script>
            mw.require('https://assets.calendly.com/assets/external/widget.css', true);
            mw.require('https://assets.calendly.com/assets/external/widget.js', true);
        </script>

        <!-- Calendly link widget begin -->
        <button type="button" class="btn <?php echo $button_style; ?> <?php echo $button_size; ?>" onclick="Calendly.initPopupWidget({url: '<?php echo $link; ?>?hide_event_type_details=1&hide_gdpr_banner=1&background_color=<?php echo $background_color;?>&text_color=<?php echo $text_color;?>&primary_color=<?php echo $primary_color;?>'});return false;">
            <?php echo $button_text; ?>
        </button>
        <!-- Calendly link widget end -->



    <?php
    else:
    ?>

        <script>
            mw.require('https://assets.calendly.com/assets/external/widget.js', true);
        </script>

        <!-- Calendly inline widget begin -->
        <div class="calendly-inline-widget" data-url="<?php echo $link; ?>?hide_event_type_details=1&hide_gdpr_banner=1&background_color=<?php echo $background_color;?>&text_color=<?php echo $text_color;?>&primary_color=<?php echo $primary_color;?>" style="min-width:320px;height:700px;"></div>
        <!-- Calendly inline widget end -->
    <?php
    endif;
    ?>


</div>
