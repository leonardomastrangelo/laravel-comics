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
    $products = config('comics.comics');
    $header_links = [
        'characters',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop'
    ];
    $options_links = [
        [
            'image' => 'buy-comics-digital-comics.png',
            'title' => 'digital comics'
        ],
        [
            'image' => 'buy-comics-merchandise.png',
            'title' => 'dc merchandise'
        ],
        [
            'image' => 'buy-comics-subscriptions.png',
            'title' => 'subscriptions'
        ],
        [
            'image' => 'buy-comics-shop-locator.png',
            'title' => 'comic shop locator'
        ],
        [
            'image' => 'buy-dc-power-visa.svg',
            'title' => 'comic shop locator'
        ],
    ];
    return view('home', compact('products', 'header_links', 'options_links'));
})->name = "home";
