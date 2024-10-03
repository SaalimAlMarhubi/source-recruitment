<footer class="bg-[#1D153C] text-white py-8">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Column 1: Logo and Footer Menu --}}
            <div class="footer-menu">
                @if ($logo = get_field('footer_logo'))
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
                <h2 class="text-xl font-semibold mb-4">{{ get_field('map_heading') ?: 'Find out more' }}</h2>
                @include('components.map')
            </div>

            {{-- Column 3: Social Media Icons --}}
            <div class="footer-social">
                <h2 class="text-xl font-semibold mb-4">{{ get_field('social_heading') ?: 'Follow Us' }}</h2>
                <div class="flex space-x-4">
                    {{-- Facebook --}}
                    @if ($facebook_url = get_field('facebook_url'))
                        @if ($facebook_logo = get_field('facebook_logo'))
                            <a href="{{ $facebook_url }}" target="_blank" rel="noopener noreferrer">
                                <img src="{{ $facebook_logo['url'] }}" alt="Facebook" class="w-6 h-6">
                            </a>
                        @endif
                    @endif

                    {{-- x --}}
                    @if ($x_url = get_field('x_url'))
                        @if ($x_logo = get_field('x_logo'))
                            <a href="{{ $x_url }}" target="_blank" rel="noopener noreferrer">
                                <img src="{{ $x_logo['url'] }}" alt="Twitter" class="w-6 h-6">
                            </a>
                        @endif
                    @endif

                    {{-- Instagram --}}
                    @if ($instagram_url = get_field('instagram_url'))
                        @if ($instagram_logo = get_field('instagram_logo'))
                            <a href="{{ $instagram_url }}" target="_blank" rel="noopener noreferrer">
                                <img src="{{ $instagram_logo['url'] }}" alt="Instagram" class="w-6 h-6">
                            </a>
                        @endif
                    @endif

                    {{-- LinkedIn --}}
                    @if ($linkedin_url = get_field('linkedin_url'))
                        @if ($linkedin_logo = get_field('linkedin_logo'))
                            <a href="{{ $linkedin_url }}" target="_blank" rel="noopener noreferrer">
                                <img src="{{ $linkedin_logo['url'] }}" alt="LinkedIn" class="w-6 h-6">
                            </a>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
