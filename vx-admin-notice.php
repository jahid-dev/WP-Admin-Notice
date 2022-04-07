<?php
/**
 * Plugin Name:       Admin Notice
 * Plugin URI:        https://viserx.com/
 * Description:       Admin Notice any kinds of file with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            jahidcse
 * Author URI:        https://profiles.wordpress.org/jahidcse/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://profiles.wordpress.org/jahidcse/#content-plugins
 * Text Domain:       vxnotice
 * Domain Path:       /languages
 */

add_action('admin_notices','vxnotice_notices');

function vxnotice_notices(){
    global $pagenow;
    if (! isset($_COOKIE['vx_notice_cookie']) && $_COOKIE['vx_notice_cookie']!=1) {
        if(in_array($pagenow,['index.php','edit.php'])){
        ?>

        <div class="notice notice-success is-dismissible vxnotice-option">
            <p>Hello Jahid Hasan</p>
        </div>
        <?php
        }
    }
}


function vxnotice_script(){

    wp_enqueue_script( 'vxnotice_script', plugins_url('/vxnotice.js', __FILE__), array('jquery'), '', true );
}

add_action('admin_enqueue_scripts','vxnotice_script',100);
?>