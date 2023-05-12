<?php

add_action('admin_enqueue_scripts', function($current_page) {

    $module_images_path = get_theme_file_uri() . '/dist/img/acf/';

    if ( $current_page != 'post.php' && $current_page != 'post-new.php' ) {
        return;
    }
    wp_enqueue_script( 'acf-admin-js', get_stylesheet_directory_uri().'/dist/js/admin/acf.js');
    wp_localize_script('acf-admin-js', 'adminLocal', ['img_path' => $module_images_path ]);
});

add_action('acf/input/admin_head', function() {

    $style = <<<STYLE
<style type="text/css">
.module-preview {
  position: absolute;
  right: 110%;
  top: 0px;
  z-index: 1;
  background-color: #1D2939;
  padding: 20px;
  border-radius: 10px;
}
.module-preview img {
  max-width: 500px;
}

.acf-tooltip li:hover {
  background-color:#0074a9;
}
</style>
STYLE;
    
    echo $style;

});
