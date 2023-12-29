<x-livewire-widgets::widget class="ww-widget--statistic"
                            :title="$widgetTitle"
                            :width="$width"
                            :height="$height">
    <x-highcharts::chart :chart-key="$chartKey"/>
</x-livewire-widgets::widget>
