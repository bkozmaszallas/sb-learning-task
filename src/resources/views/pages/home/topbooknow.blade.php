<section class="top-book-now">
    <p class="title">
        Top book now
    </p>
    <div class="listings">
        @foreach ([
            ['title' => 'The Oasis', 'price' => '$10,000', 'location' => 'Rio de Janeiro, Brazil', 'img' => 'booknow0.png'],
            ['title' => 'The Sanctuary', 'price' => '$9,000', 'location' => 'Bali, Indonesia', 'img' => 'booknow1.png'],
            ['title' => 'The Infinity', 'price' => '$8,000', 'location' => 'Sydney, Australia', 'img' => 'booknow2.png'],
            ['title' => 'La Maison', 'price' => '$8,000', 'location' => 'Barcelona, Spain', 'img' => 'booknow3.png'],
            ['title' => 'Serenity Shores', 'price' => '$7,000', 'location' => 'Sydney, Australia', 'img' => 'booknow4.png'],
            ['title' => 'Azure Haven', 'price' => '$8,000', 'location' => 'Barcelona, Spain', 'img' => 'booknow5.png'],
            ['title' => 'Ocean Breeze', 'price' => '$7,000', 'location' => 'Bali, Indonesia', 'img' => 'booknow6.png'],
            ['title' => 'Palm Breeze', 'price' => '$6,000', 'location' => 'Phuket, Thailand', 'img' => 'booknow7.png'],
        ] as $item)
            <div class="listing">
                <div class="stars">
                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.55163 0.934615C7.73504 0.562992 8.26496 0.562993 8.44837 0.934616L10.2348 4.55433C10.3076 4.70191 10.4484 4.80419 10.6113 4.82786L14.6059 5.4083C15.016 5.4679 15.1797 5.97188 14.883 6.26115L11.9925 9.07871C11.8746 9.19358 11.8208 9.35908 11.8487 9.52127L12.531 13.4997C12.6011 13.9082 12.1724 14.2197 11.8055 14.0268L8.23267 12.1484C8.08701 12.0719 7.91299 12.0719 7.76733 12.1484L4.19445 14.0268C3.82764 14.2197 3.39892 13.9082 3.46898 13.4997L4.15134 9.52127C4.17916 9.35908 4.12538 9.19358 4.00754 9.07871L1.11702 6.26115C0.820263 5.97188 0.984019 5.4679 1.39413 5.4083L5.38873 4.82785C5.55158 4.80419 5.69236 4.70191 5.76519 4.55433L7.55163 0.934615Z" fill="#FFDA18"/>
                        </svg>
                        4.8
                </div>
                <img class="listing-image" src="{{ asset($item['img']) }}">
                <div class="listing-bottom">
                    <div class="left-side">
                        <p class="listing-title">
                            {{ $item['title'] }}
                        </p>
                        <p class="listing-location">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="20" height="20" viewBox="0 0 256 256" xml:space="preserve">

                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 45 1.802 c 16.583 0 30.075 13.491 30.075 30.075 c 0 7.102 -2.538 14.004 -7.145 19.434 L 45 78.317 L 22.07 51.311 c -4.608 -5.43 -7.145 -12.332 -7.145 -19.434 C 14.925 15.294 28.417 1.802 45 1.802 M 45 45.692 c 8.222 0 14.912 -6.689 14.912 -14.912 c 0 -8.222 -6.689 -14.912 -14.912 -14.912 S 30.088 22.557 30.088 30.78 C 30.088 39.002 36.778 45.692 45 45.692 M 45 0 C 27.395 0 13.123 14.272 13.123 31.877 c 0 7.86 2.858 15.043 7.573 20.6 L 45 81.101 l 24.304 -28.624 c 4.716 -5.558 7.573 -12.741 7.573 -20.6 C 76.877 14.272 62.605 0 45 0 L 45 0 z M 45 43.889 c -7.24 0 -13.11 -5.869 -13.11 -13.11 c 0 -7.24 5.869 -13.11 13.11 -13.11 s 13.11 5.869 13.11 13.11 C 58.11 38.02 52.24 43.889 45 43.889 L 45 43.889 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #8C8C8C; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 58.814 71.531 l -1.575 1.575 c 9.772 1.532 15.583 4.707 15.583 7.094 c 0 3.261 -10.838 7.997 -27.822 7.997 S 17.178 83.461 17.178 80.2 c 0 -2.387 5.811 -5.562 15.583 -7.094 l -1.575 -1.575 c -9.401 1.643 -15.81 4.907 -15.81 8.669 c 0 5.412 13.263 9.8 29.625 9.8 c 16.361 0 29.625 -4.388 29.625 -9.8 C 74.625 76.439 68.215 73.174 58.814 71.531 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #8C8C8C; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                </g>
                                </svg>
                            {{ $item['location'] }}
                        </p>
                    </div>
                    <div class="right-side">
                        <p>
                            {{ $item['price'] }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="button-wrap">
        <button class="button">
            See all
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M20 12L14 6M20 12L14 18" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </button>
    </div>
</section>
