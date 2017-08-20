<?php

/**
 * 定义选项
 * @Author: JaxsonWang
 */

$options = array();

$options['support_comment'] = array(
	'title'       => __( 'Use Markdown For Comments', 'iiong' ),
	'page'        => 'wpeditormd',
	'tab'         => 'tab_1',
	'description' => '<a class="support_comment_text" href="' . admin_url( 'options-discussion.php#wpcom_publish_comments_with_markdown' ) . '" rel="nofollow" target="_blank">' . __( 'Go', 'iiong' ) . '</a>'
);

$options['jquery_library'] = array(
	'type'        => 'text',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_1',
	'title'       => __( 'jQuery Library', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( 'jQuery resource load library address', 'iiong' ),
	'default'     => WP_EDITORMD_PLUGIN_URL . '/jQuery'
);

$options['raphael_library'] = array(
	'type'        => 'text',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_1',
	'title'       => __( 'Raphael Library', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( 'Raphael resource load library address(<code>FlowChart</code> and <code>Sequence</code> depend on this option)', 'iiong' ),
	'default'     => WP_EDITORMD_PLUGIN_URL . '/Raphael'
);

$options['theme_style'] = array(
	'type'        => 'select',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_2',
	'title'       => __( 'Editor Theme Style', 'iiong' ),
	'description' => __( 'Change the editor theme style', 'iiong' ),
	'options'     => array(
		'default' => __( 'default', 'iiong' ),
		'dark'    => __( 'dark', 'iiong' )
	),
	'default'     => 'default'
);

$options['code_style'] = array(
	'type'        => 'select',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_2',
	'title'       => __( 'Code Theme Style', 'iiong' ),
	'description' => __( 'Change the code theme style in the editor', 'iiong' ),
	'options'     => array(
		'default'                 => 'default',
		'3024-day'                => '3024-day',
		'3024-night'              => '3024-night',
		'ambiance'                => 'ambiance',
		'ambiance-mobile'         => 'ambiance-mobile',
		'base16-dark'             => 'base16-dark',
		'base16-light'            => 'base16-light',
		'blackboard'              => 'blackboard',
		'cobalt'                  => 'cobalt',
		'eclipse'                 => 'eclipse',
		'elegant'                 => 'elegant',
		'erlang-dark'             => 'erlang-dark',
		'lesser-dark'             => 'lesser-dark',
		'mbo'                     => 'mbo',
		'mdn-like'                => 'mdn-like',
		'midnight'                => 'midnight',
		'monokai'                 => 'monokai',
		'neat'                    => 'neat',
		'neo'                     => 'neo',
		'night'                   => 'night',
		'paraiso-dark'            => 'paraiso-dark',
		'paraiso-light'           => 'paraiso-light',
		'pastel-on-dark'          => 'pastel-on-dark',
		'rubyblue'                => 'rubyblue',
		'solarized'               => 'solarized',
		'the-matrix'              => 'the-matrix',
		'tomorrow-night-eighties' => 'tomorrow-night-eighties',
		'twilight'                => 'twilight',
		'vibrant-ink'             => 'vibrant-ink',
		'xq-dark'                 => 'xq-dark',
		'xq-light'                => 'xq-light'
	),
	'default'     => 'default'
);

$options['task_list'] = array(
	'type'        => 'radio',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_3',
	'title'       => __( 'Support Task Lists', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( 'Github Flavored Markdown task lists', 'iiong' ),
	'options'     => array(
		'0' => __( 'Off', 'iiong' ),
		'1' => __( 'On', 'iiong' ),
	),
	'default'     => '0'
);

$options['imagepaste'] = array(
	'type'        => 'radio',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_3',
	'title'       => __( 'Support Image Paste', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( 'Image Paste allows you to copy and paste images from your desktop to the editor', 'iiong' ),
	'options'     => array(
		'0' => __( 'Off', 'iiong' ),
		'1' => __( 'On', 'iiong' ),
	),
	'default'     => '0'
);

$options['sync_scrolling'] = array(
	'type'        => 'radio',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_3',
	'title'       => __( 'Support Sync Scrolling', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( 'The editor and the preview editor are synchronized to scroll', 'iiong' ),
	'options'     => array(
		'0' => __( 'Off', 'iiong' ),
		'1' => __( 'On', 'iiong' ),
	),
	'default'     => '1'
);

$options['html_decode'] = array(
	'type'        => 'radio',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_3',
	'title'       => __( 'Support Html Decode', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( 'Support rich text analysis', 'iiong' ),
	'options'     => array(
		'0' => __( 'Off', 'iiong' ),
		'1' => __( 'On', 'iiong' ),
	),
	'default'     => '0'
);

$options['support_highlight'] = array(
	'type'        => 'radio',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_4',
	'title'       => __( 'Support Prism Syntax Highlight', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( 'Article support syntax highlighting', 'iiong' ),
	'options'     => array(
		'0' => __( 'Off', 'iiong' ),
		'1' => __( 'On', 'iiong' ),
	),
	'default'     => '0'
);

$options['line_numbers'] = array(
	'type'        => 'radio',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_4',
	'title'       => __( 'Support Prism Syntax Highlight Line Numbers', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( '', 'iiong' ),
	'options'     => array(
		'0' => __( 'Off', 'iiong' ),
		'1' => __( 'On', 'iiong' ),
	),
	'default'     => '0'
);

$options['highlight_library'] = array(
	'type'        => 'text',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_4',
	'title'       => __( 'PrismJS Syntax Highlight Library', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( 'PrismJS resource load library address', 'iiong' ),
	'default'     => WP_EDITORMD_PLUGIN_URL . '/Prism'
);

$options['highlight_library_style'] = array(
	'type'        => 'select',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_4',
	'title'       => __( 'PrismJS Syntax Highlight Style', 'iiong' ),
	'description' => __( 'Syntax highlight theme style', 'iiong' ),
	'options'     => array(
		'default'        => 'default',
		'dark'           => 'dark',
		'funky'          => 'funky',
		'okaidia'        => 'okaidia',
		'twilight'       => 'twilight',
		'coy'            => 'coy',
		'solarizedlight' => 'solarizedlight'
	),
	'default'     => 'default'
);

$options['support_emoji'] = array(
	'type'        => 'radio',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_5',
	'title'       => __( 'Support Emoji', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( '', 'iiong' ),
	'options'     => array(
		'0' => __( 'Off', 'iiong' ),
		'1' => __( 'On', 'iiong' ),
	),
	'default'     => '0'
);

$options['emoji_library'] = array(
	'type'        => 'text',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_5',
	'title'       => __( 'Emoji Library', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( 'Emoji resource load library address', 'iiong' ),
	'default'     => WP_EDITORMD_PLUGIN_URL . '/Emojify.js'
);

$options['support_toc'] = array(
	'type'        => 'radio',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_6',
	'title'       => __( 'Support ToC', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( 'Table of Contents', 'iiong' ),
	'options'     => array(
		'0' => __( 'Off', 'iiong' ),
		'1' => __( 'On', 'iiong' ),
	),
	'default'     => '0'
);

$options['toc_tips'] = array(
	'title'       => __( 'You need install the plugin', 'iiong' ),
	'page'        => 'wpeditormd',
	'tab'         => 'tab_6',
	'description' => '<a href="' . get_option( 'home' ) . '/wp-admin/plugin-install.php?tab=plugin-information&plugin=table-of-contents-plus&TB_iframe=true" rel="nofollow" target="_blank">' . __( 'If you need to enable this option,you need install the plugin', 'editormd' ) . '</a>'
);

//================================

$options['support_katex'] = array(
	'type'        => 'radio',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_7',
	'title'       => __( 'Support LaTeX', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( '', 'iiong' ),
	'options'     => array(
		'0' => __( 'Off', 'iiong' ),
		'1' => __( 'On', 'iiong' ),
	),
	'default'     => '0'
);

$options['katex_library'] = array(
	'type'        => 'text',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_7',
	'title'       => __( 'KaTeX Library', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( 'KaTeX resource load library address', 'iiong' ),
	'default'     => WP_EDITORMD_PLUGIN_URL . '/KaTeX'
);

//================================

$options['support_flowchart'] = array(
	'type'        => 'radio',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_8',
	'title'       => __( 'Support FlowChart', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( '', 'iiong' ),
	'options'     => array(
		'0' => __( 'Off', 'iiong' ),
		'1' => __( 'On', 'iiong' ),
	),
	'default'     => '0'
);

$options['flowchart_library'] = array(
	'type'        => 'text',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_8',
	'title'       => __( 'FlowChart Library', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( 'FlowChart resource load library address', 'iiong' ),
	'default'     => WP_EDITORMD_PLUGIN_URL . '/FlowChart'
);

$options['flowchart_config'] = array(
	'type'        => 'text',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_8',
	'title'       => __( 'jQuery FlowChart Config', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( 'Config resource load library address', 'iiong' ),
	'default'     => WP_EDITORMD_PLUGIN_URL . '/FlowChart'
);

//================================

$options['support_sequence'] = array(
	'type'        => 'radio',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_9',
	'title'       => __( 'Support Sequence', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( '', 'iiong' ),
	'options'     => array(
		'0' => __( 'Off', 'iiong' ),
		'1' => __( 'On', 'iiong' ),
	),
	'default'     => '0'
);

$options['sequence_library'] = array(
	'type'        => 'text',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_9',
	'title'       => __( 'Sequence Library', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( 'Sequence resource load library address', 'iiong' ),
	'default'     => WP_EDITORMD_PLUGIN_URL . '/Sequence'
);

$options['underscore_library'] = array(
	'type'        => 'text',
	'page'        => 'wpeditormd',
	'tab'         => 'tab_9',
	'title'       => __( 'Underscore Library', 'iiong' ),
	'subtitle'    => __( '', 'iiong' ),
	'description' => __( 'Underscore resource load library address', 'iiong' ),
	'default'     => WP_EDITORMD_PLUGIN_URL . '/Underscore'
);

// Register options
paf_options( $options );
