@extends("guest.layout.base")

@section('pageTitle')
    @yield("title")
@endsection

@section('content')
    <div class="comic-main">
        <div class="jumbo">
            <img src="{{'img/jumbotron.jpg'}}" alt="">
        </div>
        <div class="separation"></div>
        <div class="comic-container">
            
            @foreach ($comics as $comic) 
                @if($comic["title"] === $comicTitle)
                    
                    <div class="thumb-container">
                        <span class="type lbl">{{$comic["type"]}}</span>
                        <img class="thumb-top" src="{{$comic["thumb"]}}" alt="">
                        <span class="view-gallery lbl">view gallery</span>
                    </div>

                    <div class="desc">
                        <h1>{{$comic["title"]}}</h1>
                        <div class="comic-info-container">
                            <div class="comic-info">
                                <span class="country-price">U.S. Price: <span class="price">{{$comic["price"]}}</span></span>
                                <div class="availability">
                                    <span class="isAvailable">available</span>
                                </div>
                            </div>
                            
                            <div class="check">
                                <span class="check-availability">Check Availability</span>
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                        </div>
                        <p class="comic-desc">{{$comic["description"]}}</p>
                    </div>
                    <div class="adv-container">
                        <span class="adv-label">advertisement</span>
                        <img src="{{'img/adv.jpg'}}" alt="">
                    </div>

                @endif
            @endforeach

        </div>
        <div class="specs-container">
            <div class="comic-container">
                @foreach ($comics as $comic) 
                    @if($comic["title"] === $comicTitle)

                        <div class="talent">
                            <h2 class="box-title">Talent</h2>
                            <div class="item-container">
                                <h3>Art by:</h3>

                                <p class="names">
                                    @foreach ($comic["artists"] as $artist)
                                        @if($loop->last)
                                            <a class="name" href="">{{$artist}}</a>
                                        @else
                                            <a class="name" href="">{{$artist}}</a>,
                                        @endif
                                    @endforeach
                                </p>
                                
                            </div>
                            <div class="item-container">
                                <h3>Written-by:</h3>

                                <p class="names">
                                    @foreach ($comic["writers"] as $writer)
                                        @if($loop->last)
                                            <a class="name" href="">{{$writer}}</a>
                                        @else
                                            <a class="name" href="">{{$writer}}</a>,
                                        @endif
                                    @endforeach
                                </p>
                            </div>
                        </div>
                        <div class="specs">
                            <h2 class="box-title">Specs</h2>
                            <div class="item-container">
                                <h3>Series: </h3>

                                <a class="name series" href="">{{$comic["series"]}}</a>
                            </div>
                            <div class="item-container">
                                <h3>U.S. Price: </h3>

                                <span>{{$comic["price"]}}</span>
                            </div>
                            <div class="item-container">
                                <h3>On Sale Date: </h3>

                                <span>{{$comic["sale_date"]}}</span>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection