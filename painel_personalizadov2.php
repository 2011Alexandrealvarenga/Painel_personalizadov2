<?php 
/*
Plugin Name: painel personalizado
Plugin URI: www.alexandre.com
Description: Alterar Rodape
Version: 1.0
Author: alexandre
Author URI: www.alexandre.com
License: GLPV2
Text Domain: primeiro plugin
*/

class Segundo_plugin{
    private static $instance;
    public static function getInstance(){
        if(self::$instance == NULL){
            self::$instance = new self();
        }
    }
}
// desativar a ction welcome_panel
remove_action('welcome_panel', 'wp_welcome_panel');
add_action('welcome_panel','my_welcome_panel');

function my_welcome_panel(){
    ?>
    <div class="welcome-panel-content">
        <h3>Seja bem vindo Ao mundo de Bob</h3>
    </div>
<?php 
}
function add_css(){
    wp_register_style('meu-segundo-plugin',plugin_dir_url(__FILE__).'css/meu-segundo-plugin.css');
    wp_enqueue_style('meu-segundo-plugin');
}
