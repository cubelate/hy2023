<?php

use App\Admin\Controllers\HyNewController;

use App\Admin\Controllers\Image2Controller;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('hy-news', HyNewController::class);
    $router->resource('hy-companies', HyCompanyController::class);
    $router->post('/upload', [Image2Controller::class, 'upload']);
    $router->resource('hy-index-news', HyIndexNewController::class);

    $router->resource('hy-form-bps', HyFormBpController::class);
    $router->resource('hy-form-reservations', HyFormReservationController::class);
    $router->resource('hy-form-resumes', HyFormResumeController::class);

    $router->resource('hy-honors', HyHonorController::class);
});
