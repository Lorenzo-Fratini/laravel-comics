@extends('layouts.main-layout')

@section('content')
    <main>
        <div class="separator">
            <div class="cover">
                <img src="{{ $elem['thumb']}}">
                <div class="label-top">comic book</div>
                <div class="label-bottom">view gallery</div>
            </div>
        </div>
        <div class="comic-details-cont">
            <div class="details-wrapper">
                <div class="comic-details">
                    <h2>
                        {{ $elem['title'] }}
                    </h2>
                    <div class="green-bar-wrapper">
                        <div class="green-bar-left">
                            <div>
                                U.S. price: <span>{{ $elem['price'] }}</span>
                            </div>
                            <div>
                                AVAILABLE
                            </div>
                        </div>
                        <div class="green-bar-right">
                            Check viability <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
                    <p>
                        {{ $elem['description'] }}
                    </p>
                </div>
                <div class="adv">
                    <figcaption>ADVERTISEMENT</figcaption>
                    <img src="{{ asset('/storage/assets/adv.jpg') }}">
                </div>
            </div>
        </div>
        <div class="info-list">
            <ul>
                <li>
                    <h2>Talent</h2>
                </li>
                <li>
                    Art by: 
                    <div class="lists"> 
                        @foreach ($elem['artists'] as $e)
                            <a href="#">
                                {{ $e }}
                            </a>
                            @if(!($loop->last))
                                ,
                            @endif
                        @endforeach
                    </div>
                </li>
                <li>
                    Written by:
                    <div class="lists"> 
                        @foreach ($elem['writers'] as $e)
                            <a href="#">
                                {{ $e }}
                            </a>
                            @if(!($loop->last))
                                ,
                            @endif
                        @endforeach
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <h2>
                        Specs
                    </h2>
                </li>
                <li>
                    Series:
                    <div class="lists">
                        <a href="#" class="uppercase">
                            {{ $elem['series'] }}
                        </a>
                    </div>
                </li>
                <li>
                    U.S. price:
                    <div class="lists">
                        {{ $elem['price'] }}
                    </div>
                </li>
                <li>
                    On Sale Date:
                    <div class="lists">
                        {{ date('M d Y', strtotime($elem['sale_date'])) }}
                    </div>
                </li>
            </ul>
        </div>
    </main>
@endsection