<?php

// ------------------------------------------------
// GLOBAL
// ------------------------------------------------

add_theme_support( 'woocommerce' );

// Remove WooCommerce CSS

add_action( 'after_setup_theme', 'aves_product_gallery' );
 
function aves_product_gallery() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

// ------------------------------------------------
// ARCHIVE PAGE
// ------------------------------------------------

// Hooks

add_action( 'init', 'aves_archive' );
function aves_archive() {
	add_action( 'woocommerce_aves_breadcrumbs', 'woocommerce_breadcrumb', 20, 0 );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart',10 ); 
}

// Product Thumbanail Wrap

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
    function woocommerce_template_loop_product_thumbnail() {
        echo woocommerce_get_product_thumbnail();
    } 
}

if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {   
    function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $placeholder_width = 0, $placeholder_height = 0  ) {
        global $post, $woocommerce;
        $output = '<div class="product__image">';

        if ( has_post_thumbnail() ) {              
            $output .= get_the_post_thumbnail( $post->ID, $size );
        }  

        $output .= '</div>';
        return $output;
    }
}

// ------------------------------------------------
// PRODUCT PAGE
// ------------------------------------------------

// Hooks

add_action( 'init', 'aves_product' );
function aves_product() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
	add_action( 'woocommerce_aves_breadcrumbs', 'woocommerce_breadcrumb', 20, 0 );

    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40, 0);

    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10, 0 );
//    add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 80, 0 );
}

// Tabs

add_action( 'woocommerce_single_product_summary', 'aves_tabs', 70, 0 );
function aves_tabs() {
    global $post, $product, $woocommerce; ?>

    <div class="product__accordion">

        <div class="tab tab--description">
            <input id="tab-one" type="checkbox" name="tabs" checked>
            <label for="tab-one">Description</label>
            <div class="tab-content">
                <?php the_content(); ?>
            </div>
        </div>

        <div class="tab tab--information">
            <input id="tab-two" type="checkbox" name="tabs">
            <label for="tab-two">Information</label>
            <div class="tab-content">
                <?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
                    <span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>
                <?php endif; ?>
                <?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>
                <?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>
            </div>
        </div>

        <div class="tab tab--delivery">
            <input id="tab-three" type="checkbox" name="tabs">
            <label for="tab-three">Delivery</label>
            <div class="tab-content">
                <?php if (get_field('delivery_tab', $post->ID) != NULL) {
                    the_field('delivery_tab', $post->ID);
                } else {
                   the_field('delivery_tab', 'options');
                } ?>
                <a href="/delivery">More information</a>
            </div>
        </div>

    </div>

<?php }

// Remove excerpt
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);


// Remove variation stock data from product page display
add_filter( 'woocommerce_get_stock_html', '__return_empty_string' );






