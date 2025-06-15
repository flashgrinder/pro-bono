<?php

	add_action('init', function(){
		register_post_type('cases', [
			'labels' => [
				'name'               => 'Кейсы',
				'singular_name'      => 'Кейсы',
				'add_new'            => 'Добавить кейс',
				'add_new_item'       => 'Добавить кейс',
				'edit_item'          => 'Редактировать кейс',
				'new_item'           => 'Новый кейс',
				'view_item'          => 'Посмотреть кейс',
				'search_items'       => 'Найти кейсы',
				'not_found'          => 'Кейсов не найдено',
				'not_found_in_trash' => 'В корзине не найдено кейсов',
				'parent_item_colon'  => '',
				'menu_name'          => 'Кейсы'
			],
			'public'             => false,
			'show_ui'            => true,
			'show_in_rest'       => true,
			'menu_position'      => 5,
			'menu_icon'          => 'dashicons-media-document',
			'supports'           => ['title','thumbnail','author','custom-fields'],
			'has_archive'        => false,
			'hierarchical'        => false,
			'rewrite'             => array('slug' => 'cases', 'with_front' => false),
			'query_var'           => true
		]);

	});