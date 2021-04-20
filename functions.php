<?php
/** 
*<title>タグを出力する
*/
add_theme_support('title-tag');

add_filter('document_title_separator','my_document_title_separator');
function my_document_title_separator($separator){
    $separator = '|';
    return $separator;
}

add_filter('document_title_parts','my_document_title_parts');
function my_document_title_parts($title){
    if(is_home()){
        unset($title['tagline']);
        $title['title'] = 'NPO法人 無料学習塾ふらいおん';/* ここにタイトル名を入れる*/
        return $title;
    }
}




/**
 * カスタム投稿タイプ 
*/
function cpt_register_works() { //add_actionの２つのパラメーターを定義
	$labels = [
		"singular_name" => "blogs",
		"edit_item" => "blogs",
	];
	$args = [
		"label" => "ブログ", //管理画面に出てくる名前
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "blogs", "with_front" => true ], //スラッグをworksに設定
		"query_var" => true,
		"menu_position" => 5,
		"supports" => [ "title", "editor", "thumbnail" ],
	];
	register_post_type( "blogs", $args );
}
add_action( 'init', 'cpt_register_works' );

/**
 * カスタム投稿タイプ カテゴリーの追加
*/

function cpt_register_dep() { //add_actionの２つのパラメーターを定義
	$labels = [
		"singular_name" => "dep",
	];
	$args = [
		"label" => "カテゴリー",
		"labels" => $labels,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_in_menu" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'dep', 'with_front' => true, ], //カテゴリーのスラッグ
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "dep",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		];
	register_taxonomy( "dep", [ "blogs" ], $args ); //「blogs」というカスタム投稿タイプにカテゴリーを追加
}
add_action( 'init', 'cpt_register_dep' );


/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'archive-blogs'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
