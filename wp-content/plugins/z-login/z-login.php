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
        return str_replace('blog.gkfk5.cn', 'w.cn', $site_url);
    }
    return $site_url;
});

add_filter('the_title', function($title){
    if(empty($title)){
        $title = wp_trim_words(get_the_excerpt(), 20);
    }
    return $title;
});

// 彻底关闭自动更新
add_filter('automatic_updater_disabled', '__return_true');
// 关闭更新检查定时作业
remove_action('init', 'wp_schedule_update_checks');
// 移除已有的版本检查定时作业
wp_clear_scheduled_hook('wp_version_check');
// 移除已有的插件更新定时作业
wp_clear_scheduled_hook('wp_update_plugins');
// 移除已有的主题更新定时作业
wp_clear_scheduled_hook('wp_update_themes');
// 移除已有的自动更新定时作业
wp_clear_scheduled_hook('wp_maybe_auto_update');
// 移除后台内核更新检查
remove_action( 'admin_init', '_maybe_update_core' );
// 移除后台插件更新检查
remove_action( 'load-plugins.php', 'wp_update_plugins' );
remove_action( 'load-update.php', 'wp_update_plugins' );
remove_action( 'load-update-core.php', 'wp_update_plugins' );
remove_action( 'admin_init', '_maybe_update_plugins' );
// 移除后台主题更新检查
remove_action( 'load-themes.php', 'wp_update_themes' );
remove_action( 'load-update.php', 'wp_update_themes' );
remove_action( 'load-update-core.php', 'wp_update_themes' );
remove_action( 'admin_init', '_maybe_update_themes' );