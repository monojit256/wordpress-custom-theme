<?php
function biz_solution_widgets_init() {
 
	register_sidebar( array(
		'name' => 'Header Sidebar',
		'id' => 'testwidget',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="col">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Menu Area',
		'id' => 'testmenu',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="col">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'biz_solution_widgets_init' );