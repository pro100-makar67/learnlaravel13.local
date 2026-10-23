<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\PostController; /* Подключение контроллера */
use App\Http\Controllers\TestController; /* Подключение контроллера */


// 47. Введение в Blade в Laravel
Route::get('/users', [UserController::class, 'index']);


Route::get('/newpost', [PostController::class, 'show']); // Сокращенная запись обращения к контроллеру
Route::get('newpost', [PostController::class, 'all']); // Обращение ко второму методу контроллера
Route::get('/longpost', [\App\Http\Controllers\Controller::class, '#']); // Удлиненная запись



Route::get('/rarepost/{id}', [PostController::class, 'show']);
Route::get('/rarepost/{surname}/{name}', [PostController::class, 'newshow']);



Route::get('/oldpost/', [PostController::class, 'show']);
Route::get('oldpost/new', [TestController::class, 'oldshow']);

/* 39. Представления в Laravel*/
Route::get('/views', [TestController::class, 'view']);
Route::get('/newviews', [TestController::class, 'newview']);
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


// Разрешение конфликтов маршрутов
Route::get('/get/{id}', function ($id) {
    return 'get ' . $id;
})->where('id', );
Route::get('/get/all/', function () {
    return 'all';
})->whereNumber('id');
Route::get('/get/all/', function () {
    return 'all';
});

// Группировка маршрутов в Laravel
Route::get('/blog/post/all', function () {
    return 'all';
});
Route::get('/blog/post/id', function ($id) {
    return $id;
});

// Вынесем общую часть через prefix и group
Route::prefix('blog')->group(function () {
    Route::get('/blog/post/all', function () {
        return 'all';
    });
    Route::get('/blog/post/id', function ($id) {
        return $id;
    });
});

// Именованные маршруты в Laravel
Route::get('/newblog/all/{id}', function ($id) {
    return 'blogs' . $id;
})->name('blogs');

// Контроллеры в Laravel
// Задание 1
Route::get('/test', function () {
    return 'Это тестовая страница!';
});
// Задание 2
Route::get('/dir/test', function () {
    return 'Сообщение из вложенной директории /dir/test';
});
// Задание 3
Route::get('/about', function () {
    return 'О нас: мы делаем крутые 676767';
});

Route::get('/contacts', function () {
    return 'Контакты: email67@example.com, тел. +7 (999) 123-45-67';
});



