<?php

	add_action('init', function(){
		register_post_type('experts', [
			'labels' => [
				'name'               => 'Эксперты',
				'singular_name'      => 'Эксперты',
				'add_new'            => 'Добавить эксперта',
				'add_new_item'       => 'Добавить эксперта',
				'edit_item'          => 'Редактировать эксперта',
				'new_item'           => 'Новый эксперт',
				'view_item'          => 'Посмотреть эксперта',
				'search_items'       => 'Найти эксперт',
				'not_found'          => 'Экспертов не найдено',
				'not_found_in_trash' => 'В корзине не найдено экспертов',
				'parent_item_colon'  => '',
				'menu_name'          => 'Эксперты'
			],
			'public'             => false,
			'show_ui'            => true,
			'show_in_rest'       => true,
			'menu_position'      => 4,
			'menu_icon'          => 'dashicons-admin-appearance',
			'supports'           => ['title','thumbnail','author','custom-fields','revisions'],
			'has_archive'        => false,
			'hierarchical'        => false,
			'rewrite'             => array('slug' => 'experty', 'with_front' => false),
			'query_var'           => true
		]);

	});