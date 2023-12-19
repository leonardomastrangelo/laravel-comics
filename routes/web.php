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
    $jumbo_links = [
        'dc comics' => [
            'characters',
            'comics',
            'movies',
            'TV',
            'games',
            'videos',
            'news',
        ],
        'dc' => [
            'terms of use',
            'privacy policy (new)',
            'ad choises',
            'advertising',
            'jobs',
            'subscriptions',
            'talent workshops',
            'CPSC certificates',
            'ratings',
            'shop help',
            'contact us',
        ],
        'sites' => [
            'DC',
            'MAD magazine',
            'DC kids',
            'DC universe',
            'DC power visa'

        ],
        'shop' => [
            'shop DC',
            'shop DC collectibles',
        ],
    ];
    return view('home', compact('products', 'options_links', 'jumbo_links'));
})->name("home");

Route::get('/comics', function () {
    $products = config('comics.comics');
    return view('comics.index', compact('products'));
})->name("comics.index");

Route::get('/comics/{id}', function ($id) {
    $products = config('comics.comics');
    if ($id >= 0 && $id < count($products)) {
        $product = $products[$id];
        return view('comics.show', compact('product'));
    } else {
        abort(404);
    }
})->name("comics.show");


