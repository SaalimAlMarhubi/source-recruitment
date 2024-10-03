<footer class="bg-[#1D153C] text-white py-8">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Column 1: Logo and Footer Menu --}}
            <div class="footer-menu">
                @if ($logo = get_field('footer_logo', 'option'))
                    <img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}" class="mb-4 max-w-[200px]">
                @else
                    <a class="brand text-purple-800 font-bold text-3xl mb-4 inline-block" href="{{ home_url('/') }}">
                        {!! $siteName !!}<span class="text-white">.</span>
                    </a>
                @endif

                @if (has_nav_menu('footer_menu'))
                    {!! wp_nav_menu([
                        'theme_location' => 'footer_menu',
                        'menu_class' => 'footer-nav space-y-2 text-sm',
                        'echo' => false,
                    ]) !!}
                @else
                    <p>{{ __('Please assign a menu to the Footer Menu location', 'sage') }}</p>
                @endif
            </div>

            {{-- Column 2: Map --}}
            <div class="footer-map">
                <h2 class="text-xl font-semibold mb-4">{{ get_field('map_heading', 'option') ?: 'Find out more' }}</h2>
                @include('components.map')
            </div>

            {{-- Column 3: Social Media Icons --}}
            <div class="footer-social">
                <h2 class="text-xl font-semibold mb-4">{{ get_field('social_heading', 'option') ?: 'Follow Us' }}</h2>
                <div class="flex space-x-4">
                    @php
                        // Get the menu object for the location 'footer_menu'
                        $menu_name = 'footer_menu';
                        $menu = wp_get_nav_menu_object($menu_name);

                        // Retrieve menu items if the menu exists
                        $menu_items = $menu ? wp_get_nav_menu_items($menu->term_id) : [];
                    @endphp

                    @if ($menu_items)
                        @foreach ($menu_items as $item)
                            @php
                                $logo = get_field('social_media_logo', $item->ID);
                                $url = $item->url;
                            @endphp
                            @if ($logo && $url)
                                <a href="{{ $url }}" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ $logo['url'] }}" alt="{{ $item->title }}" class="w-6 h-6">
                                </a>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>
</footer>
