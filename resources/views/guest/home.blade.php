@php
@endphp

@extends("guest.layout.base")

@section('pageTitle')
    home
@endsection

@section('content')
    <main>
        <div class="jumbo">
            <img src="{{asset('img/jumbotron.jpg')}}" alt="">
        </div>
        <div class="main-container">
            <span class="section-badge">current series</span>
            <ul class="comics-list">
                @foreach ($comics as $comic)
                <li class="comic-item"><a href="{{route('comic', $comic['id'])}}">
                <img class="comic-thumbnail" src="{{$comic["thumb"]}}" alt="">
                        <h2 class="comic-name">{{$comic["title"]}}</h2>    
                    </a></li>
                @endforeach

            </ul>
            <button class="load-more">load more</button>
        </div>
    </main>
@endsection