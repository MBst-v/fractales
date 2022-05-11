<?php
  function get_site_url() {
    global $_SERVER;
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $site_name = explode( '/', $_SERVER["REQUEST_URI"] )[1];

    $site_url = $protocol . ':' . '//' . $host . '/' . $site_name;
    
    if (substr($site_url, -1) === '/') {
      $site_url = substr($site_url, 0, -1);
    }
    
    return $site_url;
  }
?>