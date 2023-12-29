@php
    use Bernskioldmedia\LaravelLivewireWidgets\Enums\WidgetHeights;
    use Bernskioldmedia\LaravelLivewireWidgets\Enums\WidgetWidths;
@endphp
@props([
    'title' => null,
    'actions' => null,
    'width' => WidgetWidths::Fourth->value,
    'height' => WidgetHeights::One->value,
])
<div {{ $attributes->class([
    'ww-widget',
    'ww-widget--width-'.$width,
    'ww-widget--height-'.$height,
]) }}>
    <div class="ww-widget__header">
        @if(!empty($title))
            <h2 class="ww-widget__title">{{ $title }}</h2>
        @endif

        @if(isset($actions))
            <div class="ww-widget__actions">
                {{ $actions ?? '' }}
            </div>
        @endif
    </div>
    <div class="ww-widget__body">
        {{ $slot }}
    </div>
</div>
