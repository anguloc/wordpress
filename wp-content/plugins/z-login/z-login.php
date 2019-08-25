<?php
/**
 * Plugin Name:       z-login
 * Description:       diy-login
 * Version:           1.0.0
 * Author:            gk
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

namespace zLogin;

defined('MY_DOMAIN') || define('MY_DOMAIN', 'https://www.gkfk5.cn');

if (isset($_GET['is_my'])) {
    setcookie('z_login_is_my', 1, current_time('timestamp') + 86400);
}

add_action('login_url', function ($login_url) {
    if (!isset($_GET['is_my']) && !isset($_COOKIE['z_login_is_my'])) {
        $login_url = MY_DOMAIN;
    }

    return $login_url;
});

add_action('login_init', function () {
    if (!isset($_GET['is_my']) && !isset($_COOKIE['z_login_is_my'])) {
        wp_redirect(MY_DOMAIN);
        die;
    }
});

add_filter('option_siteurl', function($site_url){
    if($_SERVER['HTTP_HOST'] == 'w.cn'){
        return 'http://w.cn';
    }
    return $site_url;
});

add_filter('site_url', function($site_url){
    if($_SERVER['HTTP_HOST'] == 'w.cn'){
        return 'http://w.cn';
    }
    return $site_url;
});