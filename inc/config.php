<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

date_default_timezone_set('Asia/Kolkata');
define('ABS_PATH', $_SERVER['DOCUMENT_ROOT'] . '/shishac_final');
define('TPL_PATH', ABS_PATH . '/templates/');

// Replace http://localost with your website domain e.g. https://websitedomain.com
$site_url = "http://localhost/shishac_final";


$assets = $site_url . "/assets";
$css = $assets . "/css";
$js = $assets . "/js";
$images = $assets . "/images";

$rand = rand(1111, 9999);

$page_title = "";
$meta_description = "";
$meta_keyword = "";
$og_image = "";

$opt = array();
