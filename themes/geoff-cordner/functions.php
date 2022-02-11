<?php
/**
 * Geoff Cordnerfunctions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage geoff-cordner
 * @since Geoff Cordner 1.0
 */

if (!function_exists('geoffcordner_styles')):

    /**
     * Enqueue styles.
     *
     * @since Twenty Twenty-Two 1.0
     *
     * @return void
     */
    function geoffcordner_styles()
    {
        // Register theme stylesheet.
        wp_register_style('geoffcordner-style', get_stylesheet_directory_uri() . '/style.css', array() , $version_string);

        // Enqueue theme stylesheet.
        wp_enqueue_style('geoffcordner-style');

    }

endif;

/*
The parameter 99 below assigns priority & loads the child styles last.
This and a better way might be explained here: 
https://stackoverflow.com/questions/41938369/how-to-load-wordpress-child-theme-css-after-parent-theme-css
*/
add_action('wp_enqueue_scripts', 'geoffcordner_styles', 99);

if (!function_exists('twentytwentytwo_get_font_face_styles')):

    /**
     * Get font face styles.
     * Called by functions twentytwentytwo_styles() and twentytwentytwo_editor_styles() above.
     *
     * @since Twenty Twenty-Two 1.0
     *
     * @return string
     */
    function twentytwentytwo_get_font_face_styles()
    {

        return "
		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri('assets/fonts/SourceSerif4Variable-Roman.ttf.woff2') . "') format('woff2');
		}

		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri('assets/fonts/SourceSerif4Variable-Italic.ttf.woff2') . "') format('woff2');
		}

		/* jetbrains-mono-200 - latin */
@font-face {
  font-family: 'JetBrains Mono';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: url('" . get_theme_file_uri('assets/fonts/jetbrains-mono-v11-latin-200.woff2') . "') format('woff2'); 
  }
/* jetbrains-mono-300 - latin */
@font-face {
  font-family: 'JetBrains Mono';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url('" . get_theme_file_uri('assets/fonts/jetbrains-mono-v11-latin-300.woff2') . "') format('woff2'); 
  }
/* jetbrains-mono-regular - latin */
@font-face {
  font-family: 'JetBrains Mono';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('" . get_theme_file_uri('assets/fonts/jetbrains-mono-v11-latin-regular.woff2') . "') format('woff2'); 
  }
/* jetbrains-mono-500 - latin */
@font-face {
  font-family: 'JetBrains Mono';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url('" . get_theme_file_uri('assets/fonts/jetbrains-mono-v11-latin-500.woff2') . "') format('woff2'); 
  }
/* jetbrains-mono-600 - latin */
@font-face {
  font-family: 'JetBrains Mono';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url('" . get_theme_file_uri('assets/fonts/jetbrains-mono-v11-latin-600.woff2') . "') format('woff2'); 
  }
/* jetbrains-mono-700 - latin */
@font-face {
  font-family: 'JetBrains Mono';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url('" . get_theme_file_uri('assets/fonts/jetbrains-mono-v11-latin-700.woff2') . "') format('woff2'); 
       }
/* jetbrains-mono-800 - latin */
@font-face {
  font-family: 'JetBrains Mono';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: url('" . get_theme_file_uri('assets/fonts/jetbrains-mono-v11-latin-800.woff2') . "') format('woff2'); 
  }
/* jetbrains-mono-200italic - latin */
@font-face {
  font-family: 'JetBrains Mono';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: url('" . get_theme_file_uri('assets/fonts/jetbrains-mono-v11-latin-200italic.woff2') . "') format('woff2'); 
  }
/* jetbrains-mono-300italic - latin */
@font-face {
  font-family: 'JetBrains Mono';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: url('" . get_theme_file_uri('assets/fonts/jetbrains-mono-v11-latin-300italic.woff2') . "') format('woff2'); 
  }
/* jetbrains-mono-italic - latin */
@font-face {
  font-family: 'JetBrains Mono';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url('" . get_theme_file_uri('assets/fonts/jetbrains-mono-v11-latin-italic.woff2') . "') format('woff2'); 
  }
/* jetbrains-mono-500italic - latin */
@font-face {
  font-family: 'JetBrains Mono';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: url('" . get_theme_file_uri('assets/fonts/jetbrains-mono-v11-latin-500italic.woff2') . "') format('woff2'); 
  }
/* jetbrains-mono-600italic - latin */
@font-face {
  font-family: 'JetBrains Mono';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: url('" . get_theme_file_uri('assets/fonts/jetbrains-mono-v11-latin-600italic.woff2') . "') format('woff2'); 
  }

  /* roboto-condensed-regular - latin */
@font-face {
  font-family: 'Roboto Condensed';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('" . get_theme_file_uri( 'assets/fonts/roboto-condensed-v24-latin-regular.woff2' ) . "') format('woff2');
}
/* roboto-condensed-italic - latin */
@font-face {
  font-family: 'Roboto Condensed';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url('" . get_theme_file_uri( 'assets/fonts/roboto-condensed-v24-latin-italic.woff2' ) . "') format('woff2');
  }
/* roboto-condensed-700 - latin */
@font-face {
  font-family: 'Roboto Condensed';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url('" . get_theme_file_uri( 'assets/fonts/roboto-condensed-v24-latin-700.woff2' ) . "') format('woff2');
  }
/* roboto-condensed-700italic - latin */
@font-face {
  font-family: 'Roboto Condensed';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: url('" . get_theme_file_uri( 'assets/fonts/roboto-condensed-v24-latin-700italic.woff2' ) . "') format('woff2');
}
/* oswald-500 - latin */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
font-display: swap;
  font-weight: 500;
  src: url('" . get_theme_file_uri( 'assets/fonts/oswald-v41-latin-500.woff2' ) . "') format('woff2');
}
/* oswald-600 - latin */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
font-display: swap;
  font-weight: 600;
  src: url('" . get_theme_file_uri( 'assets/fonts/oswald-v41-latin-600.woff2' ) . "') format('woff2');,
}
/* oswald-700 - latin */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
font-display: swap;
  font-weight: 700;
  src: url('" . get_theme_file_uri( 'assets/fonts/oswald-v41-latin-700.woff2' ) . "') format('woff2');,
}
		";

    }

endif;

if (!function_exists('twentytwentytwo_preload_webfonts')):

    /**
     * Preloads the main web font to improve performance.
     *
     * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (it is used
     * on every heading, for example). The other font is only needed if there is any applicable content in italic style,
     * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
     * at all.
     *
     * @since Twenty Twenty-Two 1.0
     *
     * @return void
     */
    function twentytwentytwo_preload_webfonts()
    {
?>
		<link rel="preload" href="<?php echo esc_url(get_theme_file_uri('assets/fonts/SourceSerif4Variable-Roman.ttf.woff2')); ?>" as="font" type="font/woff2" crossorigin>
		<?php
    }

endif;

add_action('wp_head', 'twentytwentytwo_preload_webfonts');

