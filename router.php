<?php
require __DIR__ . '/bootstrap.php';

if (php_sapi_name() === 'cli-server') {
    $urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $file = BASE_PATH . $urlPath;
    if (is_file($file)) {
        return false;
    }
}



require_once 'bootstrap.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'menu':
        require_once 'pages/menu/index.php';
        break;

    case 'home':
    default:
        require_once 'index.php';
        break;
}