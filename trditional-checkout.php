<?php
/**
 * Plugin Name: Traditional WooCommerce Checkout
 * Description: Replace WooCommerce checkout page content with traditional checkout shortcode.
 * Version:     1.0
 * Author:      d.Kandekore
 */

// Add menu item in admin panel
function custom_wc_checkout_admin_menu() {
    add_menu_page(
        'Custom WC Checkout Settings',
        'Custom WC Checkout',
        'manage_options',
        'custom-wc-checkout-settings',
        'custom_wc_checkout_settings_page'
    );
}
add_action('admin_menu', 'custom_wc_checkout_admin_menu');

// Settings page HTML
function custom_wc_checkout_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <form method="post" action="">
            <?php wp_nonce_field('custom_wc_checkout_action', 'custom_wc_checkout_nonce'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Set Checkout Page to Traditional</th>
                    <td><input type="submit" name="set_traditional_checkout" class="button button-primary" value="<?php echo esc_attr('Set to Traditional Checkout'); ?>"/></td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    if ( isset($_POST['set_traditional_checkout']) && check_admin_referer('custom_wc_checkout_action', 'custom_wc_checkout_nonce') ) {
        custom_wc_checkout_set_page();
    }
}

// Update the checkout page content
function custom_wc_checkout_set_page() {
    $checkout_page_id = wc_get_page_id('checkout');
    if ($checkout_page_id > 0) {
        wp_update_post(array(
            'ID'           => $checkout_page_id,
            'post_content' => '[woocommerce_checkout]'
        ));
        echo '<div id="message" class="updated notice notice-success is-dismissible"><p>' . esc_html__('Checkout page set to traditional checkout.', 'custom-wc-checkout') . '</p></div>';
    }
}
