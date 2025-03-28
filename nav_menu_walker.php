<?php

// Bootstrap 5 wp_nav_menu walker

class Bootstrap_5_Walker_Nav_Menu extends Walker_Nav_Menu {
    private $current_item;
    private $dropdown_menu_alignment_values = [
        'dropdown-menu-start', 'dropdown-menu-end',
        'dropdown-menu-sm-start', 'dropdown-menu-sm-end',
        'dropdown-menu-md-start', 'dropdown-menu-md-end',
        'dropdown-menu-lg-start', 'dropdown-menu-lg-end',
        'dropdown-menu-xl-start', 'dropdown-menu-xl-end',
        'dropdown-menu-xxl-start', 'dropdown-menu-xxl-end'
    ];

    function start_lvl(&$output, $depth = 0, $args = null) {
        $classes = array_filter($this->current_item->classes, function($class) {
            return in_array($class, $this->dropdown_menu_alignment_values);
        });

        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ", $classes)) . " depth_$depth\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $this->current_item = $item;
        $indent = str_repeat("\t", $depth);

        $classes = (array) $item->classes;
        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;

        if ($depth && $args->walker->has_children) {
            $classes[] = 'dropdown-menu dropdown-menu-end';
        }

        $class_names = esc_attr(join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args)));

        $output .= $indent . '<li class="' . $class_names . '">';

        $attributes = sprintf(
            ' title="%s" target="%s" rel="%s" href="%s" class="%s %s %s"',
            esc_attr($item->attr_title),
            esc_attr($item->target),
            esc_attr($item->xfn),
            esc_url($item->url),
            ($depth > 0) ? 'dropdown-item' : 'nav-link',
            ($item->current || in_array('current-menu-item', $classes)) ? 'active' : '',
            ($args->walker->has_children) ? 'dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false' : ''
        );

        $item_output = sprintf(
            '%s<a%s>%s%s%s</a>%s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $args->link_after,
            $args->after
        );

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

// Register menu
register_nav_menu('primary', __('Main Menu', 'wp-blank'));