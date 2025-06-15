<?php

	add_action('init', function(){

		// Категории для кейсов
		register_taxonomy('cats_experts', array('experts'), array(
			'label'                 => '', // определяется параметром $labels->name
			'labels'                => array(
				'name'              => 'Название Категории',
				'singular_name'     => 'Категория',
				'search_items'      => 'Найти Категорию',
				'all_items'         => 'Все Категории',
				'view_item '        => 'Смотреть Категорию',
				'parent_item'       => 'Родитель Категории',
				'parent_item_colon' => 'Родитель Категория:',
				'edit_item'         => 'Редактировать Категорию',
				'update_item'       => 'Обновить Категорию',
				'add_new_item'      => 'Добавить новую Категорию',
				'new_item_name'     => 'Новое имя Категории',
				'menu_name'         => 'Категории',
			),
			'show_admin_column'     => true,
			'public'                => true,
			'show_in_nav_menus'     => false, // равен аргументу public
			'show_ui'               => true, // равен аргументу public
			'show_in_menu'          => true, // равен аргументу show_ui
			'show_in_rest'          => true,
			'show_tagcloud'         => true, // равен аргументу show_ui
			'hierarchical'          => true,
			'query_var'             => true,
		));

		register_taxonomy('cats_cases', array('cases'), array(
			'label'                 => '', // определяется параметром $labels->name
			'labels'                => array(
				'name'              => 'Название Категории',
				'singular_name'     => 'Категория',
				'search_items'      => 'Найти Категорию',
				'all_items'         => 'Все Категории',
				'view_item '        => 'Смотреть Категорию',
				'parent_item'       => 'Родитель Категории',
				'parent_item_colon' => 'Родитель Категория:',
				'edit_item'         => 'Редактировать Категорию',
				'update_item'       => 'Обновить Категорию',
				'add_new_item'      => 'Добавить новую Категорию',
				'new_item_name'     => 'Новое имя Категории',
				'menu_name'         => 'Категории',
			),
			'show_admin_column'     => true,
			'public'                => true,
			'show_in_nav_menus'     => false, // равен аргументу public
			'show_ui'               => true, // равен аргументу public
			'show_in_menu'          => true, // равен аргументу show_ui
			'show_in_rest'          => true,
			'show_tagcloud'         => true, // равен аргументу show_ui
			'hierarchical'          => true,
			'query_var'             => true,
		));

	});