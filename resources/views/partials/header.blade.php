<header>

<div class="top">
    <div class="container">
        <div>DC POWER VISA</div>
        <div>ADDITIONAL DC SITES</div>
    </div>
</div>
<div class="nav">
    <div class="container d-flex justify-content-between">
        <img src="{{ Vite::asset('resources/img/DC-logo.png') }}" alt="">
        <nav class="nav justify-content-center align-items-center ">
            <a class="nav-link {{Route::currentRouteName() === 'characters' ? 'nav-active' :''}}" href="{{route('characters')}}">CHARACTERS</a>
            <a class="nav-link {{Route::currentRouteName() === 'comics.index' ? 'nav-active' :''}}" href="{{route('comics.index')}}">COMICS</a>
            <a class="nav-link {{Route::currentRouteName() === 'movies' ? 'nav-active' :''}}" href="{{route('movies')}}">MOVIES</a>
            <a class="nav-link {{Route::currentRouteName() === 'tv' ? 'nav-active' :''}}" href="#">TV</a>
            <a class="nav-link {{Route::currentRouteName() === 'games' ? 'nav-active' :''}}" href="#">GAMES</a>
            <a class="nav-link {{Route::currentRouteName() === 'collectibles' ? 'nav-active' :''}}" href="#">COLLECTIBLES</a>
            <a class="nav-link {{Route::currentRouteName() === 'videos' ? 'nav-active' :''}}" href="#">VIDEOS</a>
            <a class="nav-link {{Route::currentRouteName() === 'fans' ? 'nav-active' :''}}" href="#">FANS</a>
            <a class="nav-link {{Route::currentRouteName() === 'news' ? 'nav-active' :''}}" href="#">NEWS</a>
            <a class="nav-link {{Route::currentRouteName() === 'shop' ? 'nav-active' :''}}" href="#">SHOP</a>
        </nav>
        <div class="d-flex align-items-center">
            <input placeholder="Search" type="text">
        </div>

    </div>
    
</div>
<div class="jumbotron"></div>

</header>
