<?php
class Router {
    public function run() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $baseDir = '/course_project/public'; // Учитываем папку
        
        if (strpos($uri, $baseDir) === 0) {
            $uri = substr($uri, strlen($baseDir));
        }
        $uri = $uri ?: '/';

        if ($uri === '/' || $uri === '/home') {
            require_once '../app/HomeController.php';
            $controller = new HomeController();
            $controller->index();
        } elseif (preg_match('/^\/article\/(\d+)$/', $uri, $matches)) {
            require_once '../app/ArticleController.php';
            $controller = new ArticleController();
            $controller->show((int)$matches[1]);
        } elseif ($uri === '/contact') {
            require_once '../app/ContactController.php';
            $controller = new ContactController();
            $controller->index();
        } else {
            http_response_code(404);
            echo "404 - Страница не найдена";
        }
    }
}