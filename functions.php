<?php
function game_theme_support()
{
    //Add Title Dinamically
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
}

add_action("after_setup_theme", "game_theme_support");
?>
 
 <?php
 function game_menus()
 {
     $locations = [
         "primary" => "Desktop Primary",
         "footer" => "Footer menu Items",
     ];

     register_nav_menus($locations);
 }

 add_action("init", "game_menus");
 ?>

<?php
function scripts()
{
    wp_register_script("jquery");

    wp_register_script(
        "app",
        get_template_directory_uri() . "/dist/app.js",
        ["jquery"],
        1,
        true
    );
    wp_enqueue_script("app");
}

add_action("wp_enqueue_scripts", "wp_enqueue_script");

function challenge_register_styles()
{
    $version = wp_get_theme()->get("version");
    wp_enqueue_style(
        "challenge-style",
        get_template_directory_uri() . "/dist/app.css",
        ["challenge-bootstrap"],
        rand(111, 9999),
        "all"
    );
    wp_enqueue_style(
        "slider-style",
        get_template_directory_uri() . "/dist/tiny-slider.css",
        ["slider-bootstrap"],
        $version,
        "all"
    );
    wp_enqueue_style(
        "swiper-style",
        get_template_directory_uri() . "/dist/swiper.min.css",
        ["swiper-bootstrap"],
        $version,
        "all"
    );
    wp_enqueue_style(
        "challenge-bootstrap",
        "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css",
        [],
        $version,
        "all"
    );
}

add_action("wp_enqueue_scripts", "challenge_register_styles");
?>

<?php
function challenge_register_scripts()
{
    wp_enqueue_script(
        "challenge-jquery",
        "https://code.jquery.com/jquery-2.2.0.min.js",
        [],
        "5.1.3",
        true
    );
    wp_enqueue_script(
        "challenge-carousel",
        "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js",
        [],
        "5.1.3",
        true
    );
    wp_enqueue_script(
        "challenge-showcase",
        get_template_directory_uri() . "/dist/showcase.js",
        [],
        "5.1.3",
        true
    );
    wp_enqueue_script(
        "challenge-app",
        get_template_directory_uri() . "/dist/app.js",
        [],
        rand(111, 9999),
        true
    );
    wp_enqueue_script(
        "challenge-bundle",
        "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js",
        [],
        true
    );
}

add_action("wp_enqueue_scripts", "challenge_register_scripts");
?>

<?php
function themename_custom_logo_setup()
{
    $defaults = [
        "height" => 25,
        "width" => 180,
        "flex-height" => true,
        "flex-width" => true,
        "header-text" => ["site-title", "site-description"],
        "unlink-homepage-logo" => true,
    ];

    add_theme_support("custom-logo", $defaults);
}

add_action("after_setup_theme", "themename_custom_logo_setup");
function fix_svg_thumb_display()
{
}
add_action("admin_head", "fix_svg_thumb_display");

add_filter(
    "wp_check_filetype_and_ext",
    function ($data, $file, $filename, $mimes) {
        $filetype = wp_check_filetype($filename, $mimes);
        return [
            "ext" => $filetype["ext"],
            "type" => $filetype["type"],
            "proper_filename" => $data["proper_filename"],
        ];
    },
    10,
    4
);

function cc_mime_types($mimes)
{
    $mimes["svg"] = "image/svg+xml";
    return $mimes;
}
add_filter("upload_mimes", "cc_mime_types");

add_filter("wp_editor_set_quality", function ($arg) {
    return 100;
});

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . "/class-wp-bootstrap-navwalker.php";
}
add_action("after_setup_theme", "register_navwalker");

