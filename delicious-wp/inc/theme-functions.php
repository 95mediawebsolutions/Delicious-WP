<?php

//  Social Media

function delicious_social_media_display(){ ?>
        <?php if(get_theme_mod('set_pinterest')):?>
        <a href="<?php echo esc_url_raw( get_theme_mod('set_pinterest'));?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
        <?php endif;?>
        <?php if(get_theme_mod('set_facebook')):?>
        <a href="<?php echo esc_url_raw( get_theme_mod('set_facebook'));?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <?php endif;?>
        <?php if(get_theme_mod('set_twitter')):?>
        <a href="<?php echo esc_url_raw(get_theme_mod('set_twitter'));?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <?php endif;?>
        <?php if(get_theme_mod('set_instagram')):?>
        <a href="<?php echo esc_url_raw( get_theme_mod('set_instagram'));?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <?php endif;?>
        <?php if(get_theme_mod('set_linkedin')):?>
        <a href="<?php echo esc_url_raw( get_theme_mod('set_linkedin'));?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <?php endif;?>
        <?php if(get_theme_mod('set_youtube')):?>
        <a href="<?php echo esc_url_raw( get_theme_mod('set_youtube'));?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
        <?php endif;?>
<?php }


// sidebar widget

function sidebar_widgets(){ ?>
        <?php if(function_exists('dynamic_sidebar')) {
        ob_start();
        dynamic_sidebar('delicious_sidebar');
        $sidebar = ob_get_contents();
        ob_end_clean();
        $sidebar_corrected_ul = str_replace("<ul>", '<ul class="list">', $sidebar);
        echo $sidebar_corrected_ul;
        }
?>

<?php }

/*
========================
REMOVE GENERATOR VERSION NUMBER
========================
*/

/* remove version string from js and css */
function delicious_remove_wp_version_strings( $src ) {

global $wp_version;
parse_str( parse_url($src, PHP_URL_QUERY), $query );
if ( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
$src = remove_query_arg( 'ver', $src );
}
return $src;

}
add_filter( 'script_loader_src', 'delicious_remove_wp_version_strings' );
add_filter( 'style_loader_src', 'delicious_remove_wp_version_strings' );

/* remove metatag generator from header */
function delicious_remove_meta_version() {
return '';
}
add_filter( 'the_generator', 'delicious_remove_meta_version' );

// add custom class to comment submit btn
function delicious_comment_form( $arg ) {
        $arg['class_submit'] = 'btn delicious-btn btn-2';
        return $arg;
    }

    add_filter( 'comment_form_defaults', 'delicious_comment_form' );

//Custom code for blog post pagination
function delicious_number_pagination()
    {
        global $wp_query;
        $big = 9999999; // need an unlikely integer
        echo paginate_links(array(
         'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
         'format' => '?paged=%#%',
         'current' => max(1, get_query_var('paged')),
         'total' => $wp_query->max_num_pages));
    }
