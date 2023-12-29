@php
    use BernskioldMedia\LaravelLivewireWidgets\Enums\WidgetHeights;
    use BernskioldMedia\LaravelLivewireWidgets\Enums\WidgetWidths;
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

    @if(!empty($title) || isset($actions))
        <div class="ww-widget__header">
            @if(!empty($title))
                <h2 class="ww-widget__title">{{ $title }}</h2>
            @endif

            @if(isset($actions))
                <div {{ $actions->attributes->class(['ww-widget__actions']) }}>
                    {{ $actions ?? '' }}
                </div>
            @endif
        </div>
    @endif

    @if(isset($slot))
        <div class="ww-widget__body">
            {{ $slot }}
        </div>
    @endif

    @if(isset($footer))
        <div {{ $footer->attributes->class(['ww-widget_footer']) }}>
            {{ $footer }}
        </div>
    @endif

</div>
