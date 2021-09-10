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

function Activate (){

}

function Deactivate(){
    flush_rewrite_rules ();
}

register_activation_hook(__FILE__,'Activate');
register_deactivation_hook(__FILE__,'Deactivate');

add_action('admin_menu', 'CreateMenu');

function CreateMenu(){
    add_menu_page(
        'Laboratoria WhatsApp Plugin',//Titulo pagina
        'Menu Laboratoria WhatsApp Plugin',//Titulo menu
        'manage_options', //Permisos
        plugin_dir_path(__FILE__).'admin/whatsapp-plugin.php', //slog "unico"
        null,//funcion contenido de la pagina
        plugin_dir_url(__FILE__).'admin/img/whatsapp.png',//icono
        '1' //prioridad en menu
    );

    // add_submenu_page(
    //     'lwp_menu', // slog padre
    //     'ajustes', // titulo pagina
    //     'ajustes', // titulo menu
    //     'manage_options', //Permisos
    //     'lwp_menu_ajustes', //slog "unico"
    //     'Submenu'
    // );
}

function ShowContent(){
    echo '<h1>Contenido de la pagina</h1>';
}

// function Submenu(){
//     echo '<h1>Submenu</h1>';
// }
