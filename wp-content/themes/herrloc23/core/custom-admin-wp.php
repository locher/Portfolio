<?php

//Hide useless part in administration
function hloc_custom_menu_page_removing()
{
    //remove_menu_page( 'edit-comments.php' );
    //remove_menu_page( 'edit.php' );
}

add_action('admin_menu', 'hloc_custom_menu_page_removing');