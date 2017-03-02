<div class="page-header">
    <h1>
        {{ $slot }}
        @if(isset($subtitle))
            <small>{{ $subtitle }}</small>
        @endif
    </h1>
</div>