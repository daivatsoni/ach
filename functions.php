<?php
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

add_filter('wp_default_scripts', 'remove_jquery_migrate');

function remove_jquery_migrate(&$scripts) {
    if (!is_admin()) {
        $scripts->remove('jquery');
//    $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.11.3' );
    }
}

add_action('wp_head', 'my_script_enqueuer');

function my_script_enqueuer() {
    wp_localize_script('my_ajax_script', 'myAjax', array('ach_ajaxurl' => admin_url('admin-ajax.php')));
}

//register menus
register_nav_menus(array(
    'primary_menu' => 'Primary Menu',
    'footer_menu' => 'Footer Menu',
));

// ajax menu navigation
add_action('wp_ajax_getMenuItems', 'getMenuItems');
add_action('wp_ajax_nopriv_getMenuItems', 'getMenuItems');

function getMenuItems() {
    $tiles = $_POST['tiles'];
    $arrTiles = array();
    if ($tiles == "project") {
        $termId = $_POST['tileId'];
        if ($termId) {
            $args = array(
                'post_type' => 'project',
                'status' => 'published',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'project-category',
                        'field' => 'id',
                        'terms' => $termId,
                    ),
                ),
            );
            $arrProjects = get_posts($args);
            if (!empty($arrProjects) && $arrProjects != NULL) {
                $html = ob_start();
                ?><div id="menu">
                <?php
                foreach ($arrProjects as $project) {
                    $project_link = get_permalink($project->ID);
                    ?>
                        <div class="collection withoutimg">
                            <a href="<?php echo $project_link ?>">
                                <div class="inner">
                                    <h3><?php echo strtoupper($project->post_title); ?></h3>
                                </div>
                            </a>
                        </div>
                <?php } ?>
                </div><?php
                $html = ob_get_clean();
                echo $html;
                exit;
            }
        }
        echo '<p>No any projects found for selected category.</p>';
        exit;
    } else {
        // get project categories thumb, title and URL
        $categories = get_terms('project-category', array(
            'orderby' => 'count',
            'hide_empty' => 0,
                ));

        $html = ob_start();
        ?><div id="menu">
        <?php
        if (!empty($categories) && $categories != NULL) {
            foreach ($categories as $category) {
                $cat_link = get_term_link($category);
                $cat_image = get_field('pcat_image', $category);
                ?>
                    <div class="collection">
                        <a href="<?php echo $cat_link; ?>">
                            <div class="inner" style="background-image:url(<?php echo esc_url($cat_image['url']); ?>)">
                                <h3><?php echo strtoupper($category->name); ?></h3>
                            </div>
                        </a>
                    </div>
            <?php } // endforeach
        } // endif  
        ?>
            <div class="collection withoutimg">
                <a href="#">
                    <div class="inner">
                        <h3>NEWS</h3>
                    </div>
                </a>
            </div>
            <div class="collection withoutimg">
                <a href="#">
                    <div class="inner">
                        <h3>CAREERS</h3>
                    </div>
                </a>
            </div>
            <div class="collection withoutimg">
                <a href="#">
                    <div class="inner">
                        <h3>CONTACT US</h3>
                    </div>
                </a>
            </div>
        </div><?php
        $html = ob_get_clean();
        echo $html;
        exit;
    }
}

/**
 * CUSTOMIZE MENU NAVIGATION WITH ACCORDION. 
 */
class ACH_menu_walker extends Walker {

    public $db_fields = array('parent' => 'menu_item_parent', 'id' => 'db_id');

    // Displays start of a level. E.g '<ul>'
    // @see Walker::start_lvl()
    function start_lvl(&$output, $depth = 0, $args = array()) {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat($t, $depth);
        $output .= "{$n}{$indent}<div><div class='inner'>{$n}";
    }

    // Displays end of a level. E.g '</ul>'
    // @see Walker::end_lvl()
    function end_lvl(&$output, $depth = 0, $args = array()) {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat($t, $depth);
        $output .= "$indent</div></div>{$n}";
    }

    // Displays start of an element. E.g '<li> Item Name'
    // @see Walker::start_el()
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ( $depth ) ? str_repeat($t, $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
//        $classes[] = 'menu-item-' . $item->ID;

        /**
         * Filters the arguments for a single nav menu item.
         *
         * @since 4.4.0
         *
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param WP_Post  $item  Menu item data object.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        $args = apply_filters('nav_menu_item_args', $args, $item, $depth);

        /**
         * Filters the CSS class(es) applied to a menu item's list item element.
         *
         * @since 3.0.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
         * @param WP_Post  $item    The current menu item.
         * @param stdClass $args    An object of wp_nav_menu() arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        /**
         * Filters the ID applied to a menu item's list item element.
         *
         * @since 3.0.1
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
         * @param WP_Post  $item    The current menu item.
         * @param stdClass $args    An object of wp_nav_menu() arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        // depth = 0 , has_children=false
        if ($depth === 0 && $this->has_children == false) {
            // parent level with no children, e.g. HOME
            $output .= $indent . '<li' . $id . $class_names . '>';
        } else if ($depth === 0 && $this->has_children == true) {
            // parent level with children menu, e.g. Who we are
            $output .= $indent . '<li><div class="accordion">';
        } else {
            $output .= $indent . '';
        }
//        $output .= $indent . '<li' . $id . $class_names .'>';

        $atts = array();
        $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
        $atts['href'] = !empty($item->url) ? $item->url : '';

        /**
         * Filters the HTML attributes applied to a menu item's anchor element.
         *
         * @since 3.6.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param array $atts {
         *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
         *
         *     @type string $title  Title attribute.
         *     @type string $target Target attribute.
         *     @type string $rel    The rel attribute.
         *     @type string $href   The href attribute.
         * }
         * @param WP_Post  $item  The current menu item.
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ( 'href' === $attr ) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        /** This filter is documented in wp-includes/post-template.php */
        $title = apply_filters('the_title', $item->title, $item->ID);

        /**
         * Filters a menu item's title.
         *
         * @since 4.4.0
         *
         * @param string   $title The menu item's title.
         * @param WP_Post  $item  The current menu item.
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

        // depth = 0 , has_children=false
        if ($depth === 0 && $this->has_children == false) {
            // parent level with no children, e.g. HOME
            $item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . $title . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
        } else if ($depth === 0 && $this->has_children == true) {
            // parent level with children menu, e.g. Who we are
            $item_output = $args->before;
            $item_output .= '<h3>';
            $item_output .= $args->link_before . $title . $args->link_after;
            $item_output .= '</h3>';
            $item_output .= $args->after;
        } else {
            $item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . $title . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
        }

        /**
         * Filters a menu item's starting output.
         *
         * The menu item's starting output only includes `$args->before`, the opening `<a>`,
         * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
         * no filter for modifying the opening and closing `<li>` for a menu item.
         *
         * @since 3.0.0
         *
         * @param string   $item_output The menu item's starting HTML output.
         * @param WP_Post  $item        Menu item data object.
         * @param int      $depth       Depth of menu item. Used for padding.
         * @param stdClass $args        An object of wp_nav_menu() arguments.
         */
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    // Displays end of an element. E.g '</li>'
    // @see Walker::end_el()
    function end_el(&$output, $item, $depth = 0, $args = array(), $is_parent = false) {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        // depth = 0 , has_children=false
        if ($depth === 0 && !$is_parent) {
            // parent level with no children, e.g. HOME
            $output .= "</li>{$n}";
        } else if ($depth === 0 && $is_parent) {
            // parent level with children menu, e.g. Who we are
            $output .= "</div></li>{$n}";
        } else {
            $output .= "{$n}";
        }
//        $output .= "</li>{$n}";
    }

    // Only follow down one branch
    function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
        if (!$element) {
            return;
        }

        $id_field = $this->db_fields['id'];
        $id = $element->$id_field;

        //display this element
        $this->has_children = !empty($children_elements[$id]);
        $is_parent = $this->has_children;
        if (isset($args[0]) && is_array($args[0])) {
            $args[0]['has_children'] = $this->has_children; // Back-compat.
        }

        $cb_args = array_merge(array(&$output, $element, $depth), $args);
        call_user_func_array(array($this, 'start_el'), $cb_args);

        // descend only when the depth is right and there are childrens for this element
        if (($max_depth == 0 || $max_depth > $depth + 1 ) && isset($children_elements[$id])) {

            foreach ($children_elements[$id] as $child) {

                if (!isset($newlevel)) {
                    $newlevel = true;
                    //start the child delimiter
                    $cb_args = array_merge(array(&$output, $depth), $args);
                    call_user_func_array(array($this, 'start_lvl'), $cb_args);
                }
                $this->display_element($child, $children_elements, $max_depth, $depth + 1, $args, $output);
            }
            unset($children_elements[$id]);
        }

        if (isset($newlevel) && $newlevel) {
            //end the child delimiter
            $cb_args = array_merge(array(&$output, $depth), $args);
            call_user_func_array(array($this, 'end_lvl'), $cb_args);
        }

        //end this element
        $cb_args = array_merge(array(&$output, $element, $depth), $args, array($is_parent));
        call_user_func_array(array($this, 'end_el'), $cb_args);
    }

}

// end of menu walker class

/**
 * ADD OPTION PAGE FOR ACF OPTIONS
 */
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'ACH Settings',
        'menu_title' => 'ACH Settings',
        'menu_slug' => 'ach-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}
