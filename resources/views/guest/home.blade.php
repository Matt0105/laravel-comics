

@extends("guest.layout.base")

@section('pageTitle')
    home
@endsection

@section('content')
    <main>
        <div class="jumbo">
            <img src="{{'img/jumbotron.jpg'}}" alt="">
        </div>
        <div class="main-container">
            <span class="section-badge">current series</span>
            <ul class="comics-list">

                @foreach ($comics as $comic)
                    <li class="comic-item"><a href="{{$comic["title"] === "Action Comics #1000: The Deluxe Edition" ? route("superman") : ''}}">
                        <img class="comic-thumbnail" src="{{$comic["thumb"]}}" alt="">
                        <h2 class="comic-name">{{$comic["title"]}}</h2>    
                    </a></li>
                @endforeach

            </ul>
            <button class="load-more">load more</button>
        </div>
    </main>
@endsection