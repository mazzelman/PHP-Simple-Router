<?php

// get the request
$request = $_SERVER['REQUEST_URI'];
// set the view directory
$viewDir = '/views/';
// set the default content
$content = '';
// set the default sidebar
$sidebar = false;
// set the default title
$title = "PHP Simple Router";

switch ($request) {
    case '':
    case '/':
        ob_start();
        require __DIR__ . $viewDir . 'home.php';
        $content = ob_get_clean();
        break;

    case '/work':
        ob_start();
        require __DIR__ . $viewDir . 'work.php';
        $content = ob_get_clean();
        break;
    
    case '/about':
        ob_start();
        require __DIR__ . $viewDir . 'about.php';
        $content = ob_get_clean();
        break;

    default:
        http_response_code(404);
        ob_start();
        require __DIR__ . $viewDir . '404.php';
        $content = ob_get_clean();
        break;
}

require __DIR__ . $viewDir . 'layout.php';

?>
