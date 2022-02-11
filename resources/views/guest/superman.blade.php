@extends("guest.layout.base")

@section('pageTitle')
    Superman
@endsection

@section('content')
    <div class="comic-main">
        <div class="jumbo">
            <img src="{{'img/jumbotron.jpg'}}" alt="">
        </div>
        <div class="separation">

        </div>
        <div class="comic-container">
            
            @foreach ($comics as $comic) 
                @if($comic["title"] === "Action Comics #1000: The Deluxe Edition")
                    <div class="desc">
                        <h1>{{$comic["title"]}}</h1>
                        <div class="comic-info-container">
                            <div class="comic-info">
                                <span>U.S. Price:<span class="price">{{$comic["price"]}}</span></span>
                                <div class="availability">
                                    <span class="isAvailable">available</span>
                                </div>
                            </div>
                            
                            <div class="check">
                                <span class="check-availability">Check Availability</span>
                            </div>
                        </div>
                        <p>{{$comic["description"]}}</p>
                    </div>
                    
                    <img src="{{'img/adv.jpg'}}" alt="">
                @endif
            @endforeach

        </div>
    </div>
@endsection