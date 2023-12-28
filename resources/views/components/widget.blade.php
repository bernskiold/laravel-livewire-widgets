<div {{ $attributes->class([
    'ww-widget',
]) }}>
    <div class="ww-widget__header">
        @if(!empty($title))
            <h2 class="ww-widget__title">{{ $title }}</h2>
        @endif

        @if(isset($actions))
            <div>
                {{ $actions ?? '' }}
            </div>
        @endif
    </div>
    <div class="ww-widget__body">
        {{ $slot }}
    </div>
</div>
