<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'banner' => [
            [
                'text' => 'DIGITAL COMICS',
                'src' => 'buy-comics-digital-comics.png'
            ],
            [
                'text' => 'DC MERCHANDISE',
                'src' => 'buy-comics-merchandise.png'
            ],
            [
                'text' => 'SUBSCRIPTION',
                'src' => 'buy-comics-subscriptions.png'
            ],
            [
                'text' => 'COMIC SHOP LOCATOR',
                'src' => 'buy-comics-shop-locator.png'
            ],
            [
                'text' => 'DC POWER VISA',
                'src' => 'buy-dc-power-visa.svg'
            ],
        ],
        'comics' => config('comics')
    ];

    return view('home', $data);
});
