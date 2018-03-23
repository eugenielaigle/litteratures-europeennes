<?php /** * ecommerceTheme Customizer. * * @package blackbear */ /** * Add postMessage support for site title and description for the Theme Customizer. * * @param WP_Customize_Manager $wp_customize Theme Customizer object. */ function blackbear_theme_customizer($wp_customize) { // Highlight and link color $wp_customize->add_setting('blackbear_link_color', array(
        'default' => '#ffffff',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blackbear_link_color', array(
        'label' => __('Link and Highlight Color', 'blackbear'),
        'section' => 'colors',
        'settings' => 'blackbear_link_color',
    )));

    // Logo upload
    $wp_customize->add_section('blackbear_logo_section', array(
        'title' => __('Logo', 'blackbear'),
        'priority' => 30,
        'description' => __('Upload a logo to replace the default site name and description in the header', 'blackbear')
    ));

    $wp_customize->add_setting('blackbear_logo', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'blackbear_logo', array(
        'label' => __('Logo', 'blackbear'),
        'section' => 'blackbear_logo_section',
        'settings' => 'blackbear_logo',
    )));




}

add_action('customize_register', 'blackbear_theme_customizer');

function blackbear_sanitize_hex_color($color) {
    if ('' === $color)
        return '';

    // 3 or 6 hex digits, or the empty string.
    if (preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color))
        return $color;

    return null;
}



/**
 * Add CSS in <head> for styles handled by the theme customizer
 *
 * @since 1.5
 */
function blackbear_add_customizer_css() {
    $color = blackbear_sanitize_hex_color(get_theme_mod('blackbear_link_color'));
    ?>
    <!-- Debut customizer CSS -->

<style>
        body {
            border-color: <?php echo $color; ?>
        }
        a:visited {
            color: <?php echo $color; ?>
        }
        .main-navigation a:hover,
        .main-navigation .sub-menu a:hover,
        .main-navigation .children a:hover,
        .main-navigation a:focus,
        .main-navigation a:active,
        .main-navigation .current-menu-item > a,
        .main-navigation .current_page_item > a,
        .blackbear-lang:hover {
            background-color: <?php echo $color; ?>
        }
    </style>

    <?php
}

add_action('wp_head', 'blackbear_add_customizer_css');
