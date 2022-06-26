
@php
$links = [
    'homepage' => 'Home',
    'authors' => 'Authors',
    'books' => 'Books',
    'bookshops' => 'Bookshops',
    'about-us' => 'About us'
];

@endphp

<nav>

@foreach ($links as $route => $label)

    @if ($current_page == $route)
        <span>{{ $label }}</span>
    @else
        <a href="{{ route($route) }}">{{ $label }}</a>
    @endif

@endforeach

@auth

{{Auth::user()->email}}

<form action="{{ route('logout')}}" method="post">
@csrf
<button>Logout</button>
</form>

@else 

<a href="{{route('login')}}">Login</a>

@endauth

@guest

<a href="{{route('register')}}">Register here!</a>
    
@endguest

@can('admin')

<a href="{{route('admin.home')}}">Administration</a>

@endcan

</nav>