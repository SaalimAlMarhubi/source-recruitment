{{-- components/cards.blade.php --}}

<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @for ($i = 1; $i <= $max_cards; $i++)
            @if (get_field('card_image_' . $i))
                @include('components.card', [
                    'image' => get_field('card_image_' . $i),
                    'header' => get_field('header_' . $i),
                    'subheader' => get_field('subheader_' . $i),
                    'description' => get_field('description_' . $i),
                    'link' => get_field('link_' . $i),
                ])
            @endif
        @endfor
    </div>
</div>
