<?php
/**
 * @package Hello_Dolly
 * @version 1.7.2
 */
/*
Plugin Name: Laboratoria WhatsApp Plugin
Plugin URI: http://wordpress.org/plugins/Laboratoria-WhatsApp-Plugin/
Description: This a plugin to connect whatever interface with WhatsApp
Author: Diana Catolico / Natalia Garavito
Version: 0.0.1
Author 1 URI: https://github.com/DianaCato
Author 2 URI: https://github.com/NataliaGaravito
*/

function Activate(){
    global $wpdb;

    $sql = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}WhatsAppPlugin(
        `id_whatsapp_plugin` INT NOT NULL AUTO_INCREMENT,
        `enterprise_name` VARCHAR(45) NULL,
        `number` VARCHAR(45) NULL,
        `message` VARCHAR(45) NULL,
        PRIMARY KEY (`id_whatsapp_plugin`))";

    $wpdb->query($sql);
}

function Deactivate(){
    flush_rewrite_rules ();
}

register_activation_hook(__FILE__,'Activate');
register_deactivation_hook(__FILE__,'Deactivate');

function CreateMenu(){   
    global $menu_page;
    $menu_page = add_menu_page(
        'Laboratoria WhatsApp Plugin',//Titulo pagina
        'Menu Laboratoria WhatsApp Plugin',//Titulo menu
        'manage_options', //Permisos
        plugin_dir_path(__FILE__).'admin/whatsapp-plugin.php', //slog "unico"
        null, //funcion contenido de la pagina
        plugin_dir_url(__FILE__).'admin/img/whatsapp.png',//icono
        '1' //prioridad en menu
    );
}

add_action('admin_menu', 'CreateMenu');

function swp_dependencies($hook){
    if ('Laboratoria-WhatsApp-plugin/admin/whatsapp-plugin.php' != $hook) {
        return;
    }
    wp_enqueue_script( 'swp', plugin_dir_url(__FILE__).'app1/my-svelte-whatsapp-plugin/public/build/bundle.js', array(), time(), true );
    wp_enqueue_style( 'swp', plugin_dir_url(__FILE__).'app1/my-svelte-whatsapp-plugin/public/build/bundle.css', array(), time() );
    
} 

add_action('admin_enqueue_scripts', 'swp_dependencies' );

function button_dependencies(){
    require_once(plugin_dir_path(__FILE__).'admin/whatsapp-button.php');
}

add_action( 'wp_enqueue_scripts', 'button_dependencies' );