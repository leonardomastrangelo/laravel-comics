<header>
    <div id="top-header">
        <div class="container d-flex justify-content-end">
            <span>dc power visa</span>
            <span>additional sites <i class="fa-solid fa-caret-down"></i></span>
        </div>
    </div>
    <nav class="container d-flex justify-content-between py-3">
        <div>
            <img 
            src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo"
            class="d-block">
        </div>
        <ul>
            @foreach ($header_links as $link)
            <li>
                <a href="#">
                    {{$link}}
                </a>
            </li>
            @endforeach
        </ul>
        <div class="input-group d-flex align-items-center">
            <input type="text" class="form-control"
            placeholder="Search">
            <span class="input-group-text border-0">
                <i class="fa-solid fa-magnifying-glass"></i>
            </span>
        </div>
    </nav>
</header>