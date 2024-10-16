@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="cards">
            @foreach($array as $showArray)
                    <div class="card">
                        <img src="{{$showArray['path']}}" alt="" class="card_img"> 
                        <h3 class="card_name">{{ $showArray['title'] }}</h3>
                        <h3 class="card_name">{{ $showArray['id'] }}</h3>
                        <p class="card_price">{{ $showArray['price'] }}₽</p>
                    </div>
            @endforeach
        </div>
    </div>
    @endsection()