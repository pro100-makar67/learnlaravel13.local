<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = ['John', 'Jane', 'Jim'];

        /* 48. Вывод переменных в тегах Blade */
        $data = [
            'var1' => 'aaa',
            'var2' => 'aaa',
            'var3' => 'aaa',
            /* 49. Вывод переменных в атрибуты */
            'cls' => 'active',
            'val' => 'text',
             /* 50. Выполнение произвольного кода в командах Blade */
            'first' => 'john',
            'last' => 'smith',
            /* 51. Арифметические операции в Blade в Laravel */
            'a' => 10,
            'b' => 3,
            /* 52. Работа с массивами в Blade */
            'arr' => [1, 2, 3, 4, 5, 67],
            /* 53. Проверка переменных в Blade */
            'var' => true,
            /* 54. Вывод неэкранированных в Blade */
            'name' => '<b>John</b>',
            /* 56. Условия в Blade в Laravel */
            'isAuth' => false,
            /* 58. Директива @elseif в Blade*/
            'num' => 5,
            /* 59. Директива @ unless - является отрицанием */
            'Auth' => false,
            /* 60. Сложные команды в условиях Blade */
            'arr1' => [1, 2, 3],
            /* 61. Директива @foreach */
            'arr2' => ['a', 'b', 'c', 'd', 'e', 'f'],
            /* 63. Условия и циклы @ foreach в Blade */
            'arr3' => [-1, 2, -3, 4, 5],
            /* 64. Вложенные циклы @ foreach */
            'arr4' => [[1, 2, 3], [4, 5, 6], [7, 8, 9]],
            /* 65. Перебор многомерных массивов */
            'users1' => [
                [
                    'name' => 'user1',
                    'age' => 21,
                ],
                [
                    'name' => 'user2',
                    'age' => 22,
                ],
                [
                    'name' => 'user3',
                    'age' => 23,
                ],
            ],
            /* 66. Цикл @ forelse в Blade */
            'arr5' => ['a', 'b', 'c'],
            /* 68. директива @ break в Blade */
            'arr6' => [1, 2, 3, 4, 5],
            /* 70. Цикл for в Blade */
            'count' => 3,
            /* 72. Практика по шаблонизатору  */
            $links = [
                ['text' => 'BURMALDA', 'href' => 'href1'],
                ['text' => '67', 'href' => 'href2'],
                ['text' => 'LEVA_ZHIRNUY_Y3BAN', 'href' => 'href3'],
            ],
            'employees' => [
                [
                    'name' => 'SHLUHA',
                    'surn' => 'prostituka',
                    'salary' => 1000 ,
                    'banned' => false,
                ],
                [
                    'name' => 'user2',
                    'surn' => 'варплдовыаплдовыап',
                    'salary' => 2000,
                    'banned' => true,
                ],
                [
                    'name' => 'user4',
                    'surn' => 'МЕЛЛСТРОЙ',
                    'salary' => 4000,
                    'banned' => true,
                ],

            ],
            'arr7' => ['aaa', 'bbb', 'ccc'],
            'cities' => ['Moscow', 'London', 'Paris'],
            'days' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31],
            'today' => 15 // ваш код

        ];

        return view('users', compact('users', 'links'), $data);
    }
}
