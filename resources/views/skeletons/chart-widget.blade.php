<div @class([
        'ww-widget ww-widget--skeleton',
        'ww-widget--width-'.$width,
        'ww-widget--height-'.$height,
])>
    @if($hasTitle)
        <div class="ww-widget__header">
            <div class="ww-skeleton__text ww-widget__title--skeleton"></div>
        </div>
    @endif

    <div class="ww-widget__body">
        <div class="ww-widget__skeleton-chart">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path
                    d="M15.5 2A1.5 1.5 0 0 0 14 3.5v13a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 16.5 2h-1ZM9.5 6A1.5 1.5 0 0 0 8 7.5v9A1.5 1.5 0 0 0 9.5 18h1a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 6h-1ZM3.5 10A1.5 1.5 0 0 0 2 11.5v5A1.5 1.5 0 0 0 3.5 18h1A1.5 1.5 0 0 0 6 16.5v-5A1.5 1.5 0 0 0 4.5 10h-1Z"/>
            </svg>
        </div>
    </div>
</div>
