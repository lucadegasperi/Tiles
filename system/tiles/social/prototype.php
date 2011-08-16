<?php

$prototype = array(
	'name' => 'Social Tile',
	'fields' => array(	
		array(
			'title' => 'Title',
			'name' => 'title',
			'type' => 'text',
		),
		array(
			'title' => 'Description',
			'name' => 'description',
			'type' => 'textarea',
		),
		array(
			'title' => 'Group',
			'name' => 'social_networks',
			'type' => 'group',
			'repeat' => true,
			'reorder' => true,
			'fields' => array(
				array(
					'title' => 'Social Network Name',
					'name' => 'social_name',
					'type' => 'text',
				),
				array(
					'title' => 'Social Network URL',
					'name' => 'social_url',
					'type' => 'text',
				)
			)
		),
		
	)
);

?>