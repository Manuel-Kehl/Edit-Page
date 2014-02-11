<?php
/*
Plugin Name: Edit Page
Description: Adds an "edit page" link into the footer of every page.
Version: 1.0
Author: Manuel Kehl
Author URI: http://www.manuel-kehl.de
*/

# get correct id for plugin
$thisfile=basename(__FILE__, ".php");

# register plugin
register_plugin(
	$thisfile, //Plugin id
	'Edit Page', 	//Plugin name
	'1.0', 		//Plugin version
	'Manuel Kehl',  //Plugin author
	'http://www.manuel-kehl.de/', //author website
	'Adds an "edit page" link into the footer of every page.', //Plugin description
	'pages', //Page type
	''  //main function (administration) - there is no need for it, as there is no administration backend yet
);

//Change hook name to alter the position where the link is being displayed
add_action('content-bottom', 'edit_page', array());


# functions
function edit_page() {
  if (cookie_check()) {
    //The name of the admin page
    global $GSADMIN;
    //Get url and slug
    $url=get_site_url(false);
    $slug=get_page_slug(false);
    
    //Echo the link
    echo '<p class="edit-page">';
    echo '<a href="'.$url.$GSADMIN.'/edit.php?id='.$slug.'">Edit this page</a>';
    echo_separator();
    echo '<a href="'.$url.$GSADMIN.'/edit.php?special=project">Add Project</a>';
    echo_separator();
    echo '<a href="'.$url.$GSADMIN.'/edit.php?special=blogpost">Add Blogpost</a>';
    echo '</p>';
    
  }
}

function echo_separator() {
  echo " | ";
}

?>