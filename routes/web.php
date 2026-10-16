<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;


/*
class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Route::pattern('id', '[0-9]+');
    }
}
/*
Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/', function () {
    return'!!!!!!!!!!!!!!!';
});

Route::get('/about', function () {
    return 'about page';
});
Route::get('/about/{id}', function ($id) {
    return 'Номер страницы ' . $id;
});
Route::get('/about/{catid}/{mouseid}', function ($catid,$mouseid = 1,) {
    return 'ID кошки ' . $catid . 'ID мыши:' . $mouseid;
});

// Ограничение параметров маршрутов в Laravel
Route::get('/post/{id}', function ($id) {
    return 'post ' . $id;
})->where('id', '[0-9]+'); // where - условие "где"

// Ограничения на несколько параметров
Route::get('/post/{id}', function ($slug,$id) {
    return 'post ' . $slug. ' id ' . $id;
})->where('id', '[0-9]+') // a-z любые строчные (маленькие) буквы латинского алфавита от a до z
    ->where('id', '[0-9]+'); // любые цифры от 0 до 9

// Шаблонные ограничения параметров маршрутов
Route::get('/post/{id}', function ($id) {
    return 'post ' . $id;
})->where('id', ); // ограничение тоько цифрами

// Шаблонные ограничения параметров маршрутов
Route::get('/post/{slug}', function ($slug) {
    return 'post ' . $slug;
})->where('id', ); // ограничение только буквами

// Шаблонные ограничения параметров маршрутов
Route::get('/post/{id}', function ($order) {
    return 'post ' . $order;
})->where('order', ['name', 'surname', 'age'] ); // ограничение только цифрами и буквами

// Глобальыне ограничения

