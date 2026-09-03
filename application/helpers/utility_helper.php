<?php
function currentUrl()
{
    return $currentUrl = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

function truncateText($text, $length = 200)
{
    // echo mb_strlen($text);
    return mb_strlen($text) > $length
        ? mb_substr($text, 0, $length) . '...'
        : $text;
}
?>