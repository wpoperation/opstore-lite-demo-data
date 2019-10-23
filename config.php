<?php 
      $data = array(
        'furniture' => array(
          'categories'        => array( 'Furniture' ),
          'preview_url'     => 'https://demo.wpoperation.com/opstore-lite/furniture/',
          'xml_file'        => 'content.xml',
          'theme_settings'  => 'options.dat',
          'widgets_file'    => 'widgets.wie',
          'slider_file'   => 'slider.ss3',
          'home_title'      => 'Home',
          'blog_title'      => 'Blog',
          'posts_to_show'   => '10',
          'elementor_width'   => '1170',
          'is_shop' => true,
          'menus'         => array(
              'primary' => 'Primary',
          ),
          'required_plugins'  => array(
            'free' => array(
              array(
                'slug'    => 'woocommerce',
                'init'    => 'woocommerce/woocommerce.php',
                'name'    => 'WooCommerce',
              ),
              array(
                'slug'    => 'elementor',
                'init'    => 'elementor/elementor.php',
                'name'    => 'Elementor',
              ),
              array(
                'slug'    => 'wpop-elementor-addons',
                'init'    => 'wpop-elementor-addons/wpop-elementor-addons.php',
                'name'    => 'WPOP Elementor Addons',
              ),
              array(
                'slug'    => 'salert',
                'init'    => 'salert/salert.php',
                'name'    => 'Salert',
              ),
              array(
                'slug'    => 'smart-slider-3',
                'init'    => 'smart-slider-3/smart-slider-3.php',
                'name'    => 'Smart Slider',
              ),
              array(
                'slug'    => 'contact-form-7',
                'init'    => 'contact-form-7/wp-contact-form-7.php',
                'name'    => 'Contact Form 7',
              ),
              array(
                'slug'    => 'ajax-login-and-registration-modal-popup',
                'init'    => 'ajax-login-and-registration-modal-popup/ajax-login-and-registration-modal-popup.php',
                'name'    => 'Ajax Login popup',
              ),
              array(
                'slug'    => 'yith-woocommerce-wishlist',
                'init'    => 'yith-woocommerce-wishlist/init.php',
                'name'    => 'YITH WooCommerce Wishlist',
              ),
              array(
                'slug'    => 'yith-woocommerce-quick-view',
                'init'    => 'yith-woocommerce-quick-view/init.php',
                'name'    => 'YITH WooCommerce Quick View',
              ),              
              array(
                'slug'    => 'yith-woocommerce-compare',
                'init'    => 'yith-woocommerce-compare/init.php',
                'name'    => 'YITH WooCommerce Compare',
              ),
              array(
                'slug'    => 'mailpoet',
                'init'    => 'mailpoet/mailpoet.php',
                'name'    => 'Mailpoet',
              ),
            ),
            'premium' => array(
              array(
                'slug'    => 'sale-alert',
                'init'    => 'sale-alert/sale-alert.php',
                'name'    => 'Sale Alert(Pro)',
              ),
              
            ),
          ),
        ),

        'mega-store' => array(
          'categories'        => array( 'Electronics' ),
          'preview_url'     => 'https://demo.wpoperation.com/opstore-lite/mega-store/',
          'xml_file'        => 'content.xml',
          'theme_settings'  => 'options.dat',
          'widgets_file'    => 'widgets.wie',
          'slider_file'   => 'slider.ss3',
          'home_title'      => 'Home',
          'blog_title'      => 'Blog',
          'posts_to_show'   => '10',
          'elementor_width'   => '1170',
          'is_shop' => true,
          'menus'         => array(
              'primary' => 'Primary',
          ),
          'required_plugins'  => array(
            'free' => array(
              array(
                'slug'    => 'woocommerce',
                'init'    => 'woocommerce/woocommerce.php',
                'name'    => 'WooCommerce',
              ),
              array(
                'slug'    => 'elementor',
                'init'    => 'elementor/elementor.php',
                'name'    => 'Elementor',
              ),
              array(
                'slug'    => 'wpop-elementor-addons',
                'init'    => 'wpop-elementor-addons/wpop-elementor-addons.php',
                'name'    => 'WPOP Elementor Addons',
              ),
              array(
                'slug'    => 'salert',
                'init'    => 'salert/salert.php',
                'name'    => 'Salert',
              ),
              array(
                'slug'    => 'smart-slider-3',
                'init'    => 'smart-slider-3/smart-slider-3.php',
                'name'    => 'Smart Slider',
              ),
              array(
                'slug'    => 'contact-form-7',
                'init'    => 'contact-form-7/wp-contact-form-7.php',
                'name'    => 'Contact Form 7',
              ),
              array(
                'slug'    => 'ajax-login-and-registration-modal-popup',
                'init'    => 'ajax-login-and-registration-modal-popup/ajax-login-and-registration-modal-popup.php',
                'name'    => 'Ajax Login popup',
              ),
              array(
                'slug'    => 'yith-woocommerce-wishlist',
                'init'    => 'yith-woocommerce-wishlist/init.php',
                'name'    => 'YITH WooCommerce Wishlist',
              ),
              array(
                'slug'    => 'yith-woocommerce-quick-view',
                'init'    => 'yith-woocommerce-quick-view/init.php',
                'name'    => 'YITH WooCommerce Quick View',
              ),              
              array(
                'slug'    => 'yith-woocommerce-compare',
                'init'    => 'yith-woocommerce-compare/init.php',
                'name'    => 'YITH WooCommerce Compare',
              ),
              array(
                'slug'    => 'mailpoet',
                'init'    => 'mailpoet/mailpoet.php',
                'name'    => 'Mailpoet',
              ),
            ),
            'premium' => array(
              array(
                'slug'    => 'sale-alert',
                'init'    => 'sale-alert/sale-alert.php',
                'name'    => 'Sale Alert(Pro)',
              ),
              
            ),
          ),
        ),

        'default' => array(
          'categories'        => array( 'Default', 'Fashion' ),
          'preview_url'     => 'https://demo.wpoperation.com/opstore/default/',
          'xml_file'        => 'content.xml',
          'theme_settings'  => 'options.dat',
          'widgets_file'    => 'widgets.wie',
          'slider_file'   => 'slider.ss3',
          'home_title'      => 'Home',
          'blog_title'      => 'Blog',
          'posts_to_show'   => '10',
          'elementor_width'   => '1170',
          'is_shop' => true,
          'menus'         => array(
              'primary' => 'Menu 1',
              'top' => 'Top menu',
          ),
          'required_plugins'  => array(
            'free' => array(
              array(
                'slug'    => 'woocommerce',
                'init'    => 'woocommerce/woocommerce.php',
                'name'    => 'WooCommerce',
              ),
              array(
                'slug'    => 'elementor',
                'init'    => 'elementor/elementor.php',
                'name'    => 'Elementor',
              ),
              array(
                'slug'    => 'wpop-elementor-addons',
                'init'    => 'wpop-elementor-addons/wpop-elementor-addons.php',
                'name'    => 'WPOP Elementor Addons',
              ),
              array(
                'slug'    => 'salert',
                'init'    => 'salert/salert.php',
                'name'    => 'Salert',
              ),
              array(
                'slug'    => 'contact-form-7',
                'init'    => 'contact-form-7/wp-contact-form-7.php',
                'name'    => 'Contact Form 7',
              ),
              array(
                'slug'    => 'smart-slider-3',
                'init'    => 'smart-slider-3/smart-slider-3.php',
                'name'    => 'Smart Slider',
              ),
              array(
                'slug'    => 'ajax-login-and-registration-modal-popup',
                'init'    => 'ajax-login-and-registration-modal-popup/ajax-login-and-registration-modal-popup.php',
                'name'    => 'Ajax Login popup',
              ),
              array(
                'slug'    => 'yith-woocommerce-wishlist',
                'init'    => 'yith-woocommerce-wishlist/init.php',
                'name'    => 'YITH WooCommerce Wishlist',
              ),
              array(
                'slug'    => 'yith-woocommerce-quick-view',
                'init'    => 'yith-woocommerce-quick-view/init.php',
                'name'    => 'YITH WooCommerce Quick View',
              ),              
              array(
                'slug'    => 'yith-woocommerce-compare',
                'init'    => 'yith-woocommerce-compare/init.php',
                'name'    => 'YITH WooCommerce Compare',
              ),
              array(
                'slug'    => 'mailpoet',
                'init'    => 'mailpoet/mailpoet.php',
                'name'    => 'Mailpoet',
              ),
            ),
            'premium' => array(
              array(
                'slug'    => 'sale-alert',
                'init'    => 'sale-alert/sale-alert.php',
                'name'    => 'Sale Alert(Pro)',
              ),
              
            ),
          ),
        ),
        'fashion' => array(
          'categories'        => array( 'Fashion' ),
          'preview_url'     => 'https://demo.wpoperation.com/opstore/fashion/',
          'xml_file'        => 'content.xml',
          'theme_settings'  => 'options.dat',
          'widgets_file'    => 'widgets.wie',
          'slider_file'   => 'slider.ss3',
          'home_title'      => 'Home',
          'blog_title'      => 'Blog',
          'posts_to_show'   => '10',
          'elementor_width'   => '1170',
          'is_shop' => true,
          'menus'         => array(
              'primary' => 'Main Menu',
          ),
          'required_plugins'  => array(
            'free' => array(
              array(
                'slug'    => 'woocommerce',
                'init'    => 'woocommerce/woocommerce.php',
                'name'    => 'WooCommerce',
              ),
              array(
                'slug'    => 'elementor',
                'init'    => 'elementor/elementor.php',
                'name'    => 'Elementor',
              ),
              array(
                'slug'    => 'wpop-elementor-addons',
                'init'    => 'wpop-elementor-addons/wpop-elementor-addons.php',
                'name'    => 'WPOP Elementor Addons',
              ),
              array(
                'slug'    => 'salert',
                'init'    => 'salert/salert.php',
                'name'    => 'Salert',
              ),
              array(
                'slug'    => 'contact-form-7',
                'init'    => 'contact-form-7/wp-contact-form-7.php',
                'name'    => 'Contact Form 7',
              ),
              array(
                'slug'    => 'smart-slider-3',
                'init'    => 'smart-slider-3/smart-slider-3.php',
                'name'    => 'Smart Slider',
              ),
              array(
                'slug'    => 'ajax-login-and-registration-modal-popup',
                'init'    => 'ajax-login-and-registration-modal-popup/ajax-login-and-registration-modal-popup.php',
                'name'    => 'Ajax Login popup',
              ),
              array(
                'slug'    => 'yith-woocommerce-wishlist',
                'init'    => 'yith-woocommerce-wishlist/init.php',
                'name'    => 'YITH WooCommerce Wishlist',
              ),
              array(
                'slug'    => 'yith-woocommerce-quick-view',
                'init'    => 'yith-woocommerce-quick-view/init.php',
                'name'    => 'YITH WooCommerce Quick View',
              ),              
              array(
                'slug'    => 'yith-woocommerce-compare',
                'init'    => 'yith-woocommerce-compare/init.php',
                'name'    => 'YITH WooCommerce Compare',
              ),
              array(
                'slug'    => 'mailpoet',
                'init'    => 'mailpoet/mailpoet.php',
                'name'    => 'Mailpoet',
              ),
            ),
            'premium' => array(
              array(
                'slug'    => 'sale-alert',
                'init'    => 'sale-alert/sale-alert.php',
                'name'    => 'Sale Alert(Pro)',
              ),
              
            ),
          ),
        ),
        'clothing' => array(
          'categories'        => array( 'Clothing' ),
          'preview_url'     => 'https://demo.wpoperation.com/opstore/clothing/',
          'xml_file'        => 'content.xml',
          'theme_settings'  => 'options.dat',
          'widgets_file'    => 'widgets.wie',
          'home_title'      => 'Home',
          'blog_title'      => 'Blog',
          'posts_to_show'   => '10',
          'elementor_width'   => '1170',
          'is_shop' => true,
          'menus'         => array(
              'primary' => 'Main Menu',
          ),
          'required_plugins'  => array(
            'free' => array(
              array(
                'slug'    => 'woocommerce',
                'init'    => 'woocommerce/woocommerce.php',
                'name'    => 'WooCommerce',
              ),
              array(
                'slug'    => 'elementor',
                'init'    => 'elementor/elementor.php',
                'name'    => 'Elementor',
              ),
              array(
                'slug'    => 'wpop-elementor-addons',
                'init'    => 'wpop-elementor-addons/wpop-elementor-addons.php',
                'name'    => 'WPOP Elementor Addons',
              ),
              array(
                'slug'    => 'salert',
                'init'    => 'salert/salert.php',
                'name'    => 'Salert',
              ),
              array(
                'slug'    => 'contact-form-7',
                'init'    => 'contact-form-7/wp-contact-form-7.php',
                'name'    => 'Contact Form 7',
              ),
              array(
                'slug'    => 'ajax-login-and-registration-modal-popup',
                'init'    => 'ajax-login-and-registration-modal-popup/ajax-login-and-registration-modal-popup.php',
                'name'    => 'Ajax Login popup',
              ),
              array(
                'slug'    => 'yith-woocommerce-wishlist',
                'init'    => 'yith-woocommerce-wishlist/init.php',
                'name'    => 'YITH WooCommerce Wishlist',
              ),
              array(
                'slug'    => 'yith-woocommerce-quick-view',
                'init'    => 'yith-woocommerce-quick-view/init.php',
                'name'    => 'YITH WooCommerce Quick View',
              ),              
              array(
                'slug'    => 'yith-woocommerce-compare',
                'init'    => 'yith-woocommerce-compare/init.php',
                'name'    => 'YITH WooCommerce Compare',
              ),
              array(
                'slug'    => 'mailpoet',
                'init'    => 'mailpoet/mailpoet.php',
                'name'    => 'Mailpoet',
              ),
            ),
            'premium' => array(
              array(
                'slug'    => 'sale-alert',
                'init'    => 'sale-alert/sale-alert.php',
                'name'    => 'Sale Alert(Pro)',
              ),
              
            ),
          ),
        ),
        'clothingv2' => array(
          'categories'        => array( 'Clothing' ),
          'preview_url'     => 'https://demo.wpoperation.com/opstore/clothingv2/',
          'xml_file'        => 'content.xml',
          'theme_settings'  => 'options.dat',
          'widgets_file'    => 'widgets.wie',
          'slider_file'   => 'slider.ss3',
          'home_title'      => 'Home',
          'blog_title'      => 'Blog',
          'posts_to_show'   => '10',
          'elementor_width'   => '1170',
          'is_shop' => true,
          'menus'         => array(
              'primary' => 'Main Menu',
              'top-menu' => 'Top Menu'
          ),
          'required_plugins'  => array(
            'free' => array(
              array(
                'slug'    => 'woocommerce',
                'init'    => 'woocommerce/woocommerce.php',
                'name'    => 'WooCommerce',
              ),
              array(
                'slug'    => 'elementor',
                'init'    => 'elementor/elementor.php',
                'name'    => 'Elementor',
              ),
              array(
                'slug'    => 'wpop-elementor-addons',
                'init'    => 'wpop-elementor-addons/wpop-elementor-addons.php',
                'name'    => 'WPOP Elementor Addons',
              ),
              array(
                'slug'    => 'salert',
                'init'    => 'salert/salert.php',
                'name'    => 'Salert',
              ),
              array(
                'slug'    => 'contact-form-7',
                'init'    => 'contact-form-7/wp-contact-form-7.php',
                'name'    => 'Contact Form 7',
              ),
              array(
                'slug'    => 'smart-slider-3',
                'init'    => 'smart-slider-3/smart-slider-3.php',
                'name'    => 'Smart Slider',
              ),
              array(
                'slug'    => 'ajax-login-and-registration-modal-popup',
                'init'    => 'ajax-login-and-registration-modal-popup/ajax-login-and-registration-modal-popup.php',
                'name'    => 'Ajax Login popup',
              ),
              array(
                'slug'    => 'yith-woocommerce-wishlist',
                'init'    => 'yith-woocommerce-wishlist/init.php',
                'name'    => 'YITH WooCommerce Wishlist',
              ),
              array(
                'slug'    => 'yith-woocommerce-quick-view',
                'init'    => 'yith-woocommerce-quick-view/init.php',
                'name'    => 'YITH WooCommerce Quick View',
              ),              
              array(
                'slug'    => 'yith-woocommerce-compare',
                'init'    => 'yith-woocommerce-compare/init.php',
                'name'    => 'YITH WooCommerce Compare',
              ),
              array(
                'slug'    => 'mailpoet',
                'init'    => 'mailpoet/mailpoet.php',
                'name'    => 'Mailpoet',
              ),
            ),
            'premium' => array(
              array(
                'slug'    => 'sale-alert',
                'init'    => 'sale-alert/sale-alert.php',
                'name'    => 'Sale Alert(Pro)',
              ),
              
            ),
          ),
        ),
        'electronics' => array(
          'categories'        => array( 'Electronics' ),
          'preview_url'     => 'https://demo.wpoperation.com/opstore/electronics/',
          'xml_file'        => 'content.xml',
          'theme_settings'  => 'options.dat',
          'widgets_file'    => 'widgets.wie',
          'slider_file'   => 'slider.ss3',
          'home_title'      => 'Home',
          'blog_title'      => 'Blog',
          'posts_to_show'   => '10',
          'elementor_width'   => '1170',
          'is_shop' => true,
          'menus'         => array(
              'primary' => 'Main Menu'
          ),
          'required_plugins'  => array(
            'free' => array(
              array(
                'slug'    => 'woocommerce',
                'init'    => 'woocommerce/woocommerce.php',
                'name'    => 'WooCommerce',
              ),
              array(
                'slug'    => 'elementor',
                'init'    => 'elementor/elementor.php',
                'name'    => 'Elementor',
              ),
              array(
                'slug'    => 'wpop-elementor-addons',
                'init'    => 'wpop-elementor-addons/wpop-elementor-addons.php',
                'name'    => 'WPOP Elementor Addons',
              ),
              array(
                'slug'    => 'salert',
                'init'    => 'salert/salert.php',
                'name'    => 'Salert',
              ),
              array(
                'slug'    => 'contact-form-7',
                'init'    => 'contact-form-7/wp-contact-form-7.php',
                'name'    => 'Contact Form 7',
              ),
              array(
                'slug'    => 'smart-slider-3',
                'init'    => 'smart-slider-3/smart-slider-3.php',
                'name'    => 'Smart Slider',
              ),
              array(
                'slug'    => 'ajax-login-and-registration-modal-popup',
                'init'    => 'ajax-login-and-registration-modal-popup/ajax-login-and-registration-modal-popup.php',
                'name'    => 'Ajax Login popup',
              ),
              array(
                'slug'    => 'yith-woocommerce-wishlist',
                'init'    => 'yith-woocommerce-wishlist/init.php',
                'name'    => 'YITH WooCommerce Wishlist',
              ),
              array(
                'slug'    => 'yith-woocommerce-quick-view',
                'init'    => 'yith-woocommerce-quick-view/init.php',
                'name'    => 'YITH WooCommerce Quick View',
              ),              
              array(
                'slug'    => 'yith-woocommerce-compare',
                'init'    => 'yith-woocommerce-compare/init.php',
                'name'    => 'YITH WooCommerce Compare',
              ),
              array(
                'slug'    => 'mailpoet',
                'init'    => 'mailpoet/mailpoet.php',
                'name'    => 'Mailpoet',
              ),
            ),
            'premium' => array(
              array(
                'slug'    => 'sale-alert',
                'init'    => 'sale-alert/sale-alert.php',
                'name'    => 'Sale Alert(Pro)',
              ),
              
            ),
          ),
        )
      );