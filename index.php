<?php
ini_set("display_errors", 0);

$extensions = array("ipxe", "cfg");

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$ext = pathinfo($path, PATHINFO_EXTENSION);
if (in_array($ext, $extensions)) {
    include join(DIRECTORY_SEPARATOR, [__DIR__, $path]);
} else {
    return false;
}
