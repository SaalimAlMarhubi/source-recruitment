<div class="container mx-auto my-8 px-4">
    <div
        class="flex flex-col lg:flex-row items-center lg:space-x-6 space-y-6 lg:space-y-0 {{ $reverse ? 'lg:flex-row-reverse' : '' }}">

        <!-- Text Column -->
        <div class="w-full lg:w-2/5 flex flex-col justify-center items-start p-4 lg:p-6">
            <h2 class="text-3xl font-bold mb-2">{{ $heading }}</h2>
            <h3 class="text-xl text-[#604BD8] font-semibold mb-4">{{ $subheading }}</h3>
            <p class="text-lg text-[#626262] mb-6">{{ $description }}</p>
            <div class="flex flex-wrap gap-4">
                {{-- CTA 1 --}}
                @if ($cta1)
                    <a href="{{ $cta1['url'] }}" target="{{ $cta1['target'] ?? '_self' }}"
                        class="bg-custom-gradient text-white px-6 py-2 rounded-full transition-colors hover:bg-gradient-to-b from-[#342C67] to-[#291B64] inline-block">
                        {{ $cta1['title'] }}
                    </a>
                @endif

                {{-- CTA 2 --}}
                @if ($cta2)
                    <a href="{{ $cta2['url'] }}" target="{{ $cta2['target'] ?? '_self' }}"
                        class="text-[#604BD8] px-6 py-2 rounded-full transition-colors border-[#604BD8] border-2 hover:bg-gradient-to-b from-[#342C67] to-[#291B64] hover:text-white inline-block">
                        {{ $cta2['title'] }}
                    </a>
                @endif
            </div>
        </div>

        <!-- Image Column -->
        <div class="w-full lg:w-3/5 relative">
            <div class="aspect-w-16 aspect-h-9 lg:aspect-w-3 lg:aspect-h-2">
                <img src="{{ $imgSrc['url'] }}" alt="Placeholder Image"
                    class="w-full h-full object-cover rounded-lg shadow-md">
            </div>
        </div>

    </div>
</div>
