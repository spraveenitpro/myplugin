<?php   //MyPlugin - Settings Callback

// exit the file if accessed directly

if ( ! defined  ('ABSPATH')) {
    exit;
}


//validate plugin settings

function myplugin_callback_validate_options($input) {

    return $input;
}

// callback: text field
function myplugin_callback_field_text( $args ) {

    // todo: add callback functionality..

    echo 'This will be a text field.';

}



// callback: radio field
function myplugin_callback_field_radio( $args ) {

    // todo: add callback functionality..

    echo 'This will be a radio field.';

}



// callback: textarea field
function myplugin_callback_field_textarea( $args ) {

    // todo: add callback functionality..

    echo 'This will be a textarea.';

}



// callback: checkbox field
function myplugin_callback_field_checkbox( $args ) {

    // todo: add callback functionality..

    echo 'This will be a checkbox.';

}



// callback: select field
function myplugin_callback_field_select( $args ) {

    // todo: add callback functionality..

    echo 'This will be a select menu.';

}
