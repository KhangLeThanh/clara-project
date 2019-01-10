<?php
/*
Plugin Name: Volunteer plugin
*/
 
function jp_rest_post_editor_form( ) {
 
    echo '
        <form id="myForm">
            <div class="form-group">
                <label for="fname"><span title="Required">*</span>First Name:</label>
                <input class="form-control" name="fname" id="fname" value="" required="required" aria-required="true" pattern="^([- \w\d\u00c0-\u024f]+)$" title="Your name (no special characters, diacritics are okay)" type="text" spellcheck="false" size="20" />
            </div>
            <div class="form-group">
                <label for="lname"><span title="Required">*</span>Last Name:</label>
                <input class="form-control" name="lname" id="lname" value="" required="required" aria-required="true" pattern="^([- \w\d\u00c0-\u024f]+)$" title="Your name (no special characters, diacritics are okay)" type="text" spellcheck="false" size="20" />
            </div>
            <div class="form-group">
                <label for="email"><span title="Required">*</span> Email:</label>
                <input class="form-control" name="email" id="email" value="" required="required" aria-required="true" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" title="Your email address" type="email" spellcheck="false" size="30" />

            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="number" class="form-control" id="phone">
            </div>
            <div class="wrapper-button">
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>

    ';

}

add_shortcode( 'volunteer-plugin', 'cf_shortcode');
add_action('wp_enqueue_scripts','my_theme_scripts_function');

function my_theme_scripts_function() {
    wp_enqueue_script( 'bootstrap', plugin_dir_url(__FILE__) . '/js/bootstrap.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script( 'validation-script', plugin_dir_url( __FILE__ ) . '/js/validation.js', array('jquery'), true );
    wp_enqueue_script( 'form-script', plugin_dir_url( __FILE__ ) . '/js/form.js', array('jquery'), true );
    wp_enqueue_style( 'bootstrap', plugin_dir_url(__FILE__) . '/css/bootstrap.css', array(), 20141119 );
    wp_enqueue_style( 'form-style', plugin_dir_url( __FILE__ ) . '/css/base.css', array(), 20141119 );

  
}
function cf_shortcode() {
	ob_start();
	jp_rest_post_editor_form();

	return ob_get_clean();
}

?>
