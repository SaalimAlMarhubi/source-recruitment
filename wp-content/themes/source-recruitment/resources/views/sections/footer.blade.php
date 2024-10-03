<footer class="bg-[#1D153C] text-white py-8 relative">
    <div class="container mx-auto relative">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Column 1: Logo and Footer Menu --}}
            <div class="footer-menu">
                @if ($logo = get_field('footer_logo', 'option'))
                    <img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}" class="mb-4 max-w-[200px]">
                @else
                    <a class="brand text-purple-800 font-bold text-3xl mb-4 inline-block" href="{{ home_url('/') }}">
                        {!! $siteName !!}<span class="text-[#CFFF4D]">.</span>
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
                <h2 class="text-xl font-semibold mb-4">Find Us.</h2>
                @include('components.map')
            </div>

            <div class="footer-social">
            </div>
        </div>

        {{-- Column 3: Social Icons --}}
        <div class="absolute bottom-4 right-4 flex space-x-5">
            <a href="#" class="text-gray-600 hover:fill-[#342C67]">
                {!! file_get_contents(asset('/images/footer-facebook.svg')) !!}
            </a>
            <a href="#" class="text-gray-600 hover:fill-[#342C67]">
                {!! file_get_contents(asset('/images/footer-x.svg')) !!}
            </a>
            <a href="#" class="text-gray-600 hover:fill-[#342C67]">
                {!! file_get_contents(asset('/images/footer-linkedin.svg')) !!}
            </a>
            <a href="#" class="text-gray-600 hover:fill-[#342C67]">
                {!! file_get_contents(asset('/images/footer-insta.svg')) !!}
            </a>
        </div>
    </div>
</footer>
