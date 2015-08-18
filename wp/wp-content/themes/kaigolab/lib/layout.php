<?php
namespace Brieze\Layout;

function template_path() {
    return Layout::$main_template;
}

class Layout {

    public static $main_template;

    public $slug;

    public $templates;

    public static $base;

    public function __construct($template = 'templates/layout.php') {
        $this->slug = basename($template, '.php');
        $this->templates = [$template];
        if (self::$base) {
            $str = substr($template, 0, -4);
            array_unshift($this->templates, sprintf($str . '-%s.php', self::$base));
        }
    }

    public function __toString() {
        $this->templates = apply_filters('brieze/layout_' . $this->slug, $this->templates);
        return locate_template($this->templates);
    }

    public static function wrap($main) {
        if (!is_string($main)) {
            return $main;
        }
        self::$main_template = $main;
        self::$base = basename(self::$main_template, '.php');
        if (self::$base === 'index') {
            self::$base = false;
        }
        return new Layout();
    }
}
add_filter('template_include', [__NAMESPACE__ . '\\Layout', 'wrap'], 99);
