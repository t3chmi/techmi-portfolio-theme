<?php

// 同じ日付でも日付を表示
function my_the_post() {
    global $previousday;
    $previousday = '';
}
add_action( 'the_post', 'my_the_post' );

//投稿アーカイブページの作成
function post_has_archive( $args, $post_type ) {
 
    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'blog'; //任意のスラッグ名
    }
    return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

//サイドバーにウィジェット追加
function widgetsidebar_init() {
    register_sidebar(array(
    'name'=>'サイドバー',
    'id' => 'side-widget',
    'before_widget'=>'
    <div id="%1$s" class="%2$s sidebar-wrapper">',
    'after_widget'=>'</div>',
    'before_title' => '<h5 class="sidebar-title">',
    'after_title' => '</h5>'
    ));
}
add_action( 'widgets_init', 'widgetsidebar_init' );



// ページネーションのHTMLカスタマイズ
function custom_pagination_html( $template ) {
    $template = '
    <nav class="pagination" role="navigation">
        <h2 class="screen-reader-text">%2$s</h2>
        %3$s 
    </nav>';
    return $template;
}
add_filter('navigation_markup_template','custom_pagination_html');

//カスタム投稿タイプの追加
add_action('init', 'create_post_type');
function create_post_type(){
    register_post_type('plan',
        array(
            'labels'=>array(
                'name'=>__('価格表'), 
                'singular_name'=>__('価格表編集')
            ),
            'public'=>true,
            'menu_position'=>6,
        )
    );
    register_post_type('services',
        array(
            'labels'=>array(
                'name'=>__('サービス'), 
                'singular_name'=>__('サービス編集')
            ),
            'public'=>true,
            'menu_position'=>5,
        )
    );
}

function add_post_tag_archive( $wp_query ) {
    if ($wp_query->is_main_query() && $wp_query->is_tag()) {
      $wp_query->set( 'post_type', array('post','works'));
    }
}
add_action( 'pre_get_posts', 'add_post_tag_archive' , 10 , 1);


//CSS関連
function mytheme_setup(){
    //CSS有効化
    add_theme_support( 'wp-block-styles');
    //アイキャッチ有効化
    add_theme_support( 'post-thumbnails' ); 
    add_image_size( 'big', 640, 480, false );
}

add_action('after_setup_theme', 'mytheme_setup');


function mytheme_enqueue(){
    //テーマのCSSを読み込み
    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_theme_file_path('style.css'))
    );
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue');

//画像ファイルの有無を確認し、無ければno-image.jpgのパスを返す
function is_image($image_path){
    $out_path = "";
    if(is_string($image_path)){
        $http_header = get_headers($image_path);
        if(strpos($http_header[0],'OK')||strpos($http_header[0],'Unauthorized')){
            $out_path = $image_path;
        }else{
            $out_path = get_template_directory_uri() . '/images/no-image.jpg ';
        }
    }else{
        $out_path = get_template_directory_uri() . '/images/no-image.jpg ';
    }
    return $out_path;
}

//the_tags()の出力結果に target="_parent" を追加
function add_class_the_tags($html){
    $postid = get_the_ID();
    $html = str_replace('<a','<a target="_parent"',$html);
    return $html;
}
add_filter('the_tags','add_class_the_tags',10,1);


function form_post() {
    if(isset($_POST)){
        $form_post = $_POST;
        print_r($form_post);
    }
}
add_shortcode('sc_form_post', 'form_post');