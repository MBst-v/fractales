<?php
require 'includes/_index.php';
require 'db/_index.php';
require 'components/_index.php';

$site_url = get_site_url();

$current_page_name = get_page_template();
$page = [];
$page = array_merge($page, $db['pages'][$current_page_name]);

$tel = $db['contacts']['tel'];
$tel_link = str_replace(' ', '', $tel);
$address = $db['contacts']['address'];
$email = $db['contacts']['email'];
$socials = $db['contacts']['socials'];

?>