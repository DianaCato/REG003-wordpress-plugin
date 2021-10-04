<?php
/**
 * @package Hello_Dolly
 * @version 1.7.2
 */
/*
Plugin Name: Flash-memory
Plugin URI: http://wordpress.org/plugins/Flash-memory/
Description: This a plugin to do a game about flash memory cards
Author: Diana Catolico / Natalia Garavito
Version: 0.0.1
Author 1 URI: https://github.com/DianaCato
Author 2 URI: https://github.com/NataliaGaravito
*/

function ActivateFlash(){
}

function DeactivateFlas(){
    flush_rewrite_rules ();
}

register_activation_hook(__FILE__,'ActivateFlash');
register_deactivation_hook(__FILE__,'DeactivateFlash');

function CreateMenuFlash(){   
    global $menu_page;
    $menu_page = add_menu_page(
        'Flash Memomey',//Titulo pagina
        'Menu Flash Memory',//Titulo menu
        'manage_options', //Permisos
        plugin_dir_path(__FILE__).'admin/flash-memory-admin.php', //slog "unico"
        null, //funcion contenido de la pagina
        plugin_dir_url(__FILE__).'admin/img/icon.png',//icono
        '1' //prioridad en menu
    );
}

add_action('admin_menu', 'CreateMenuFlash');