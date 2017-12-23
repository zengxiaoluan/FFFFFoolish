<?php 
    
function foolish_coustom_post_type () {
    $labels = [
        'name'               => 'Hot Article',
        'singular_name'      => 'Hot Article',
        'add_new'            => 'Add Hot Article',
        'add_new_item'       => '添加电影资料',
        'edit_item'          => '编辑',
        'new_item'           => '新电影',
        'all_items'          => 'All Hot Articles',
        'view_item'          => '查看',
        'search_items'       => '搜索电影',
        'not_found'          => '还没有发布热门文章',
        'not_found_in_trash' => '回收站里没找到电影资料', 
        'menu_name'          => 'Hot Articles'
    ];

    $args = [
        'label' => 'Hot Article',
        'public' => true,
        'description' => '女票家的热门文章',
        'labels' => $labels,
        'hierarchical' => true,
        'exclude_from_search' => false,
        'menu_position' => 5,
        'supports' => ['title', 'editor', 'thumbnail', 'comments' ,'custom-fields', 'excerpt', 'page-attributes', 'author'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'hot', 'with_front' => false]
    ];
    register_post_type('hot-article', $args);
}

add_action( 'init', 'foolish_coustom_post_type', 10, 1 );

function foolish_movie_updated_messages( $messages ) {
  global $post, $post_ID;

  $messages['hot-article'] = array(
    0 => '', // 没有用，信息从索引 1 开始。
    1 => sprintf( __('已更新，<a href="%s">点击查看</a>', 'foolish'), esc_url( get_permalink($post_ID) ) ),
    2 => __('自定义字段已更新。', 'foolish'),
    3 => __('自定义字段已删除。', 'foolish'),
    4 => __('电影已更新。', 'foolish'),
    // translators: %s: 修订版本的日期与时间 
    5 => isset($_GET['revision']) ? sprintf( __('电影恢复到了 %s 这个修订版本。', 'foolish'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('电影已发布，<a href="%s">点击查看</a>', 'foolish'), esc_url( get_permalink($post_ID) ) ),
    7 => __('电影已保存', 'foolish'),
    8 => sprintf( __('电影已提交， <a target="_blank" href="%s">点击预览</a>', 'foolish'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('电影发布于：<strong>%1$s</strong>， <a target="_blank" href="%2$s">点击预览</a>', 'foolish'),
      // translators: 发布选项日期格式，查看 http://php.net/date
      date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('电影草稿已更新，<a target="_blank" href="%s">点击预览</a>', 'foolish'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );

  return $messages;
}
add_filter( 'post_updated_messages', 'foolish_movie_updated_messages' );