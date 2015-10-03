<?php

/*
* Password protect a WordPress site, with a redirect to the requested URL after successful login
*
* Based on:
* http://wordpress.stackexchange.com/a/64999
* http://kovshenin.com/2012/current-url-in-wordpress/
* 
**/

function v_getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] : 'https://'.$_SERVER["SERVER_NAME"];
  $url .= $_SERVER["REQUEST_URI"];
  return $url;
}
function v_forcelogin() {
  if( !is_user_logged_in() && ( v_getUrl() != wp_login_url() && v_getUrl() != wp_registration_url() && v_getUrl() != wp_lostpassword_url() ) ) {
    wp_redirect( wp_login_url(), 302 );
    exit();
  }
}
/*
Uncomment the following line if you want to password-protect your hubs.
*/
// add_action('init', 'v_forcelogin');
