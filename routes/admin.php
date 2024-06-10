<?php

use Hai\NsPsr4\Controllers\Admin\DashboardController;
use Hai\NsPsr4\Controllers\Admin\ProductController;
use Hai\NsPsr4\Controllers\Admin\UserController;
use Hai\NsPsr4\Controllers\Admin\CategoryController;

$router->before('GET|POST', '/admin/*.*', function() {

    if (!is_logged()) {
        header('location: ' . url('auth/login') );
        exit();
    } 

    if (!is_admin()) {
        header('location: ' . url() );
        exit();
    }
    
});

$router->mount('/admin', function () use ($router) {

    $router->get('/', DashboardController::class . '@dashboard');

    // CRUD Product
    $router->mount('/products', function () use ($router) {
        $router->get('/',               ProductController::class . '@index');  // Danh sách
        $router->get('/create',         ProductController::class . '@create'); // Show form thêm mới
        $router->post('/store',         ProductController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      ProductController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      ProductController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   ProductController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    ProductController::class . '@delete'); // Xóa
    });

    // CRUD USER
    $router->mount('/users', function () use ($router) {
        $router->get('/',               UserController::class . '@index');  // Danh sách
        $router->get('/create',         UserController::class . '@create'); // Show form thêm mới
        $router->post('/store',         UserController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      UserController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      UserController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   UserController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    UserController::class . '@delete'); // Xóa
    });

    // CRUD Category
    $router->mount('/categories', function () use ($router){
        $router->get('/',               CategoryController::class .'@index');
        $router->get('/create',         CategoryController::class .'@create');
        $router->post('/store',         CategoryController::class .'@store');
        $router->get('/{id}/show',      CategoryController::class .'@show');
        $router->get('/{id}/edit',      CategoryController::class .'@edit');
        $router->post('/{id}/update',   CategoryController::class .'@update');
        $router->get('/{id}/delete',    CategoryController::class . '@delete');
    });
});