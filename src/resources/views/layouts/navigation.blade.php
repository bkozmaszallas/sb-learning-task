
<nav>
    <ul>
        @foreach (['Home', 'Destinations', 'Blog', 'News', 'Contact'] as $item)
            <li>
                {{ $item }}
            </li>
        @endforeach
    </ul>
</nav>
