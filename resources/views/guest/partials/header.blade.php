<header>
    <div class="header-container">
        <div class="container">
            <img src="{{asset('img/dc-logo.png')}}" alt="">
            <ul>
                <li><a href="{{route("characters")}}" class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}}">Characters</a></li>
                <li><a href="{{route("homepage")}}" class="{{Route::currentRouteName() === 'homepage' ? 'active' : ''}}">Comics</a></li>
                <li><a href="{{route("movies")}}" class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}">Movies</a></li>
                <li><a href="{{route("tv")}}" class="{{Route::currentRouteName() === 'tv' ? 'active' : ''}}">Tv</a></li>
                <li><a href="{{route("games")}}" class="{{Route::currentRouteName() === 'games' ? 'active' : ''}}">Games</a></li>
                <li><a href="{{route("collectables")}}" class="{{Route::currentRouteName() === 'collectables' ? 'active' : ''}}">Collectables</a></li>
                <li><a href="{{route("videos")}}" class="{{Route::currentRouteName() === 'videos' ? 'active' : ''}}">Videos</a></li>
                <li><a href="{{route("fans")}}" class="{{Route::currentRouteName() === 'fans' ? 'active' : ''}}">Fans</a></li>
                <li><a href="{{route("news")}}" class="{{Route::currentRouteName() === 'news' ? 'active' : ''}}">News</a></li>
                <li><a href="{{route("shop")}}" class="{{Route::currentRouteName() === 'shop' ? 'active' : ''}}">Shop</a></li>
            </ul>
       
        </div>
        
        
    </div>
</header>