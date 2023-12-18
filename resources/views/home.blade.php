@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <section id="jumbo">
    </section>

    <section id="current-series">
        <div class="container">
            <div id="tag-series">
                <span>
                    current series
                </span>
            </div>

            <div class="row justify-content-center align-items-center">
                @foreach ($products as $product)  
                <div class="col-6 col-md-4 col-xl-2 mb-5">
                    <div class="overflow-hidden">
                        <img 
                        src="{{$product['thumb']}}" 
                        alt="{{$product['title']}}">
                    </div>
                    <h2>
                        {{$product['title']}}
                    </h2>
                </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <button>
                    load more
                </button>
            </div>
        </div>
    </section>

    <section id="options">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                @foreach ($options_links as $link)
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <img 
                    src="/img/{{$link['image']}}" 
                    alt="{{$link['title']}}"
                    class="opt">
                    <h3>
                        {{$link['title']}}
                    </h3>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection