<?php
require 'helpers/get-page-template.php';
require __ROOT__ . '/config/pages.php';
require __ROOT__ . '/config/info.php';
require __ROOT__ . '/config/team.php';

$__page_name = get_page_template();

$page = [
  'name' => $__page_name,
];
$page = array_merge($page, $_pages[$__page_name]);
?>