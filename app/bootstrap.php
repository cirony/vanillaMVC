<?php
require_once 'config/config.php';

spl_autoload_register(function($className) {
    require_once 'lib/'. $className . '.php';
});

?>