<?php

event_bind('mw.front', function () {

    $settings = get_option('settings', 'tawkto');
    if($settings) {
        $json = json_decode($settings, true);
    }

    mw()->template->foot("

    <!--Start of Tawk.to Script-->
<script type=\"text/javascript\">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/65a92ac60ff6374032c1c9de/1hkecu639';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

    ");

});
