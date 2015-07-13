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
add_action('init', 'v_forcelogin');

/*
add_action('template_redirect','fstop_check_if_logged_in');
function fstop_check_if_logged_in()
{
    if(!is_user_logged_in()) //Are they logged in? If not:
    {
        // Get the requested URL
        global $wp;
        $requested_url = home_url( $wp->request );

        //Set $url to {site_url()}/wp-login.php?redirect_to={$requested_url}
        $url = add_query_arg(
            'redirect_to',
            $requested_url,
            site_url('wp-login.php')
        );
        
        //redirect any request to {site_url()}/wp-login.php?redirect_to={$requested_url}
        wp_redirect($url);
        exit;
    }
}
*/
