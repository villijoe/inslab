<?php

$emails = $_POST['emails'];
$title = $_POST['title'];
$text = $_POST['text'];

$emails = str_replace(' ', '', $emails);
$arr_emails = explode(",", $emails);

$bool = false;
exit();
for( $i = 0, $len = count($arr_emails); $i < $len; $i++){
    if ( mail( $arr_emails[$i], $title, $text ) ) {
        $bool = true;
        echo 'yes';
    } else {
        $bool = false;
        echo 'no';
        return;
    }
}

echo 'yes';

