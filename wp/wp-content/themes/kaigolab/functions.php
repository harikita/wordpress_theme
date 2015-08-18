<?php

$lib_includes = [
    'lib/init.php',
    'lib/layout.php',
    'lib/assets.php',
    'lib/extras.php',
];

foreach ($lib_includes as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error(sprintf(__('Error locating %s for inclusion', 'bst'), $file), E_USER_ERROR);
    }
    require_once $filepath;
}
unset($file, $filepath);
