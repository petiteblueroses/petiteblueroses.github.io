<?php
/**
 * Content elements options
 *
 * @copyright 2019-present Creative Themes
 * @license   http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @package   Blocksy
 */

$options = [

	'content_elements_panel' => [
		'label' => __( 'Entry Content Elements', 'blocksy' ),
		'type' => 'ct-panel',
		'setting' => [ 'transport' => 'postMessage' ],
		'inner-options' => [

			'contentSpacing' => [
				'label' => __( 'Content Spacing', 'blocksy' ),
				'type' => 'ct-radio',
				'value' => 'comfortable',
				'view' => 'text',
				'setting' => [ 'transport' => 'postMessage' ],
				'choices' => [
					'compact' => __( 'Compact', 'blocksy' ),
					'comfortable' => __( 'Comfortable', 'blocksy' ),
					'spacious' => __( 'Spacious', 'blocksy' ),
				],
			],

			blocksy_rand_md5() => [
				'type' => 'ct-divider',
			],

			'left_right_wide' => [
				'label' => __( 'Left & Right Blocks Offset', 'blocksy' ),
				'type' => 'ct-switch',
				'value' => 'yes',
				'setting' => [ 'transport' => 'postMessage' ],
				'desc' => __( 'This option will add affset to all left and right aligned blocks in Gutenberg editor.', 'blocksy' ),
			],

			blocksy_rand_md5() => [
				'type' => 'ct-divider',
			],

			'content_link_type' => [
				'label' => __( 'Links Type', 'blocksy' ),
				'type' => 'ct-select',
				'value' => 'type-1',
				'view' => 'text',
				'design' => 'inline',
				'setting' => [ 'transport' => 'postMessage' ],
				'choices' => blocksy_ordered_keys(
					[
						'type-1' => __( 'Type 1', 'blocksy' ),
						'type-2' => __( 'Type 2', 'blocksy' ),
						'type-3' => __( 'Type 3', 'blocksy' ),
						'type-4' => __( 'Type 4', 'blocksy' ),
						'type-5' => __( 'Type 5', 'blocksy' ),
					]
				),
			],
		],
	],

];
