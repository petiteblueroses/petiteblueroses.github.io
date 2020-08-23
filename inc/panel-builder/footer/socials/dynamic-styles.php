<?php

// Icon size
blocksy_output_responsive([
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '.ct-footer-socials',
	'variableName' => 'iconSize',
	'value' => blocksy_akg('socialsIconSize', $atts, [
		'mobile' => 15,
		'tablet' => 15,
		'desktop' => 15,
	])
]);

// Icon spacing
blocksy_output_responsive([
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '.ct-footer-socials',
	'variableName' => 'spacing',
	'value' => blocksy_akg('socialsIconSpacing', $atts, [
		'mobile' => 15,
		'tablet' => 15,
		'desktop' => 15,
	])
]);


// Alignment
blocksy_output_responsive([
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '[data-column="socials"]',
	'variableName' => 'horizontal-alignment',
	'unit' => '',
	'value' => blocksy_akg('footerSocialsAlignment', $atts, [
		'desktop' => 'flex-start',
		'tablet' => 'center',
		'mobile' => 'center'
	])
]);

blocksy_output_responsive([
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '[data-column="socials"]',
	'variableName' => 'vertical-alignment',
	'unit' => '',
	'value' => blocksy_akg('footerSocialsVerticalAlignment', $atts, [
		'desktop' => 'flex-start',
		'tablet' => 'center',
		'mobile' => 'center'
	])
]);

// Icons custom color
blocksy_output_colors([
	'value' => blocksy_akg('footerSocialsIconColor', $atts),
	'default' => [
		'default' => [ 'color' => 'var(--color)' ],
		'hover' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
	],
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,

	'variables' => [
		'default' => [
			'selector' => '.ct-footer-socials [data-color="custom"]',
			'variable' => 'linkInitialColor'
		],

		'hover' => [
			'selector' => '.ct-footer-socials [data-color="custom"]',
			'variable' => 'linkHoverColor'
		]
	],

	'responsive' => true
]);

// Icons custom background
blocksy_output_colors([
	'value' => blocksy_akg('footerSocialsIconBackground', $atts),
	'default' => [
		'default' => [ 'color' => 'rgba(218, 222, 228, 0.3)' ],
		'hover' => [ 'color' => 'var(--paletteColor1)' ],
	],
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,

	'variables' => [
		'default' => [
			'selector' => '.ct-footer-socials [data-color="custom"]',
			'variable' => 'backgroundColor'
		],

		'hover' => [
			'selector' => '.ct-footer-socials [data-color="custom"]',
			'variable' => 'backgroundColorHover'
		]
	],

	'responsive' => true
]);

// Margin
blocksy_output_spacing([
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '.ct-footer-socials',
	'important' => true,
	'value' => blocksy_default_akg(
		'footerSocialsMargin', $atts,
		blocksy_spacing_value([
			'linked' => true,
		])
	)
]);

if (function_exists('blocksy_output_responsive_switch')) {
	blocksy_output_responsive_switch([
		'css' => $css,
		'tablet_css' => $tablet_css,
		'mobile_css' => $mobile_css,
		'selector' => '.ct-footer-socials .ct-label',
		'value' => blocksy_default_akg(
			'socialsLabelVisibility',
			$atts,
			[
				'desktop' => false,
				'tablet' => false,
				'mobile' => false,
			]
		),
		'on' => 'block'
	]);
}

