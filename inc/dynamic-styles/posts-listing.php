<?php

$prefix = blocksy_manager()->screen->get_prefix();

blocksy_output_font_css([
	'font_value' => get_theme_mod(
		$prefix . '_cardTitleFont',
		blocksy_typography_default_values([
			'size' => [
				'desktop' => '20px',
				'tablet'  => '20px',
				'mobile'  => '18px'
			],
			'line-height' => '1.3'
		])
	),
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '.entry-card .entry-title'
]);

blocksy_output_colors([
	'value' => get_theme_mod($prefix . '_cardTitleColor'),
	'default' => [
		'default' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
		'hover' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
	],
	'css' => $css,
	'variables' => [
		'default' => [
			'selector' => '.entry-card .entry-title',
			'variable' => 'headingColor'
		],
		'hover' => [
			'selector' => '.entry-card .entry-title',
			'variable' => 'linkHoverColor'
		],
	],
]);

blocksy_output_responsive([
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '.entry-excerpt',
	'variableName' => 'cardExcerptSize',
	'value' => get_theme_mod($prefix . '_cardExcerptSize', [
		'mobile' => 16,
		'tablet' => 16,
		'desktop' => 16,
	])
]);

blocksy_output_colors([
	'value' => get_theme_mod($prefix . '_cardExcerptColor'),
	'default' => [
		'default' => ['color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT')]
	],
	'css' => $css,
	'variables' => [
		'default' => [
			'selector' => '.entry-excerpt',
			'variable' => 'color'
		]
	],
]);

blocksy_output_font_css([
	'font_value' => get_theme_mod(
		$prefix . '_cardMetaFont',
		blocksy_typography_default_values([
			'size' => [
				'desktop' => '12px',
				'tablet'  => '12px',
				'mobile'  => '12px'
			],
			'variation' => 'n6',
			'text-transform' => 'uppercase',
		])
	),
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '.entry-card .entry-meta'
]);

blocksy_output_colors([
	'value' => get_theme_mod($prefix . '_cardMetaColor'),
	'default' => [
		'default' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
		'hover' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
	],
	'css' => $css,
	'variables' => [
		'default' => [
			'selector' => '.entry-card .entry-meta',
			'variable' => 'color'
		],

		'hover' => [
			'selector' => '.entry-card .entry-meta',
			'variable' => 'linkHoverColor'
		],
	],
]);

blocksy_output_colors([
	'value' => get_theme_mod($prefix . '_cardButtonSimpleTextColor'),
	'default' => [
		'default' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
		'hover' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
	],
	'css' => $css,
	'variables' => [
		'default' => [
			'selector' => '.entry-button[data-type="simple"]',
			'variable' => 'color'
		],

		'hover' => [
			'selector' => '.entry-button[data-type="simple"]',
			'variable' => 'colorHover'
		],
	],
]);

blocksy_output_colors([
	'value' => get_theme_mod($prefix . '_cardButtonBackgroundTextColor'),
	'default' => [
		'default' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
		'hover' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
	],
	'css' => $css,
	'variables' => [
		'default' => [
			'selector' => '.entry-button[data-type="background"]',
			'variable' => 'buttonTextInitialColor'
		],

		'hover' => [
			'selector' => '.entry-button[data-type="background"]',
			'variable' => 'buttonTextHoverColor'
		],
	],
]);

blocksy_output_colors([
	'value' => get_theme_mod($prefix . '_cardButtonOutlineTextColor'),
	'default' => [
		'default' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
		'hover' => [ 'color' => '#ffffff' ],
	],
	'css' => $css,
	'variables' => [
		'default' => [
			'selector' => '.entry-button[data-type="outline"]',
			'variable' => 'color'
		],

		'hover' => [
			'selector' => '.entry-button[data-type="outline"]',
			'variable' => 'colorHover'
		],
	],
]);

blocksy_output_colors([
	'value' => get_theme_mod($prefix . '_cardButtonColor'),
	'default' => [
		'default' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
		'hover' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
	],
	'css' => $css,
	'variables' => [
		'default' => [
			'selector' => '.entry-button',
			'variable' => 'buttonInitialColor'
		],

		'hover' => [
			'selector' => '.entry-button',
			'variable' => 'buttonHoverColor'
		],
	],
]);

blocksy_output_colors([
	'value' => get_theme_mod($prefix . '_cardBackground'),
	'default' => [
		'default' => [ 'color' => '#ffffff' ],
	],
	'css' => $css,
	'variables' => [
		'default' => [
			'selector' => '[data-cards="boxed"] .entry-card',
			'variable' => 'cardBackground'
		],
	],
]);

blocksy_output_border([
	'css' => $css,
	'selector' => '[data-cards="boxed"] .entry-card',
	'variableName' => 'border',
	'value' => get_theme_mod($prefix . '_cardBorder', [
		'width' => 1,
		'style' => 'none',
		'color' => [
			'color' => 'rgba(44,62,80,0.2)',
		],
	])
]);

blocksy_output_border([
	'css' => $css,
	'selector' => '[data-cards="simple"] .entry-card',
	'variableName' => 'border',
	'value' => get_theme_mod($prefix . '_cardDivider', [
		'width' => 1,
		'style' => 'dashed',
		'color' => [
			'color' => 'rgba(224, 229, 235, 0.8)',
		],
	])
]);

blocksy_output_responsive([
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '.entries',
	'variableName' => 'cardsGap',
	'value' => get_theme_mod($prefix . '_cardsGap', [
		'mobile' => 30,
		'tablet' => 30,
		'desktop' => 30,
	])
]);

blocksy_output_responsive([
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '[data-cards="boxed"] .entry-card',
	'variableName' => 'cardSpacing',
	'value' => get_theme_mod($prefix . '_card_spacing', [
		'mobile' => 25,
		'tablet' => 35,
		'desktop' => 35,
	])
]);

// Border radius
blocksy_output_spacing([
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '[data-cards="boxed"] .entry-card',
	'property' => 'borderRadius',
	'value' => get_theme_mod(
		$prefix . '_cardRadius',
		blocksy_spacing_value([
			'linked' => true,
		])
	)
]);

// Box shadow
blocksy_output_box_shadow([
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '[data-cards="boxed"] .entry-card',
	'value' => get_theme_mod($prefix . '_cardShadow', blocksy_box_shadow_value([
		'enable' => true,
		'h_offset' => 0,
		'v_offset' => 12,
		'blur' => 18,
		'spread' => -6,
		'inset' => false,
		'color' => [
			'color' => 'rgba(34, 56, 101, 0.04)',
		],
	])),
	'responsive' => true
]);

// Featured Image Radius
blocksy_output_spacing([
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '.entry-card .ct-image-container',
	'property' => 'borderRadius',
	'value' => get_theme_mod(
		$prefix . '_cardThumbRadius',
		blocksy_spacing_value([
			'linked' => true,
		])
	)
]);

$archive_order = get_theme_mod(
	$prefix . '_archive_order',
	[
		[
			'id' => 'post_meta',
			'enabled' => true,
			'meta' => [
				'categories' => true,
				'author' => false,
				'date' => false,
				'comments' => false,
			],
		],

		[
			'id' => 'title',
			'enabled' => true,
		],

		[
			'id' => 'featured_image',
			'enabled' => true,
		],

		[
			'id' => 'excerpt',
			'enabled' => true,
		],

		[
			'id' => 'post_meta',
			'enabled' => true,
			'meta' => [
				'categories' => false,
				'author' => true,
				'date' => true,
				'comments' => true,
			],
		],
	]
);
