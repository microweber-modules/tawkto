<?php

event_bind('mw.front', function () {

    $directChatLink = get_option('direct_chat_link', 'tawkto');
    // check url is valid
    if (filter_var($directChatLink, FILTER_VALIDATE_URL)) {

        $parseDirectChatLink = str_replace("http://tawk.to/chat/","", $directChatLink);
        $parseDirectChatLink = str_replace("https://tawk.to/chat/","", $parseDirectChatLink);
        
        if (!empty($parseDirectChatLink)) {
            mw()->template->foot("

                    <!--Start of Tawk.to Script-->
                <script type=\"text/javascript\">
                    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                    (function(){
                        var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
                        s1.async=true;
                        s1.src='https://embed.tawk.to/" . $parseDirectChatLink . "';
                        s1.charset='UTF-8';
                        s1.setAttribute('crossorigin','*');
                        s0.parentNode.insertBefore(s1,s0);
                    })();
                </script>
                <!--End of Tawk.to Script-->

                    ");
        }
    }

});
