<?php
/* Bones Custom Project Update Example
This page walks you through creating 
a custom Project Update and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// Flush rewrite rules for custom Project Updates
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

add_action( 'init', 'c3m_change_post_object_label' );
function c3m_change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Project Updates';
    $labels->singular_name = 'Add New Project Update';
    $labels->add_new = 'Add Project Update';
    $labels->add_new_item = 'Add Project Update';
    $labels->edit_item = 'Edit Project Update';
    $labels->new_item = 'New Project Update';
    $labels->view_item = 'View Project Update';
    $labels->search_items = 'Search Project Updates';
    $labels->not_found = 'No Project Update Found';
    $labels->not_found_in_trash = 'No Project Update found in Trash';
}
add_action( 'admin_menu', 'c3m_change_post_menu_label' );
function c3m_change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Project Updates';
    $submenu['edit.php'][5][0] = 'Project Updates';
    $submenu['edit.php'][10][0] = 'Add Update';
    echo '';
}
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	
add_action( 'init', 'rename_categories_to_projects');
function rename_categories_to_projects()
{
    global $wp_taxonomies;

    // The list of labels we can modify comes from
    //  http://codex.wordpress.org/Function_Reference/register_taxonomy
    //  http://core.trac.wordpress.org/browser/branches/3.0/wp-includes/taxonomy.php#L350
    $wp_taxonomies['category']->labels = (object)array(
        'name' => 'Projects',
        'menu_name' => 'Projects',
        'singular_name' => 'Project',
        'search_items' => 'Search Projects',
        'popular_items' => 'Popular Projects',
        'all_items' => 'All Projects',
        'edit_item' => 'Edit Project',
        'update_item' => 'Update Project',
        'add_new_item' => 'Add new Project',
        'new_item_name' => 'New Project Name',
        'separate_items_with_commas' => 'Separata Projects with commas',
        'add_or_remove_items' => 'Add or remove Projects',
        'choose_from_most_used' => 'Choose from the most used Projects',
    );
    $wp_taxonomies['post_tag']->label = 'Projects';
}


		
	/*
		looking for custom meta boxes?
		check out this fantastic tool:
		https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
	*/