@extends('layouts.main-layout')

@section('content')
<main>

    <section>
        <div class="jumbotron"></div>
    </section>

    <section>
        <div class="comics-cont">
            <div class="info-box">
                <h2>current series</h2>
            </div>
            <div class="comics">
                @foreach ($data as $d)
                    <div class="comic">
                        <div class="img-cont">
                            <img src="{{ $d['thumb']}}" alt="cover">
                        </div>
                        <p>{{ $d['series'] }}</p>
                    </div>
                @endforeach
            </div>
            <a href="#">load more</a>
        </div>
        <div class="separator">
            <ul>
                @foreach ($separator as $s)
                    <li>
                        <img src="{{ asset('/storage/assets/'.$s['path']) }}">
                        {{ $s['name'] }}
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    
</main>
@endsection