<?php

$page = $_GET['page'] ?? 'php';
$menu = $_GET['menu'] ?? '';

switch ($page) {
    case 'php':
        load_controller($page);
        break;
    default:
        http_response_code(404);
        load_controller("404");
}