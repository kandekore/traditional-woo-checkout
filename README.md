# Traditional WooCommerce Checkout

## Description
The Traditional WooCommerce Checkout plugin replaces the 'blocks' WooCommerce checkout page content with a traditional checkout shortcode. This plugin aims to simplify the checkout process and provide a more straightforward experience for users.

## Author
D.Kandekore

## Installation
1. Upload the plugin files to the `/wp-content/plugins/` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.

## Usage
After activation, a new menu item titled "Custom WC Checkout" will appear in the WordPress admin panel. Navigate to this menu to access the settings page for the plugin.

### Admin Panel Settings
On the settings page, you will find an option to set the checkout page to traditional. Once you click the 'Set to Traditional Checkout' button, the plugin will update the checkout page content to use a traditional checkout format.

## Features
- **Admin Menu Integration**: Adds a new menu item in the WordPress admin panel for easy access to plugin settings.
- **Simple Configuration**: A single button to switch the checkout page to traditional format.
- **Nonce Field for Security**: Includes a nonce field in the settings form for improved security.

## Hooks and Filters
The plugin hooks into `admin_menu` to add the settings page and uses the `wp_update_post` function to update the checkout page content.

## Requirements
- WordPress
- WooCommerce Plugin

