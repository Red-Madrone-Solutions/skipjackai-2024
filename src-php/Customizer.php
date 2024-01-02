<?php

namespace TailCraft\Theme;

use WP_Customize_Image_Control;

class Customizer {
    protected static $is_setup = false;

    public function __construct() {
        $this->setup();
    }

    protected function setup() : void
    {
        if ( static::$is_setup ) { return; }
        $this->setupHooks();
        static::$is_setup = true;
    }

    protected function setupHooks() : void
    {
        \add_action('customize_register', [ $this, 'addSettings' ]);
    }

    public function addSettings($wp_customize) : void
    {
        $this->addHeaderControls($wp_customize);

        $this->addBlogSection($wp_customize);
        $this->addBlogControls($wp_customize);

        $this->addFooterSection($wp_customize);
        $this->addFooterControls($wp_customize);
    }

    protected function addHeaderControls($wp_customize) : void
    {
        $wp_customize->add_setting(
            'tailcraft_display_title_and_tagline',
            [
                'capability' => 'edit_theme_options',
                'default' => true,
                'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
            ]
        );
        $wp_customize->add_control(
            'tailcraft_display_title_and_tagline',
            [
                'type' => 'checkbox',
                'section' => 'title_tagline',
                'label' => esc_html( 'Display Site Title & Tagline', 'tailcraft' ),
            ]
        );
    }

    public static function sanitize_checkbox( $checked = null ) : bool
    {
        return (bool) isset($checked) && true === $checked;
    }

    protected function addBlogSection($wp_customize) : void
    {
        $wp_customize->add_section('tailcraft_theme_blog', [
            'title' => 'Blog',
            'description' => '',
            'priority' => 100,
        ]);
    }

    protected function addBlogControls($wp_customize) : void
    {

        $wp_customize->add_setting(
            'tailcraft_default_post_image',
            [
                'default' => '',
                'transport' => 'refresh',
            ]
        );
        $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,
            'tailcraft_default_post_image',
            [
                'label' => __('Default Post Image', 'tailcraft'),
                'section' => 'tailcraft_theme_blog',
                'settings' => 'tailcraft_default_post_image',
                'context' => 'tailcraft_context',
            ]
        ));
    }
    

    protected function addFooterSection($wp_customize) : void
    {
        $wp_customize->add_section('tailcraft_theme_footer', [
            'title' => 'Footer',
            'description' => '',
            'priority' => 120,
        ]);
    }

    protected function addFooterControls($wp_customize) : void
    {
        $wp_customize->add_setting('copyright');
        $wp_customize->add_control('copyright', [
            'label' => 'Copyright',
            'section' =>  'tailcraft_theme_footer',
            'description' => 'Enter copyright text - `[Y]` will be replaced with current year',
        ]);
    }

    public function copyright() : string
    {
        $text = \get_theme_mod('copyright');
        return str_replace('[Y]', date_i18n('Y'), $text);
    }

    public function showTitleAndTagline() : bool
    {
        return (bool) \get_theme_mod('tailcraft_display_title_and_tagline');

    }

    public function defaultPostImage(string $classes = '') : string
    {
        $url = \get_theme_mod('tailcraft_default_post_image');
        return sprintf('<img src="%s" class="%s" alt="">', esc_url($url), $classes);
    }
}



