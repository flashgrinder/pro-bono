<?php

	add_action('init', function(){
		register_post_type('nominations-list', [
			'labels' => [
				'name'               => 'Таблица экспертов ProBono-300',
				'singular_name'      => 'Таблица экспертов ProBono-300',
				'add_new'            => 'Добавить эксперта',
				'add_new_item'       => 'Добавить эксперта',
				'edit_item'          => 'Редактировать эксперта',
				'new_item'           => 'Новый эксперт',
				'view_item'          => 'Посмотреть эксперта',
				'search_items'       => 'Найти эксперта',
				'not_found'          => 'Эксперта не найдено',
				'not_found_in_trash' => 'В корзине не найдено экспертов',
				'parent_item_colon'  => '',
				'menu_name'          => 'Таблица экспертов ProBono-300'
			],
			'public'             => false,
			'show_ui'            => true,
			'show_in_rest'       => true,
			'menu_position'      => 6,
			'menu_icon'          => 'dashicons-editor-table',
			'supports'           => ['title','excerpt','custom-fields'],
			'has_archive'        => false,
			'hierarchical'        => false,
			'rewrite'             => array('slug' => 'nominations-list', 'with_front' => false),
			'query_var'           => true
		]);

	});