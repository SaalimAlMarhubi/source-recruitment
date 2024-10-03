{{-- Template Name: Custom Template --}}

@extends('layouts.app')

@section('content')
    @include('sections.hero')

    @php
        $max_blocks = 2; // Adjust to the number of content blocks
        $max_cards = 3; // Adjust to the number of cards
    @endphp

    {{-- Loop through content blocks --}}
    @for ($i = 1; $i <= $max_blocks; $i++)
        @if (get_field('heading_' . $i))
            @include('partials.content-block', [
                'heading' => get_field('heading_' . $i),
                'subheading' => get_field('subheading_' . $i),
                'description' => get_field('description_' . $i),
                'cta1' => get_field('cta_1_link_' . $i),
                'cta2' => get_field('cta_2_link_' . $i),
                'imgSrc' => get_field('image_' . $i),
                'reverse' => get_field('reverse_layout_' . $i),
            ])
        @endif
    @endfor

    {{-- Cards section --}}
    @include('components.cards', ['max_cards' => $max_cards])
@endsection
