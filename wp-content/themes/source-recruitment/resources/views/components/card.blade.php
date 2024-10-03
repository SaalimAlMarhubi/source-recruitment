<div class="card bg-white shadow-lg rounded-lg overflow-hidden">

    <div class="p-6">
        {{-- Image --}}
        @if ($image)
            <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="w-[50px] py-8 object-cover">
        @endif
        {{-- Header --}}
        @if ($header)
            <h2 class="text-2xl font-semibold mb-2">{{ $header }}</h2>
        @endif

        {{-- Subheader --}}
        @if ($subheader)
            <h3 class="text-xl text-gray-500 mb-4">{{ $subheader }}</h3>
        @endif

        {{-- Description --}}
        @if ($description)
            <p class="text-gray-700 mb-6">{{ $description }}</p>
        @endif

        {{-- Find Out More Button --}}
        @if ($link)
            <a href="{{ $link['url'] }}"
                class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">
                {{ $link['title'] }}
            </a>
        @endif
    </div>
</div>
