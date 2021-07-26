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