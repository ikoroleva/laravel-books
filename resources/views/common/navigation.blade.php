
@php
$links = [
    'homepage' => 'Home',
    'authors' => 'Authors',
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

</nav>