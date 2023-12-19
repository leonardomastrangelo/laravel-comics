@extends('layouts.app')

@section('title', "Product Details")

@section('content')
    <section class="details">
        <div id="jumbo">
        </div>
        <div class="img-container">
            <div class="container position-relative">
                <div class="img-card">
                    <img id="comic" src="{{$product['thumb']}}" alt="">
                    <span>comic book</span>
                    <div>view gallery</div>
                </div>
            </div>
        </div>
    </section>
@endsection