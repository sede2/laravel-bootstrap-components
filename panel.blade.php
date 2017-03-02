<div class="panel panel-{{ isset($type) ? $type : 'default' }}">
    @if(isset($heading))
        <div class="panel-heading">
            {{ $heading }}
        </div>
    @endif
    <div class="panel-body">
        {{ $slot }}
    </div>
    @if(isset($footer))
        <div class="panel-footer">
            {{ $footer }}
        </div>
    @endif
</div>