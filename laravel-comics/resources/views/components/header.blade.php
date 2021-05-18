<header>
    <div class="header-top">
        <ul>
            <li>
                <a href="#">
                    dc power&#8480; visa&#174;
                </a> 
            </li>
            <li>
                <a href="#">
                    additional dc sites <i class="fas fa-caret-down"></i>
                </a>
            </li>
        </ul>
    </div>
    <nav>
        <a href="{{ route('home') }}">
            <img src="{{ asset('/storage/assets/dc-logo.png') }}" alt="logo">
        </a>
        <ul>
            @foreach ($nav as $navItem)
                @if ($navItem == 'comics')
                    <li class="active">
                        <a href="#">
                            {{ $navItem }}
                        </a>
                    </li>
                @elseif ($navItem == 'shop')
                    <li>
                        <a href="#">
                            {{ $navItem }} <i class="fas fa-caret-down"></i>
                        </a>
                    </li>
                @else    
                    <li>
                        <a href="#">
                            {{ $navItem }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
        <div class="input-cont">
            <input type="text" placeholder="Search">
            <i class="fas fa-search"></i>
        </div>
    </nav>
    <div class="jumbotron"></div>
</header>