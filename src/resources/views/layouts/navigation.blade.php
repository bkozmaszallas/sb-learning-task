
<nav>
    <ul>
        @foreach (['menu1', 'menu2', 'menu3'] as $item)
            <li>
                {{ $item }}
            </li>
        @endforeach
    </ul>
</nav>
