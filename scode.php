

// Hide Help tab in wp
function rabin_hide_help() {
    echo '<style type="text/css">
            #contextual-help-link-wrap { display: none !important; }
          </style>';
}
add_action('admin_head', 'rabin_hide_help');
// Hide Help tab end
