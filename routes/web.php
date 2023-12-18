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
    $footer_links = [
        'footer-facebook.png',
        'footer-twitter.png',
        'footer-youtube.png',
        'footer-pinterest.png',
        'footer-periscope.png',
    ];
    return view('home', compact('products', 'header_links', 'options_links', 'jumbo_links', 'footer_links'));
})->name = "home";
