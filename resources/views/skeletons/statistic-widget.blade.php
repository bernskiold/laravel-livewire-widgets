<div @class([
        'ww-widget ww-widget--skeleton',
        'ww-widget--width-'.$width,
        'ww-widget--height-'.$height,
])>
    <div class="ww-widget__body">
        @if($hasTitle)
            <div class="ww-widget__stat-title--skeleton ww-skeleton__text"></div>
        @endif

        <div class="ww-widget__stat-value--skeleton ww-skeleton__text"></div>

        @if($hasChange && $isComparisonEnabled)
            <div class="ww-widget__stat-change"></div>
        @endif
    </div>
</div>
